<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_admin_applicant extends CI_Model {

	function __construct()
    {
        parent::__construct();
		$this->load->model('data/Api');
    }


	public function list_data($length,$start,$search,$order,$dir,$column_name){
		
		$order_by="fullname";

		if($column_name!="" && $column_name != "no"){
			$order_by="$column_name $dir";
		}
		
		$filter="";
		 if($search!=""){
			$filter="and((fullname like '%".$search."%')or(email like '%".$search."%')or(phone like '%".$search."%'))";
		}
		$fields		= 'id,email,no_ktp,fullname,jenis_kelamin,agama,phone,status';

		$filter 	= "(is_deleted=0)".$filter;
		$limit 		= $length;
		$offset 	= $start;

		$result_data 	= $this->Api->get('_table' ,'m_pelamar' , $fields , $filter, $order_by , $limit, $offset);
		// $total1		= count($result_data['resource']);

		// print_r($result_data);
		// exit();
		// die();

		$get_total_row	= $this->Api->get('_table' ,'m_pelamar', NULL, $filter , NULL, NULL, NULL, TRUE);
		$total_row		= $get_total_row;

		return array("data"=>$result_data['resource'],
						"total_data"=>$total_row
				);
	}

	function detail_data($id){

		$fields		= 'id,email,no_ktp,fullname,userlevel,nama_panggilan,jenis_kelamin,alamat_domisili,kota_domisili,alamat_ktp,agama,tempat_lahir,tgl_lahir,no_npwp,no_jamsostek,kode_pos,phone,status_menikah,kewarganegaraan,status';
		$filter 	= "(id=".$id.")";
		$result = $this->Api->get('_table' , 'm_pelamar' , $fields , $filter);

		return $result['resource'];

	}

	function update_status($id,$status,$upd,$lup){

		$data = array('status' => $status,
					  'updated' => $upd,
					  'updated_at' => $lup
					);

		$filter = array("filter"=>"id=".$id."");

		$update_status_tenant = $this->Api->put_table( 'm_pelamar' , $data , $filter );

		if (!empty($update_status_tenant['resource'])) {
			$respons = array("status" => "success" , "reason" => "Change Status to ".$status );
		}else{
			$respons = array("status" => "failed" , "reason" => "Failed update Status" );
		}

		return $respons;

	}

	function deleted_item($id,$status,$upd,$lup){

		$data = array('is_deleted' => 1,
					  'updated' => $upd,
					  'updated_at' => $lup
					);

		$filter = array("filter"=>"id=".$id."");

		$delete_tenant 	= $this->Api->put_table( 'm_pelamar' , $data , $filter );

		if (!empty($delete_tenant['resource'])) {
			$respons = array("status" => "success" , "reason" => "Tenant has been delete" );
		}else{
			$respons = array("status" => "failed" , "reason" => "Failed delete Tenant" );
		}

		return $respons;

	}


	function add($fullname,$email,$phone,$agama,$jenis_kelamin,$status,$password,$upd,$lup){

		$data_admin = array(
		   'fullname' => $fullname,
		   'email' => $email,
		   'phone' => $phone,
		   'agama' => $agama,
		   'jenis_kelamin' => $jenis_kelamin,
		   'status' => $status, 
		   'created' => $upd,
		   'created_at' => $lup,
		   'updated' => $upd,
		   'updated_at' => $lup
		);

		$data_login = array(
		   'email' => $email,
		   'password' =>  password_hash( $password, PASSWORD_BCRYPT, ['cost' => 10] ),
		   'user_type' => 'pelamar',
		   'updated' => $upd,
		   'updated_at' => $lup
		);

		$insert_admin = $this->Api->post_table( "m_pelamar" , $data_admin );
		$insert_login = $this->Api->post_table( "m_login" , $data_login );

		if (!empty($insert_admin['resource']) && !empty($insert_login['resource'])) {
			$respons = array("status" => "success" , "reason" => "Add Applicant Successfully..." );
		}else{
			$respons = array("status" => "failed" , "reason" => "Add Applicant Failed..." );
		}

		return $respons;
	}


	function edit($id,$fullname,$email,$phone,$agama,$jenis_kelamin,$status,$upd,$lup){
		
		$data = array(
		   'fullname' => $fullname,
		   'email' => $email,
		   'phone' => $phone,
		   'agama' => $agama,
		   'jenis_kelamin' => $jenis_kelamin,
		   'status' => $status, 
		   'created' => $upd,
		   'created_at' => $lup,
		   'updated' => $upd,
		   'updated_at' => $lup
		);

		$filter = array("filter"=>"id=".$id."");

		$update_tenant 	= $this->Api->put_table( 'm_pelamar' , $data , $filter );


		if (!empty($update_tenant['resource'])) {
			$respons = array("status" => "success" , "reason" => "Applicant has been update" );
		}else{
			$respons = array("status" => "failed" , "reason" => "Failed update Applicant" );
		}

		return $respons;
	}

}

/* End of file M_admin_mail_config.php */
/* Location: ./application/models/M_admin_mail_config.php */
