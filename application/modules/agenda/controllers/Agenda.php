<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Agenda extends CI_Controller {

	function __construct()
    {
        parent::__construct();
		$this->load->library('drop_down');
		$this->load->library('upload');
		$this->load->model('M_agenda');
		if($this->session->userdata('is_logged_in') == false){
			redirect(base_url()."home");
		}
    }

    public function index(){
    	if($this->session->userdata('is_logged_in') == true){
			$parent_page	=  $this->uri->segment(1);
			$page			=  $this->uri->segment(1);


			$this->drop_down->select('vacancy_id','vacancy_name');
			$this->drop_down->from('vw_vacany_detail');
			$this->drop_down->where();
			$list_job_vacany = $this->drop_down->build();

			// $this->drop_down->select('pelamar_id','fullname');
			// $this->drop_down->from('vw_hiring_step');
			// $this->drop_down->where();
			// $list_job_applicant = $this->drop_down->build();

			$data=array(
				'page_content' 				=> $page,
				'base_url'					=> base_url().$page,
				'base'						=> base_url(),
				"tenant_id"					=> $this->session->userdata('tenant_id'),
				"email"						=> $this->session->userdata('email'),
				"foto"						=> $this->session->userdata('foto'),
				"fullname"					=> $this->session->userdata('fullname'),
				"userlevel"					=> $this->session->userdata('userlevel'),
				"list_job_vacany"			=> $list_job_vacany
				// "list_job_applicant"		=> $list_job_applicant
			);

			$this->parser->parse('master/content', $data);

		}else{
			redirect('login');
		}
    }


    public function get_applicants(){

		if($this->session->userdata('is_logged_in')){

			$page			= $this->uri->segment(1);
			$q				= $this->input->post('q');
			$vacancy_id 	= $this->input->post('vacancy_id');
			$table			= $this->input->post('table');

			$data = array();

		$data = $this->M_agenda->get_applicants($q,$table,$vacancy_id);
		if(is_array($data['resource'])){
			foreach($data['resource'] as $key  ){
				if($q!=NULL){
					if (stripos($key['name'], $q) !== false) {
					    $result[] =  array('id' => $key['pelamar_id'], 'text'=> $key['fullname'] );
					}
				}else{
						$result[] =  array('id' => $key['pelamar_id'], 'text'=> $key['fullname'] );
				}
			}
		}else{
			$result[] = array();
		}

		echo json_encode($result);

			
		}else{
			exit();
		}
	}	

}