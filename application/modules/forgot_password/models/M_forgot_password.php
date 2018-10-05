<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_forgot_password extends CI_Model {

    function __construct()
	{
        parent::__construct();
       	$this->load->model('data/Api');
		$this->load->model('master/Master_setting');
		$result_master 	= $this->Master_setting->SetSettings();
		$result_smtp 	= $this->Master_setting->SetSettingSMTP();
			// Setting Master
			$this->data_master = array(
				'base_url'					=> base_url(),
				'title' 					=> $result_master['title'],
				'favicon' 					=> $result_master['favicon'],
				'logo_full'	 				=> $result_master['logo_full'],
				'logo' 						=> $result_master['logo'],
				'login_image' 				=> $result_master['login_image'],
				'footer' 					=> $result_master['footer'],
				'copyright' 				=> $result_master['copyright'],
			);

			// Setting SMTP
			$this->data_smtp = array(
				  'protocol' 	=> $result_smtp['protocol'],
				  'smtp_host' 	=> $result_smtp['smtp_host'],
				  'smtp_port' 	=> $result_smtp['smtp_port'],
				  'smtp_user' 	=> $result_smtp['smtp_user'],
				  'smtp_pass' 	=> $result_smtp['smtp_pass'],
				  'mailtype' 	=> $result_smtp['mailtype'],
				  'charset' 	=> $result_smtp['charset'],
				  'wordwrap' 	=> $result_smtp['word_wrap']
			);

			$this->email_from 		= $result_smtp['smtp_from'];
			$this->email_fromname 	= $result_smtp['smtp_fromname'];
	}
	
	function check_email($email,$base_url){

		$type = '_table';
		$type_val = 'm_login';
		$fields = '*';
		$filter = '(email='.$email.')';

		$data = $this->Api->get( $type , $type_val , $fields , $filter );

		if(isset($data['resource'][0]['email'])){

				$type_val = 'm_'.$data['resource'][0]['user_type'];
				$fields = '*';
				$filter = '(email='.$data['resource'][0]['email'].')';
				$data = $this->Api->get( $type , $type_val , $fields , $filter );
					
				$tenant_id = $data['resource'][0]['tenant_id'];

				$insert_data = array(
				   'email' 			=> $data['resource'][0]['email'],
				   'expired' 		=> date('Y-m-d', strtotime('+1 day') ),
				   'result_reset' 	=> 0,
				   'created' 		=> $data['resource'][0]['email'],
				   'created_at' 	=> date('Y-m-d H:i:s'),
				   'tenant_id' 		=> $data['resource'][0]['tenant_id']
				);


				$insert_log_reset_pass = $this->Api->post_table( "log_reset_passwd" , $insert_data );

				$insert_id = $insert_log_reset_pass['resource'][0]['id'];
				$send_status = $this->send_mail_reset_password($tenant_id, $data['resource'][0]['fullname'], $data['resource'][0]['email'], $base_url, $insert_id);
			
			if($send_status['status']){
				$result = array('status'=> 'success', 'reason'=> 'Message has been sent, please check your mail');
			}else{
				$result = array('status'=> 'error', 'reason'=> 'Message failed to send');
			}
		}else{
				$result = array('status'=> 'error', 'reason'=> 'Email / Username not found');
		}	
	

		return $result;
	}



	function send_mail_reset_password($tenant_id, $fullname, $email, $base_url, $insert_id){

		$this->load->library('encryption');
		$this->load->library('email');

        //Server settings
        $config = $this->data_smtp;

		setlocale(LC_ALL, 'id_ID');
		$this->load->helper('date');
		$type = "_table";
		$fields = "*";
		$type_val 	= "m_notif_template";
		$filter 	= "(theme=forgot_password)";
		$result_template = $this->Api->get($type , $type_val, $fields, $filter);

		$mail_subject 	= $result_template['resource'][0]['mail_subject'];
		$html_template 	= $result_template['resource'][0]['html_template'];

		$url = $base_url.'forgot_password/reset_password/'.base64_encode($this->encryption->encrypt($insert_id)).'/'.base64_encode($this->encryption->encrypt($email));

		$filename = $_SERVER['DOCUMENT_ROOT']."/recruitment/assets/backend/modules/core/common/img/".$this->data_master['logo']."";
		$this->email->attach($_SERVER['DOCUMENT_ROOT']."/recruitment/assets/backend/modules/core/common/img/".$this->data_master['logo']."", "inline");

		$cid = $this->email->attachment_cid($filename);
   		$message = $html_template;
		$message = str_replace('$cid',$cid,$message);
   		$message = str_replace('$fullname',$fullname,$message);
   		$message = str_replace('$email',$email,$message);
   		$message = str_replace('$url',$url,$message);

       	$this->email->initialize($config);
		$this->email->set_newline("\r\n");
		$this->email->from( $this->email_from , $this->email_fromname ); // change it to yours
		$this->email->to($email);// change it to yours
		$this->email->subject($mail_subject);
		$this->email->message($message);

	   	if($this->email->send()){
	    	$result = array('status' => true);
		}else{
			$result = array('status' => false);
		}
		
		return $result;
	}


	function check_reset_passwd($reset_id,$email){

		$type = "_table";
		$fields = "*";
		$type_val = "log_reset_passwd";
		$filter = "(id=".$reset_id.")and(email=".$email.")and(expired >= ". date('Y-m-d').")";
		$check_log = $this->Api->get($type , $type_val, $fields, $filter);

		if(isset($check_log['resource'][0])){
			$result = array('status'=> true);
		}else{
			$result = array('status'=> false);
		}

		return $result;
	}


	function submit_reset($id,$email,$password_new){
		$table = 'm_login';
		$update_data = array(
           'password' 	=> $password_new,
           'updated' 	=> $email,
           'updated_at' => date('Y-m-d H:i:s')
        );
		$filter = array("filter" => "email=".$email."");
		$updted_pass = $this->Api->put_table( $table , $update_data, $filter );
			
		if (!empty($updted_pass['resource'])){

			$param = array("result_reset" => '1');
			$filter = array("filter" => "id=".$id."");
			$this->Api->put_table( 'log_reset_passwd', $param, $filter );

			$result = array('status'=> true, 'reason'=> 'Password has been reset');
		}else{
			$result = array('status'=> false, 'reason'=> 'Failed reset password');
		}
		return $result;
	}
}

/* End of file m_forgot_password.php */
/* Location: ./application/models/m_forgot_password.php */