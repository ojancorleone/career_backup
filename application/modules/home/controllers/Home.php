<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {


	function __construct()
    {
        parent::__construct();
        $this->load->library('encryption');
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

		$vid 			= $this->encryption->decrypt(base64_decode($this->input->get('vid')))!=""?"1":"0";
		$applied 		= $this->input->get('applied')==""?"1":"0";

		$data = array(
						'title_page' => 'Home',
						'vid' => $vid,
						'applied' => $applied
					);
		$this->parser->parse('home', array_merge( $this->data , $data) );
	}

	public function job_vacancies(){
		$data = array('title_page' => 'Job');
		$this->parser->parse('job_vacancies', array_merge( $this->data , $data) );
	}

	public function blog(){
		$data = array('title_page' => 'blog');
		$this->parser->parse('blog', array_merge( $this->data , $data) );
	}

	public function company(){
		$data = array('title_page' => 'Job');
		$this->parser->parse('company', array_merge( $this->data , $data) );
	}

	public function detail_job( $vacancy_id ){
		
	}

	public function detail_company( $company_id ){
		
	}

	function list_company(){

	}

	function list_job(){

	}



}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
