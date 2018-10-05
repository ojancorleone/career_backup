<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_agenda extends CI_Model {

	function __construct()
    {
        parent::__construct();
		$this->load->model('data/Api');
		$this->load->model('master/Master_setting');
		$this->load->library('encryption');
		$this->load->library('email');

    }

    public function get_applicants($q,$table,$vacancy_id){
		$fields = "pelamar_id,fullname";
		$filter = NULL;

		if ( $vacancy_id != "" ) {
			$filter = "(m_vacancy_id=".$vacancy_id.")";
		}
		$result_data = $this->Api->get('_table' , $table , $fields , $filter );
		return $result_data;
	}	

}