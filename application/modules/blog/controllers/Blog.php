<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

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
		$data = array('title_page' => 'Blog');
		$this->parser->parse('blog', array_merge( $this->data , $data) );
	}
	
	

	public function detail_blog( $blog_id ){
		
	}

	function list_blog(){

	}

	


}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
