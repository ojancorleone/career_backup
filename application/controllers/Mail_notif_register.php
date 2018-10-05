<?php

class Mail_notif_register extends CI_Controller {

			function __construct()
			    {
			        parent::__construct();
			       	$this->load->model('data/Api');
					$this->load->model('master/Master_setting');
					$this->load->library('encryption');

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

			function sendMail()  
			{
				$type 		= "_table";
				$type_val 	= "log_mail_notif";
				$fields 	= "*";
				$filter 	= "(flag=0)";
				$order 		= NULL;
				$limit 		= 1;
				$result_mail = $this->Api->get($type , $type_val, $fields, $filter, $order, $limit);
				
				$id				= $result_mail['resource'][0]['id'];
				$email_to		= $result_mail['resource'][0]['email'];
				$receipent_name	= $result_mail['resource'][0]['receipent_name'];
				$theme			= $result_mail['resource'][0]['theme'];

				$type_val 	= "m_notif_template";
				$filter 	= "(theme=".$theme.")";
				$result_template = $this->Api->get($type , $type_val, $fields, $filter);

				$mail_subject 	= $result_template['resource'][0]['mail_subject'];
				$html_template 	= $result_template['resource'][0]['html_template'];

				$url = base_url().'register/confirm_email/'.base64_encode($this->encryption->encrypt($id)).'/'.base64_encode($this->encryption->encrypt($email_to));

				$filename = "C:/xampp/htdocs/recruitment/assets/frontend/images/infomedia_logo.png";
				$this->load->library('email');
				$cid = $this->email->attachment_cid($filename);
				$message = $html_template;
		   		$message = str_replace('$receipent_name',$receipent_name,$message);
		   		$message = str_replace('$cid',$cid,$message);
		   		$message = str_replace('$url',$url,$message);
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
					echo 'Email sent.';
					$flag = 1;
				}else{
				 	show_error($this->email->print_debugger());
				 	$flag = 9;
				}
				$param = array("flag" => $flag);
				$filter = array("filter" => "id=".$id."");
				$this->Api->put_table( 'log_mail_notif', $param, $filter );
			}
}
