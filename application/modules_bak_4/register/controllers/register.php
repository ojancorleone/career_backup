<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct()
    {
        parent::__construct();
     	$this->load->model('M_register');   
    }
	public function index(){
		$email = $this->input->post('validate[email]');
		$password = $this->input->post('validate[password]');
		$password_confirm = $this->input->post('validate[password_confirm]');
		$result = $this->M_register->submit( $email , $password, $password_confirm );
	}



}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
