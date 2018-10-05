<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_job extends CI_Model {

	function __construct()
    {
        parent::__construct();
		$this->load->model('data/Api');
    }

    public function detail_data($vacancy_id){
    	$filter = '(vacancy_id='.$vacancy_id.')';
    	$result = $this->Api->get('_table' , 'vw_vacany_detail' , '*' , $filter);
    	return $result['resource'][0];
    }

    public function insert_trn_applicant( $data_trn01applicant, $vacancy_id, $pelamar_id ,$log_invitation_id ){
    	
        $insert_trn_applicant = $this->Api->post_table( "trn01applicant" , $data_trn01applicant );
    	
    	if (!empty($insert_trn_applicant['resource'][0])) {
    		$order_by = "stages_sort ASC";
    		$get_vacancy_stage = $this->Api->get('_table', 'm_vacancy_stages', 'm_vacancy_stages_id', '(m_vacancy_id='.$vacancy_id.')', $order_by );
    		$applicant_id = $insert_trn_applicant['resource'][0]['applicant_id'];
				foreach ($get_vacancy_stage['resource'] as $key => $value ) {
					$insert_data = array( 
					  'applicant_id' => $applicant_id ,
					  'vacancy_stages_id' => $value['m_vacancy_stages_id'],
					  'qualification_status'=> 'unqualified',
					  'entry_date' => date('Y-m-d H:i:s'),
					  'create_at' => date('Y-m-d H:i:s')
					);
					$this->Api->post_table( "trn01applicant_stages" , $insert_data );
				}

			$data 	= array('result_invitation' => "1" );
			$filter = array("filter"=>"id=".$log_invitation_id."");
			$update_log_invitation = $this->Api->put_table( 'log_send_invitation' , $data , $filter );

			$respone = TRUE;    		
    	}else{
			$respone = FALSE;    		
    	}
    	return $respone;
    }

    public function check_invitation($email,$vacancy_id){

		$filter = '(email='.$email.')and(vacancy_id='.$vacancy_id.')and(result_invitation=0)';
    	$result = $this->Api->get('_table' , 'log_send_invitation' , 'id,email' , $filter);
    	if (isset($result['resource'][0]['email'])) {
    		// $respone = TRUE;
    		$respone = array('status'=>TRUE , 'log_invitation_id' => $result['resource'][0]['id'] );
    	}else{
    		// $respone = FALSE;
    		$respone = array('status'=>FALSE , 'log_invitation_id' => '' );
    	}

    	return $respone;
    }

}
