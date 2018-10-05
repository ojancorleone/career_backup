<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_monitoring_job_vacancies extends CI_Model {

	function __construct()
    {
        parent::__construct();
		$this->load->model('data/Api');
		$this->load->model('master/Master_setting');
		$this->load->library('encryption');
		$this->load->library('email');
		$result_master 	= $this->Master_setting->SetSettings();
		$result_smtp 	= $this->Master_setting->SetSettingSMTP();
			// Setting Master
			$this->data_master = array(
				'base_url'					=> base_url(),
				'title' 					=> $result_master['title'],
				'favicon' 					=> $result_master['favicon'],
				'logo_full'	 				=> $result_master['logo_full'],
				'logo' 						=> $result_master['logo'],
				'login_image' 				=> $result_master['login_image'],
				'footer' 					=> $result_master['footer'],
				'copyright' 				=> $result_master['copyright'],
			);

			// Setting SMTP
			$this->data_smtp = array(
				  'protocol' 	=> $result_smtp['protocol'],
				  'smtp_host' 	=> $result_smtp['smtp_host'],
				  'smtp_port' 	=> $result_smtp['smtp_port'],
				  'smtp_user' 	=> $result_smtp['smtp_user'],
				  'smtp_pass' 	=> $result_smtp['smtp_pass'],
				  'mailtype' 	=> $result_smtp['mailtype'],
				  'charset' 	=> $result_smtp['charset'],
				  'wordwrap' 	=> $result_smtp['word_wrap']
			);

			$this->email_from 		= $result_smtp['smtp_from'];
			$this->email_fromname 	= $result_smtp['smtp_fromname'];
    }


	public function list_data($length,$start,$search,$order,$dir,$column_name){
		
		$order_by="vacancy_name";
		if($column_name!="" && $column_name != "no"){
			$order_by="$column_name $dir";
		}

		$filter="";
		 if($search!=""){
			$filter="and((company_name like '%".$search."%')or(vacancy_name like '%".$search."%')or(vacancy_status like '%".$search."%'))";
		}

		$fields		= '*';
		$filter 	= "(is_deleted=0) ".$filter;
		$limit 		= $length;
		$offset 	= $start;

		$result_data = $this->Api->get('_table' , 'vw_monitoring_job_vacancies' , $fields , $filter, $order_by , $limit, $offset);
		// $total		= count($result_data['resource']);

		$get_total_row	= $this->Api->get('_table' ,'vw_monitoring_job_vacancies', NULL, $filter , NULL, NULL, NULL, TRUE);
		$total_row		= $get_total_row;
		
		

		return array("data"=>$result_data['resource'],
						"total_data"=>$total_row
				);
	}

	function detail_data($id){

		$filter = "(id=".$id.")";
		$vacancy_data = $this->Api->get('_table' ,'m_vacancy', '*' , $filter);

		if (isset($vacancy_data['resource'])) {
			$result = $vacancy_data['resource'];
		}
		return $result;

	}

	function update_status($id,$status,$upd,$lup){

		$data = array('status' => $status,
					  'updated' => $upd,
					  'updated_at' => $lup
					);

		$filter = array("filter"=>"id=".$id."");

		$update_status_tenant = $this->Api->put_table( 'm_vacancy' , $data , $filter );

		if (!empty($update_status_tenant['resource'])) {
			$respons = array("status" => "success" , "reason" => "Status ".$status );
		}else{
			$respons = array("status" => "failed" , "reason" => "Failed update Status" );
		}

		return $respons;

	}

	function ch_qualification( $pelamar_id , $stage_id , $changeto, $upd, $lup){

		$data = array(
					'qualification_status' => $changeto,
					  'updated' => $upd,
					  'qualification_date' => $lup,
					  'updated_at' => $lup
					);

		$filter = array("filter"=>"(applicant_id=".$pelamar_id.")AND(vacancy_stages_id=".$stage_id.")");

		$update = $this->Api->put_table( 'trn01applicant_stages' , $data , $filter );

		if (!empty($update['resource'])) {
			$respons = array("status" => "success" , "reason" => "");
		}else{
			$respons = array("status" => "failed" , "reason" => "Failed update Status" );
		}

		return $respons;

	}

	function ch_stage( $pelamar_id , $stage_id , $changeto, $upd, $lup){
		$qualification_status = "";

		$data = array(
					'last_vacancy_stages_id' => $changeto,
					  'updated' => $upd,
					  'vacancy_stages_date' => $lup,
					  'updated_at' => $lup,
					);

		$filter = array("filter"=>"(applicant_id=".$pelamar_id.")");

		$update = $this->Api->put_table( 'trn01applicant' , $data , $filter );

		if (!empty($update['resource'])) {
			$params  = "(id=".$pelamar_id.")AND(vacancy_stages_id=".$changeto.")";
		
			$datax   = $this->Api->get('_table', 'vw_hiring_step' , '*' , $params  );

			if(isset($datax['resource'])){
				if(isset($datax['resource'][0]['qualification_status'])){
					$qualification_status = $datax['resource'][0]['qualification_status'];
				}
			}

			$respons = array("status" => "success" , "reason" => "", "qualification_status"=>$qualification_status );
		}else{
			$respons = array("status" => "failed" , "reason" => "Failed update Status", "qualification_status"=>$qualification_status  );
		}

		return $respons;
	}

	function deleted_item($id,$status,$upd,$lup){
		$data = array('is_deleted' => 1,
					  'updated' => $upd,
					  'updated_at' => $lup
					);
		$filter = array("filter"=>"id=".$id."");
		$delete_tenant 	= $this->Api->put_table( 'm_vacancy' , $data , $filter );
		if (!empty($delete_tenant['resource'])) {
			$respons = array("status" => "success" , "reason" => "Tenant has been delete" );
		}else{
			$respons = array("status" => "failed" , "reason" => "Failed delete Tenant" );
		}
		return $respons;
	}


	function add( $data_vacancy , $data_vacancy_stage , $data_vacancy_form ){



		$insert_vacancy = $this->Api->post_table( "m_vacancy" , $data_vacancy );

		if (!empty($insert_vacancy['resource'][0])) {
				$data_vacancy_form['m_vacancy_id'] = $insert_vacancy['resource'][0]['id'];
				$insert_vacancy_form = $this->Api->post_table( "m_vacancy_application_form" , $data_vacancy_form );
				if (!empty($insert_vacancy_form['resource'][0])) {
					$data_stage = array();
					$sortable = 0;
					
					foreach ($data_vacancy_stage as $key => $value) {
						$data_stage = array( 
										'm_vacancy_id' => $insert_vacancy['resource'][0]['id'], 
										'stages_name' => $value['stage_name'], 
										'vendor_id' => $value['vendor_id'], 
										'vendor_details_id' => $value['vendor_details_id'], 
										'stages_sort' => $value['sortable'],
										'pic_type' => $value['pic_type'],
										'pic_id' => $value['pic_id']
						);
						$insert_vacancy_stage = $this->Api->post_table( "m_vacancy_stages" , $data_stage );
						$sortable = $value['sortable'];							
					}
				}
			$respons = array("status" => "success" , "reason" => "Add Vacant Successfully..." );
		}else{
			$respons = array("status" => "failed" , "reason" => "Add Vacant Failed..." );
		}

		return $respons;
	}

	public function get_option($q,$table,$vendor_id,$tenant_id){
		$fields = "id,name";
		$filter = NULL;
		if ( $vendor_id != "" ) {
			$filter = "(vendor_id=".$vendor_id.")";
		}
		if ( $tenant_id != "") {
			$filter = "(tenant_id=".$tenant_id.")";
		}

		$result_data = $this->Api->get('_table' , $table , $fields , $filter );
		return $result_data;
	}	

	public function get_pic($q,$table,$department_id){
		$fields = "id,fullname";
		$filter = NULL;
		$filter = "(department_id=".$department_id.")";
		$result_data = $this->Api->get('_table' , $table , $fields , $filter );
		return $result_data;
	}



	function list_form_setting(){
		$result = array();

		$list_form_setting = $this->Api->get('_table', 'm_cfg_application_form' , '*' , '(field_status=Aktif)');
		if (isset($list_form_setting['resource'])) {
			$result = $list_form_setting['resource'];
		}
		return $result;

	}


	function get_stage($vacancy_id){
		$result = array();
		$filter = "(stages_status=active)and(m_vacancy_id=".$vacancy_id.")";
		$order_by = "stages_sort ASC";

		$list_stage_setting = $this->Api->get('_table', 'm_vacancy_stages' , '*' , $filter , $order_by );

		if (isset($list_stage_setting['resource'])) {
			$result = $list_stage_setting['resource'];
		}
		return $result;

	}


	function get_applicant( $id ){
		$result = array();
		$filter = "(id=".$id.")";

		$list_applicants = $this->Api->get('_table', 'm_pelamar' , '*' , $filter  );

		if (isset($list_applicants['resource'])) {
			$result = $list_applicants['resource'];
		}
		return $result;
	}	

	function get_comment( $stage_id,$applicant_id ){
		$result = array();
		$filter = "(applicant_id=".$applicant_id.")AND(vacancy_stages_id=".$stage_id.")";

		$list_applicants = $this->Api->get('_table', 'vw_comments' , '*' , $filter  );

		if (isset($list_applicants['resource'])) {
			$result = $list_applicants['resource'];
		}
		return $result;
	}	

	function send_comments( $stage_id,$applicant_id,$content,$email ){
		$result = array();
		$params = array( 
					'applicant_id'		=> $applicant_id, 
					'vacancy_stages_id'	=> $stage_id, 
					'content'			=> $content, 
					'created'			=> $email, 
					);
		$insert_data = $this->Api->post_table( "trn01applicant_comments" , $params );
		
		if (isset($insert_data['resource'])) {
			$insert_data['date'] = date('Y-m-d H:i:s');
			$result		 		 = $insert_data;
		}
		return $result;
	}	



	function get_applicants( $vacancy_id , $stage_id , $status_applicant ){
		$result = array();
		$filter = "(m_vacancy_id=".$vacancy_id.")and(qualification_status=".$status_applicant.")and(vacancy_stages_id=".$stage_id.")";
		// $order_by = "stages_sort ASC";

		$list_applicants = $this->Api->get('_table', 'vw_hiring_step' , '*' , $filter  );

		if (isset($list_applicants['resource'])) {
			$result = $list_applicants['resource'];
		}
		return $result;

	}

	function search_applicant( $email ){
		$result = array();
		$filter = "(email=".$email.")";
		// $order_by = "stages_sort ASC";

		$application = $this->Api->get('_table', 'm_pelamar' , '*' , $filter  );

		if (isset($application['resource'])) {
			$result = $application['resource'];
		}
		return $result;
	}

	function edit($id,$company_name,$company_nickname,$address,$phone_no,$fax_no,$zip_code,$email_support,$status,$upd,$lup){
		
		$data = array(
		   'company_name' => $company_name,
		   'company_nickname' => $company_nickname,
		   'address' => $address,
		   'phone_no' => $phone_no,
		   'fax_no' => $fax_no,
		   'zip_code' => $zip_code,
		   'email_support' => $email_support,
		   'status' => $status, 
		   'created' => $upd,
		   'created_at' => $lup,
		   'updated' => $upd,
		   'updated_at' => $lup
		);

		$filter = array("filter"=>"id=".$id."");

		$update_tenant 	= $this->Api->put_table( 'm_vacancy' , $data , $filter );


		if (!empty($update_tenant['resource'])) {
			$respons = array("status" => "success" , "reason" => "Tenant has been update" );
		}else{
			$respons = array("status" => "failed" , "reason" => "Failed update Tenant" );
		}

		return $respons;
	}


	function check_email( $email, $pelamar_id, $fullname,  $vacancy_id , $base_url , $upd ){

		$type = '_table';
		$type_val = 'log_send_invitation';
		$fields = '*';
		$filter = '(pelamar_id='.$pelamar_id.')and(vacancy_id='.$vacancy_id.')';

		$data = $this->Api->get( $type , $type_val , $fields , $filter );

		if(isset($data['resource'][0]['email'])){

				$result = array('status'=> 'error', 'reason'=> 'User has been Invitation email');
		
		}else{

				$insert_data = array(
				   'vacancy_id'		=> $vacancy_id,
				   'pelamar_id' 	=> $pelamar_id,
				   'email' 			=> $email,
				   'expired' 		=> date('Y-m-d', strtotime('+1 day') ),
				   'result_invitation' 	=> 0,
				   'created' 		=> $upd,
				   'created_at' 	=> date('Y-m-d H:i:s')
				);

				$insert_log_send_invitation = $this->Api->post_table( "log_send_invitation" , $insert_data );

				$send_status = $this->send_invitation_mail($email, $pelamar_id, $fullname, $base_url, $vacancy_id);
				if($send_status['status']){
					$result = array('status'=> 'success', 'reason'=> 'Invitation has been sent');
				}else{
					$result = array('status'=> 'error', 'reason'=> 'Invitation failed to send');
				}
		}	
		return $result;
	}



	function send_invitation_mail($email, $pelamar_id, $fullname, $base_url, $vacancy_id){



        //Server settings
        $config = $this->data_smtp;

		setlocale(LC_ALL, 'id_ID');
		$this->load->helper('date');
		$type 		= "_table";
		$fields 	= "*";
		$result_template 	= $this->Api->get($type , 'm_notif_template', $fields, '(theme=send_invitation)');
		$result_vacancy 	= $this->Api->get($type , 'vw_monitoring_job_vacancies', $fields ,'(id='.$vacancy_id.')');

		// print_r($result_vacancy);

		$mail_subject 	= $result_template['resource'][0]['mail_subject'];
		$html_template 	= $result_template['resource'][0]['html_template'];

		$vacancy_name = $result_vacancy['resource'][0]['vacancy_name'];
		$company_name = $result_vacancy['resource'][0]['company_name'];

		$url_details = $base_url.'job/detail/'.base64_encode($this->encryption->encrypt($vacancy_id)).'/'.base64_encode($this->encryption->encrypt($pelamar_id)).'/'.base64_encode($this->encryption->encrypt("invitation"));
		$url_apply = $base_url.'job/apply/'.base64_encode($this->encryption->encrypt($vacancy_id)).'/'.base64_encode($this->encryption->encrypt($pelamar_id));

		$filename = $_SERVER['DOCUMENT_ROOT']."/recruitment/assets/backend/modules/core/common/img/".$this->data_master['logo']."";
		$this->email->attach($_SERVER['DOCUMENT_ROOT']."/recruitment/assets/backend/modules/core/common/img/".$this->data_master['logo']."", "inline");

		// $img_logo = "<img src='".base_url()."/assets/backend/modules/core/common/img/".$this->data_master['logo']."' alt='Career | SharedVis' style='height: 40px' />";
		$cid = $this->email->attachment_cid($filename);
   		$message = $html_template;
		$message = str_replace('$cid',$cid,$message);
		$message = str_replace('$base_url',$base_url,$message);
		$message = str_replace('$pelamar_id',$pelamar_id,$message);
		$message = str_replace('$email',$email,$message);
   		$message = str_replace('$fullname',$fullname,$message);
		$message = str_replace('$vacancy_id',$vacancy_id,$message);
   		$message = str_replace('$url_details',$url_details,$message);
   		$message = str_replace('$vacancy_name',$vacancy_name,$message);
   		$message = str_replace('$company_name',$company_name,$message);

       	$this->email->initialize($config);
		$this->email->set_newline("\r\n");
		$this->email->from( $this->email_from , $this->email_fromname ); // change it to yours
		$this->email->to($email);// change it to yours
		$this->email->subject($mail_subject);
		$this->email->message($message);

	   	if($this->email->send()){
	    	$result = array('status' => true);
		}else{
			$result = array('status' => false);
		}
		
		return $result;
	}


	function send_mail_stage( $pelamar_id, $fullname, $email, $stage_id, $stage_name, $vacancy_id, $vacancy_name, $date, $start_time, $end_time, $location, $notes, $base_url, $upd ){


        //Server settings
        $config = $this->data_smtp;

		setlocale(LC_ALL, 'id_ID');
		$this->load->helper('date');
		$type 		= "_table";
		$fields 	= "*";
		$result_template 	= $this->Api->get($type , 'm_notif_template', $fields, '(theme=send_schedule)');

		// print_r($result_vacancy);
		$mail_subject 	= $result_template['resource'][0]['mail_subject'];
		$html_template 	= $result_template['resource'][0]['html_template'];

		$filename = $_SERVER['DOCUMENT_ROOT']."/recruitment/assets/backend/modules/core/common/img/".$this->data_master['logo']."";
		$this->email->attach($_SERVER['DOCUMENT_ROOT']."/recruitment/assets/backend/modules/core/common/img/".$this->data_master['logo']."", "inline");

		// $img_logo = "<img src='".base_url()."/assets/backend/modules/core/common/img/".$this->data_master['logo']."' alt='Career | SharedVis' style='height: 40px' />";
		$cid = $this->email->attachment_cid($filename);

   		$message = $html_template;
		$message = str_replace('$cid',$cid,$message);
		$message = str_replace('$fullname',$fullname,$message); 
		$message = str_replace('$stage_name',$stage_name,$message);
		$message = str_replace('$vacancy_name',$vacancy_name,$message);
		$message = str_replace('$date',$date,$message);
		$message = str_replace('$start_time',$start_time,$message);
		$message = str_replace('$end_time',$end_time,$message);
		$message = str_replace('$location',$location,$message);
		$message = str_replace('$notes',$notes,$message); 


       	$this->email->initialize($config);
		$this->email->set_newline("\r\n");
		$this->email->from( $this->email_from , $this->email_fromname ); // change it to yours
		$this->email->to($email);// change it to yours
		$this->email->subject($mail_subject);
		$this->email->message($message);

	   	if($this->email->send()){
	    	$result = array('status' => "success" , 'reason' => 'Set schedule mail sent');
	    	$result_mail = 1;
		}else{
			$result = array('status' => "failed" , 'reason' => 'Failed');
			$result_mail = 9;
		}

		$insert_log_mail_stage = array(
		   'pelamar_id' 	=> $pelamar_id,
		   'vacancy_id'		=> $vacancy_id,
		   'stage_id'		=> $stage_id,
		   'date'			=> $date,
		   'start_time'		=> $start_time,
		   'end_time'		=> $end_time,
		   'location'		=> $location,
		   'notes'			=> $notes,
		   'email' 			=> $email,
		   'result_mail' 	=> $result_mail,
		   'mail_type'		=> 'schedule',
		   'result_invitation' 	=> 0,
		   'created' 		=> $upd,
		   'created_at' 	=> date('Y-m-d H:i:s')
		);

		$insert_log_send_invitation = $this->Api->post_table( "log_mail_stage" , $insert_log_mail_stage );

		return $result;
	}




}

/* End of file M_monitoring_job_vacancies.php */
/* Location: ./application/models/M_monitoring_job_vacancies.php */
