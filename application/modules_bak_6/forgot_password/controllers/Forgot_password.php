<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forgot_password extends CI_Controller {

	public function index(){
		redirect('error_page');
	}

	public function auth(){
		$page 			 = $this->uri->segment(2);
		$tenant_id_alias = $this->uri->segment(3);
		$this->load->model('login/q_login');
		$tenant = $this->q_login->check_tenant($tenant_id_alias);
		if($tenant['status']){
			$data = array(  "base_url" => base_url() , 
							"tenant_id" => $tenant['tenant_id'], 
							"tenant_id_alias" => $tenant_id_alias , 
							"favicon" => $tenant['favicon'], 
							"logo" => $tenant['logo'], 
							"title" => $tenant['title'],
							"login_image" => $tenant['login_image'] 
						);
			$this->parser->parse('forgot_password', $data);
		}else{
			redirect('error_page');
		}
	}


	public function check_forgot_password(){
		$tenant_id = $this->input->post('tenant_id');
		$tenant_id_alias = $this->input->post('tenant_id_alias');
		$email = $this->input->post('email');
		$base_url = base_url();
		$this->load->model('m_forgot_password');
		$data = $this->m_forgot_password->check_username($tenant_id,$tenant_id_alias,$email,$base_url);
		echo json_encode($data);
	}


	public function reset_password(){

		$this->load->library('encryption');

		$page 			 = $this->uri->segment(2);
		$tenant_id_alias = $this->uri->segment(3);
		$reset_id 		 = $this->encryption->decrypt(base64_decode($this->uri->segment(4)));
		$email 		     = $this->encryption->decrypt(base64_decode($this->uri->segment(5)));

		$this->load->model('login/q_login');
		$this->load->model('m_forgot_password');
		$tenant = $this->q_login->check_tenant($tenant_id_alias);
		if($tenant['status']){

		$check_status = $this->m_forgot_password->check_reset_passwd($reset_id,$email);
		
			if($check_status['status']){

				$data = array(  "base_url" => base_url() , 
								"tenant_id" => $tenant['tenant_id'], 
								"tenant_id_alias" => $tenant_id_alias , 
								"favicon" => $tenant['favicon'], 
								"title" => $tenant['title'], 
								"id" 	=> $reset_id, 
								"email" => $email 
							);

				$this->parser->parse('reset_password', $data);

			}else{

				$data = array(  "base_url" => base_url() , 
								"tenant_id" => $tenant['tenant_id'], 
								"tenant_id_alias" => $tenant_id_alias , 
								"favicon" => $tenant['favicon'], 
								"title" => $tenant['title'], 
						);		
				$this->parser->parse('page_expired', $data);
			}
			
		}else{
			redirect('error_page');
		}

	}


	public function reset_password_submit(){
		$id 				= $this->input->post('id');
		$tenant_id 			= $this->input->post('tenant_id');
		$email 				= $this->input->post('email');
		$password 			= $this->input->post('password');

		$password_new = password_hash($password, PASSWORD_BCRYPT, ['cost' => 10]);
		$this->load->model('m_forgot_password');
		$submit_reset = $this->m_forgot_password->submit_reset($id,$tenant_id,$email,$password_new);
		echo json_encode($submit_reset);

	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */
