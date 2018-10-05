<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_job_request extends CI_Model {

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
		$tenant_id = $this->session->userdata('tenant_id');
		$order_by="vacancy_name";
		if($column_name!="" && $column_name != "no"){
			$order_by="$column_name $dir";
		}

		$tenant_clause = "";
		if($tenant_id != '0'){
			$tenant_clause = "and(tenant_id = ".$tenant_id.")";
		}

		$filter="";
		 if($search!=""){
			$filter="and((company_name like '%".$search."%')or(vacancy_name like '%".$search."%')or(request_status like '%".$search."%'))";
		}

		$fields			= '*';
		$filter 		= "(is_deleted=0)".$filter.$tenant_clause;
		$limit 			= $length;
		$offset 		= $start;

		$result_data 	= $this->Api->get('_table' , 'vw_job_request' , $fields , $filter, $order_by , $limit, $offset);
		// print_r($result_data);
		// exit();
		$get_total_row	= $this->Api->get('_table' ,'vw_job_request', NULL, $filter , NULL, NULL, NULL, TRUE);
		$total_row		= $get_total_row;
		
		

		return array("data"=>$result_data['resource'],
					 "total_data"=>$total_row
				);
	}

	public function list_history($id){
		$result 		= "";
		$filter 		= "(request_id=".$id.")";
		$vacancy_data 	= $this->Api->get('_table' ,'trn06job_request', '*' , $filter);
	
		if (isset($vacancy_data['resource'])) {
			$result = $vacancy_data['resource'];
		}
		return $result;
	}

	function detail_data($id){
		$result 		= "";
		$filter 		= "(id=".$id.")";
		$vacancy_data 	= $this->Api->get('_table' ,'trn01job_request', '*' , $filter);

		if (isset($vacancy_data['resource'][0])) {
			$result = $vacancy_data['resource'][0];
		}
		return $result;

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


	function add($data_vacancy, $data_request){
		$insert_vacancy = $this->Api->post_table( "trn01job_request" , $data_vacancy);
		// print_r($insert_vacancy);
		// exit();
		if (!empty($insert_vacancy['resource'][0])) {
				$data_request['request_id'] 	= $insert_vacancy['resource'][0]['id'];
				$insert_job_request 			= $this->Api->post_table( "trn06job_request" , $data_request);
			$respons = array("status" => "success" , "reason" => "Add Job Request Successfully..." );
		}else{
			$respons = array("status" => "failed" , "reason" => "Add Job Request Failed..." );
		}

		return $respons;
	}

	public function get_option($q,$table,$vendor_id){
		$fields = "id,name";
		$filter = NULL;
		if ( $vendor_id != "" ) {
			$filter = "(vendor_id=".$vendor_id.")";
		}

		$result_data = $this->Api->get('_table' , $table , $fields , $filter );
		return $result_data;
	}


	function edit($id, $data_vacancy, $data_request){

		$filter = array("filter"=>"id=".$id."");

		$update_vacancy = $this->Api->put_table( 'trn01job_request', $data_vacancy, $filter);

		if (!empty($update_vacancy['resource'])) {
			$data_request['request_id']	= $update_vacancy['resource'][0]['id'];
			$insert_job_request 			= $this->Api->post_table( "trn06job_request" , $data_request);
			$respons						= array("status" => "success" , "reason" => "Job Request has been update" );
		}else{
			$respons = array("status" => "failed" , "reason" => "Failed update Job Request" );
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

		$filename = "C:/xampp/htdocs/recruitment-dev/assets/backend/modules/core/common/img/".$this->data_master['logo']."";
		$this->email->attach("C:/xampp/htdocs/recruitment-dev/assets/backend/modules/core/common/img/".$this->data_master['logo']."", "inline");

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

		$filename = "C:/xampp/htdocs/recruitment-dev/assets/backend/modules/core/common/img/".$this->data_master['logo']."";
		$this->email->attach("C:/xampp/htdocs/recruitment-dev/assets/backend/modules/core/common/img/".$this->data_master['logo']."", "inline");

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
