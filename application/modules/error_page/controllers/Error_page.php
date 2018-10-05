<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Error_page extends CI_Controller {

	public function index(){
		
		$this->load->library('drop_down');

		$this->drop_down->select('tenant_alias','tenant_name');
		$this->drop_down->from('m_tenant');
		$this->drop_down->where('is_deleted=0');
		$list_tenant = $this->drop_down->build(NULL);

		$data = array("base_url" => base_url(), "list_tenant" => $list_tenant );

		$this->parser->parse('error_page', $data);
		
	}


	public function test(){
		$this->load->model('data/Api');
		$result = $this->Api->get();
		echo $result;
	}

}

/* End of file error_page.php */
/* Location: ./application/controllers/error_page.php */
