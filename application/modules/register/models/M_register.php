<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_register extends CI_Model {

	function __construct()
    {

		parent::__construct();
		$this->load->model('data/Api');
		$this->load->model('master/Master_setting');
		$this->load->library('encryption');
		$this->load->library('email');

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


	public function submit( $fullname, $email , $password ){
		$password =  password_hash( $password, PASSWORD_BCRYPT, ['cost' => 10] );
		$params = array("ps_fullname" => $fullname , "ps_email"=> $email , "ps_password"=> $password);
		$sp_name = "sp_register_pelamar";
		$result = $this->Api->post_proc( $sp_name , $params );

		if ($result['ps_status'] == "success") {
			$this->send_notif_verification( $email , $fullname );
		}
		return $result;
	}


	public function send_notif_verification( $email , $fullname ){
		$table_name = "log_mail_notif";
		$params = array( "email" => $email , "receipent_name" => $fullname, "theme"=>"confirm_email" );
		$result = $this->Api->post_table( $table_name , $params );

		if (!empty($result['resource'][0]['id'])) {
			$log_id = $result['resource'][0]['id'];
			$sendMail_register = $this->sendMail_register( $log_id, $email, $fullname );
		}
		return false;
	}


	public function confirm_email( $email ){
		
		$param 	= array("is_email_verified" => "1" , "status" => "Aktif");
		$filter = array("filter" => "email=".$email."");
		$result	= $this->Api->put_table( 'm_pelamar', $param, $filter );

		return false;
	}



	public function sendMail_register( $log_id, $email, $fullname )
	{

		$id				= $log_id;
		$email_to		= $email;
		$receipent_name	= $fullname;
		$theme			= 'confirm_email';

		$type_val 	= "m_notif_template";
		$filter 	= "(theme=".$theme.")";

		$result_template = $this->Api->get('_table' , $type_val, '*', $filter);

		$mail_subject 	= $result_template['resource'][0]['mail_subject'];
		$html_template 	= $result_template['resource'][0]['html_template'];

		$url_confirm = base_url().'register/confirm_email/'.base64_encode($this->encryption->encrypt($id)).'/'.base64_encode($this->encryption->encrypt($email_to));

		
		$filename = $_SERVER['DOCUMENT_ROOT']."/recruitment/assets/backend/modules/core/common/img/".$this->data_master['logo']."";
		$this->email->attach($_SERVER['DOCUMENT_ROOT']."/recruitment/assets/backend/modules/core/common/img/".$this->data_master['logo']."", "inline");

		$cid = $this->email->attachment_cid($filename);

		$message = $html_template;
   		$message = str_replace('$receipent_name',$receipent_name,$message);
   		$message = str_replace('$cid',$cid,$message);
   		$message = str_replace('$url_confirm',$url_confirm,$message);
   		$message = str_replace('$title',$this->data_master['title'],$message);
   		$message = str_replace('$copyright',$this->data_master['copyright'],$message);

		$config = $this->data_smtp;

		setlocale(LC_ALL, 'id_ID');
		$this->load->helper('date');

		$this->email->initialize($config);
		$this->email->set_newline("\r\n");
		$this->email->from( $this->email_from , $this->email_fromname ); // change it to yours
		$this->email->to($email_to);// change it to yours
		$this->email->subject($mail_subject);
		$this->email->message($message);

		if($this->email->send()){
			$flag = 1;
			$status = TRUE;
		}else{
		 	show_error($this->email->print_debugger());
		 	$flag = 9;
		 	$status = FALSE;
		}

		$param = array("flag" => $flag);
		$filter = array("filter" => "id=".$id."");
		$this->Api->put_table( 'log_mail_notif', $param, $filter );

		return array('status' => $status);
	}
}
