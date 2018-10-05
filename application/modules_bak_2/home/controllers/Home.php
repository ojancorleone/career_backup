<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
			$this->load->model('master/Master_setting');
			$result = $this->Master_setting->SetSettings();

			$data = array(
				'base_url'					=> base_url(),
				'title' 					=> $result['title'],
				'favicon' 					=> $result['favicon'],
				'logo_full'	 				=> $result['logo_full'],
				'logo' 						=> $result['logo'],
				'login_image' 				=> $result['login_image'],
				'footer' 					=> $result['footer'],
				'copyright' 				=> $result['copyright'],
			);
			$this->parser->parse('home', $data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
