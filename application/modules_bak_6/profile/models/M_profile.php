<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_profile extends CI_Model {

	function __construct()
    {
        parent::__construct();
		$this->load->model('data/Api');
    }

	public function detail_profile( $id , $userlevel ){
		$type = "_table";
		$type_val=$userlevel=="pelamar"?"m_pelamar":"m_admin";
		$fields = "*";
		$filter = "(id=".$id.")";

		$result = $this->Api->get( $type , $type_val, $fields , $filter );

		$detail_profile = array(
								"email"			=> $result['resource'][0]['email'],
								"fullname"		=> $result['resource'][0]['fullname'],
								"phone"			=> $result['resource'][0]['phone'],
								"foto"			=> $result['resource'][0]['img_profile'],
								"userlevel"		=> $result['resource'][0]['userlevel'],
							);

		return $detail_profile;
	}

	public function form_update( $fullname, $email, $phone , $userlevel, $id ){
		

		$table 	= $userlevel=="pelamar"?"m_pelamar":"m_admin";
		$data 	= array('fullname' => $fullname,'email'=>$email,'phone'=>$phone);
		$filter = array('filter' => 'id='.$id.'' );

		$check_detail_data 		= $this->check_detail_data( $userlevel , $id );
		$update_table_master 	= $this->Api->put_table( $table , $data , $filter );

		if (!empty($update_table_master['resource'])) {
			$data 	= array('email' => $email );	
			$filter = array('filter' => 'id='.$check_detail_data['login_id'].'');
			$put_table_login = $this->Api->put_table( 'm_login' , $data , $filter );
			
			if (!empty($put_table_login['resource'])) {
				$respons = array("status" => "success" , "reason" => "Profile has been update" );
			}else{
				$respons = array("status" => "failed" , "reason" => "Failed update Profile 1" );
			}
		}else{
			$respons = array("status" => "failed" , "reason" => "Failed update Profile 2" );
		}

		return $respons;
	}


	public function upload_img_profile( $file_img ){

		$userlevel	= $this->session->userdata('userlevel');
		$email		= $this->session->userdata('email');
		$tenant_id	= $this->session->userdata('tenant_id');

		$table 	= $userlevel=="pelamar"?"m_pelamar":"m_admin";
		$data	= array("img_profile" => $file_img );
		$filter = array("filter" => "email=".$email."");

		$result = $this->Api->put_table($table , $data, $filter);
		return false;
	}

	public function check_detail_data( $userlevel , $id ){

		$table=$userlevel=="pelamar"?"m_pelamar":"m_admin";

		$get_table = $this->Api->get( '_table' , $table , 'email' , '(id='.$id.')' );
		$login_email = $get_table['resource'][0]['email'];

		$get_table = $this->Api->get( '_table' , 'm_login' , 'id' , '(email='.$login_email.')' );
		$login_id = $get_table['resource'][0]['id'];

		$result = array('login_email' => $login_email, 'login_id' => $login_id);
		return $result;
	}

	public function check_password( $email, $current_password ){
		$type = '_table';
		$type_val = 'm_login';
		$fields = 'password,email';
		$filter = '(email='.$email.')';

		$data = $this->Api->get( $type , $type_val , $fields , $filter );


		if(isset($data['resource'][0]['email'])){
			if (password_verify($current_password, $data['resource'][0]['password'])) {
				return TRUE;
			}else{
				return FALSE;
			}
		}else{
			return FALSE;
		}
	}

	public function change_password( $id, $email , $new_password , $userlevel ){
		
		$check_detail_data = $this->check_detail_data( $userlevel , $id );

		$new_password = password_hash( $new_password, PASSWORD_BCRYPT, ['cost' => 10] );
		$data 	= array('password' => $new_password );	
		$filter = array('filter' => 'id='.$check_detail_data['login_id'].'');
		$put_table_login = $this->Api->put_table( 'm_login' , $data , $filter );
		
		if (!empty($put_table_login['resource'])){
			$respons = array("status" => "success" , "reason" => "Password has been update" );
		}else{
			$respons = array("status" => "failed" , "reason" => "Failed change password" );

		}
		return $respons;
	}

}
