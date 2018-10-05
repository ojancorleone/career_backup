<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct()
    {
        parent::__construct();
     	$this->load->model('M_register');   
       	$this->load->model('master/Master_setting');

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
		$email = $this->input->post('validation[email]'); 
		$fullname = $this->input->post('validation[fullname]');
		$password = $this->input->post('validation[password]');
		$result = $this->M_register->submit( $fullname, $email, $password );
		echo json_encode($result);
	}

	public function confirm_email(){

		$this->load->library('encryption');

		$page 			 = $this->uri->segment(2);
		$log_id 		 = $this->encryption->decrypt(base64_decode($this->uri->segment(3)));
		$email 		     = $this->encryption->decrypt(base64_decode($this->uri->segment(4)));
		
		$this->M_register->confirm_email($email);

		$data = array('title_page' => 'Confirm Email');
		$this->parser->parse('confirm_email', array_merge( $this->data , $data) );
	}



}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
