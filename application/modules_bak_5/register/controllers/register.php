<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct()
    {
        parent::__construct();
     	$this->load->model('M_register');   
    }
	public function index(){
		$email = $this->input->post('validation[email]');
		$fullname = $this->input->post('validation[fullname]');
		$password = $this->input->post('validation[password]');

		$result = $this->M_register->submit( $fullname, $email, $password );
		echo json_encode($result);

	}



}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
