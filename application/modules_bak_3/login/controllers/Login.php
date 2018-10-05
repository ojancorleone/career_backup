<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){
		redirect('error_page');
	}

	public function tenant($page){

		$this->load->model('q_login');

		$tenant = $this->q_login->check_tenant($page);
		
		if($tenant['status']){
			$data = array( "base_url" => base_url() , "tenant_id" => $tenant['tenant_id'], "tenant_id_alias" => $page , "favicon" => $tenant['favicon'], "title" => $tenant['title'] , 'login_image' => $tenant['login_image'] );
			$this->parser->parse('login', $data);
		}else{
			redirect('error_page');
		}

	}


	public function check_login(){

		$email = $this->input->post('validation[email]');
		$password = $this->input->post('validation[password]');
		$this->load->model('q_login');
		
		$check_login = $this->q_login->check_login($email,$password);
		if(is_array($check_login)){				

				if($check_login['status']==TRUE){
						$sess	= array(
									'email'					=> $check_login['email'],
									'fullname'				=> $check_login['fullname'],
									'userlevel' 			=> $check_login['userlevel'],
									'phone' 				=> $check_login['phone'],
									'foto'					=> $check_login['foto'],
									'tenant_id'				=> $check_login['tenant_id'],
									'is_logged_in'			=> true
									);

						$this->session->set_userdata($sess);
						
						$result = array("status"=>"success","title"=>"Login Success","reason"=>"Please Wait");
				}else{

					$result = array("status"=>"fail","title"=>"Login Fail","reason"=>"mohon cek kembali user id & password anda, atau ulangi beberapa saat lagi");		
				
				}	

		}else{
			
			$result = array("status"=>"error","title"=>"Login Fail","reason"=>"error");
		
		}

		echo json_encode($result);
	}


}

/* End of file login.php */
/* Location: ./application/controllers/login.php */
