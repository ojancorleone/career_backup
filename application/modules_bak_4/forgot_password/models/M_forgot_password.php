<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_forgot_password extends CI_Model {

	
	function check_username($tenant_id,$tenant_id_alias,$email,$base_url){

		$this->db->select('user_id, first_name, last_name, email, phone');
		$query = $this->db->get_where('m_user', array('user_id' => $email, 'tenant_id' => $tenant_id));

		$data = $query->result_array();

		if(isset($data[0])){

			$insert_data = array(
				   'user_id' 		=> $data[0]['user_id'] ,
				   'expired' 		=> date('Y-m-d H:i:s', strtotime('+24 hours') ) ,
				   'result_reset' 	=> 0 ,
				   'created' 		=> $data[0]['user_id'] ,
				   'created_at' 	=> date('Y-m-d H:i:s'),
				   'tenant_id' 		=> $tenant_id,
				);

				$this->db->insert('log_reset_passwd', $insert_data); 
				
				$insert_id = $this->db->insert_id();

			$send_status = $this->send_mail_reset_password($tenant_id, $tenant_id_alias, $data[0]['first_name'], $data[0]['last_name'], $email, $base_url, $insert_id);

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


	function send_mail_reset_password($tenant_id, $tenant_id_alias, $first_name, $last_name, $email, $base_url, $insert_id){

		$this->load->library("phpmailer_library");
		$this->load->library('encryption');

        $objMail = $this->phpmailer_library->load();

        $account = $this->mail_account($tenant_id);
            //Server settings
        if($account['status']){


		    $objMail->SMTPDebug = 0;								// Enable verbose debug output
		    $objMail->isSMTP();										// Set mailer to use SMTP
		    $objMail->Host = $account[0]['host'];					// Specify main and backup SMTP servers
		    $objMail->SMTPAuth = $account[0]['auth'];				// Enable SMTP authentication
		    $objMail->Username = $account[0]['username'];			// SMTP username
		    $objMail->Password = $account[0]['password'];			// SMTP password
		    $objMail->SMTPSecure = $account[0]['smtp_secure'];		// Enable TLS encryption, `ssl` also accepted
		    $objMail->Port = $account[0]['port'];					// TCP port to connect to

		    //Recipients
		    
		    $url = $base_url.'forgot_password/reset_password/'.$tenant_id_alias.'/'.base64_encode($this->encryption->encrypt($insert_id)).'/'.base64_encode($this->encryption->encrypt($email));
		    $objMail->setFrom($account[0]['set_from_mail'], $account[0]['set_from_name']);
		    $objMail->addAddress($email, $first_name.$last_name );     // Add a recipient
		    $objMail->addReplyTo($account[0]['set_replyto_mail'], $account[0]['set_replyto_name']);
		    //Content
		    
		    $objMail->isHTML(true); 
		    $mail_template = $this->mail_template_reset_password($tenant_id);
               if($mail_template['status']){

               		$message = $mail_template[0]['mail_html_template'];
               		$message = str_replace('$first_name',$first_name,$message);
               		$message = str_replace('$last_name',$last_name,$message);
               		$message = str_replace('$url',$url,$message);
               		 // Set email format to HTML
				    $objMail->Subject = $mail_template[0]['mail_subject'];
				    $objMail->Body    = $message;
					
				    $status = $objMail->send();
				    if ($status) {
				    	$data = array('status' => true);
					}else{
						$data = array('status' => false);
					}

               }else{
               		$data = array('status' => false);
               }                   
		   	
		}else{
			$data = array('status' => false);
		}

		return $data;
	}

	function check_reset_passwd($reset_id,$email){

		$this->db->select('user_id, expired');
		$this->db->where('expired >', date('Y-m-d H:i:s') ); 
		$query = $this->db->get_where('log_reset_passwd', array('id' => $reset_id, 'user_id' => $email, 'result_reset' => '0' ));

		$data = $query->result_array();
		
		if(isset($data[0])){
			$result = array('status'=> true);
		}else{
			$result = array('status'=> false);
		}

		return $result;
	}


	function submit_reset($id,$tenant_id,$email,$password){

		$data = array(
               'password' 	=> $password,
               'updated' 	=> $email,
               'updated_at' => date('Y-m-d H:i:s')
            );

			$this->db->where('user_id', $email);
			$this->db->where('tenant_id', $tenant_id);
		$updted_pass	= $this->db->update('m_user', $data); 

		if($updted_pass){

			$data2 = array(
				'result_reset' => '1'
			);

			$this->db->where('id', $id );
			$updted_log	= $this->db->update('log_reset_passwd', $data2); 

			$result = array('status'=> true, 'reason'=> 'Password has been change');
		}else{
			$result = array('status'=> false, 'reason'=> 'Failed Change password');
		}

		return $result;
	}


	function mail_account($tenant_id){

		$this->db->select('tenant_id, host, auth, username, password, smtp_secure, port, set_from_mail, set_from_name, set_replyto_mail, set_replyto_name');
		$query = $this->db->get_where('m_tenant_mail_account', array('tenant_id' => $tenant_id, 'status'=> '1', 'is_deleted'=> '0', 'mail_type'=> 'outgoing'));

		$data = $query->result_array();

		if(isset($data[0])){
			$result = array('status' => true , $data[0] );
		}else{
			$result = array('status' => false );
		}
		
		return $result;

	}


	function mail_template_reset_password($tenant_id){

		$this->db->select('mail_subject, mail_html_template');
		$query = $this->db->get_where('m_template_mail', array('tenant_id' => $tenant_id, 'status'=> '1', 'is_deleted'=> '0', 'mail_type'=> 'reset_password'));

		$data = $query->result_array();

		if(isset($data[0])){
			$result = array('status' => true , $data[0] );
		}else{
			$result = array('status' => false );
		}
		
		return $result;
	}
}

/* End of file m_forgot_password.php */
/* Location: ./application/models/m_forgot_password.php */