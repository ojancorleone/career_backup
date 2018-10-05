<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Job extends CI_Controller {

	function __construct()
    {
        parent::__construct();
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
		$data = array('title_page' => 'Job');
		$this->parser->parse('job', array_merge( $this->data , $data) );
	}
	
	

	public function detail( $job_id=NULL ){
		$data = array('title_page' => 'Job Detail');
		$this->parser->parse('job_detail', array_merge( $this->data , $data) );
	}

	function list_job(){

	}

	


}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
