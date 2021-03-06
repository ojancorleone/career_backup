<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Job_vacancy extends CI_Controller {

	public function index(){
		if($this->session->userdata('is_logged_in') == true){
			$parent_page	=  $this->uri->segment(1);
			$page			=  $this->uri->segment(1);

			$this->load->library('page_render');
			$data=array(
				'page_content' 				=> $page,
				'base_url'					=> base_url().$page,
				'base'						=> base_url(),
				"tenant_id"					=> $this->session->userdata('tenant_id')
			);
			$this->parser->parse('master/content', $data);

		}else{
			redirect('login');
		}
	}
}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */
