<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_register extends CI_Model {

	function __construct()
    {
        parent::__construct();
		$this->load->model('data/Api');
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
		$params = array( "email" => $email , "receipent_name" => $fullname );
		$result = $this->Api->post_table( $table_name , $params );
		return false;
	}

}
