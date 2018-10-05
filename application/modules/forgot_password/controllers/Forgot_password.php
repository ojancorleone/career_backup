<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forgot_password extends CI_Controller {

	function __construct()
    {
        parent::__construct();
       	$this->load->model('master/Master_setting');
       	$this->load->model('m_forgot_password');
		$result = $this->Master_setting->SetSettings();
			$this->data = array(
				'base_url'					=> base_url(),
				'title' 					=> $result['title'],
				'favicon' 					=> $result['favicon'],
				'logo_full'	 				=> $result['logo_full'],
				'logo' 						=> $result['logo'],
				'login_image' 				=> $result['login_image'],
				'footer' 					=> $result['footer'],
				'copyright' 				=> $result['copyright'],
			);
    }
	
	public function index(){
		$data = array('title_page' => 'Forgot Password');
		$this->parser->parse('forgot_password', array_merge( $this->data , $data) );
	}


	public function check_forgot_password(){
		$email = $this->input->post('email');
		$base_url = base_url();
		$data = $this->m_forgot_password->check_email($email,$base_url);
		echo json_encode($data);
	}


	public function reset_password(){

		$this->load->library('encryption');

		$page 			 = $this->uri->segment(2);
		$reset_id 		 = $this->encryption->decrypt(base64_decode($this->uri->segment(3)));
		$email 		     = $this->encryption->decrypt(base64_decode($this->uri->segment(4)));

		
		$check_status = $this->m_forgot_password->check_reset_passwd($reset_id,$email);
		if($check_status['status']){
			$data = array(
							'title_page' => 'Forgot Password',
							"id" 	=> $reset_id, 
							"email" => $email 
						);
			$this->parser->parse('reset_password', array_merge( $this->data , $data) );

		}else{
			$data = array(  
							'title_page' => 'Page Expired'
						);		
			$this->parser->parse('page_expired', array_merge( $this->data , $data) );
		}
		

	}


	public function reset_password_submit(){
		$id 				= $this->input->post('id');
		$email 				= $this->input->post('email');
		$password 			= $this->input->post('password');

		$password_new = password_hash($password, PASSWORD_BCRYPT, ['cost' => 10]);
		
		$submit_reset = $this->m_forgot_password->submit_reset($id,$email,$password_new);
		echo json_encode($submit_reset);

	}

}

/* End of file forgot_password.php */
/* Location: ./application/controllers/forgot_password.php */
