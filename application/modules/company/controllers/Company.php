<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Company extends CI_Controller {

	function __construct()
    {
        parent::__construct();
       	$this->load->model('master/Master_setting');
		$this->is_login = $this->session->userdata('is_logged_in')==TRUE?1:0;
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
				'is_login'					=> $this->is_login
			);
    }
	
	public function index(){
		$data = array('title_page' => 'Company');
		$this->parser->parse('company', array_merge( $this->data , $data) );
	}

	public function detail( $company_id=NULL ){
		$data = array('title_page' => 'Company Detail');
		$this->parser->parse('company_detail', array_merge( $this->data , $data) );
	}

	function list_company(){

	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
