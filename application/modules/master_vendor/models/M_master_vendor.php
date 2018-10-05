<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_master_vendor extends CI_Model {

	function __construct()
    {
        parent::__construct();
		$this->load->model('data/Api');
    }


	public function list_data($length,$start,$search,$order,$dir,$column_name){
		
		$order_by="vendor_name";
		if($column_name!="" && $column_name != "no"){
			$order_by="$column_name $dir";
		}

		$filter="";
		 if($search!=""){
			$filter="and((vendor_name like '%".$search."%')or(address like '%".$search."%')or(phone_no like '%".$search."%')or(fax_no like '%".$search."%')or(email_support like '%".$search."%'))";
		}

		$fields		= '*';
		$filter 	= "(is_deleted=0)".$filter;
		$limit 		= $length;
		$offset 	= $start;

		$result_data = $this->Api->get('_table' , 'm_vendor' , $fields , $filter, $order_by , $limit, $offset);
		// $total		= count($result_data['resource']);
		/*
		print_r($result_data);
		die();
		exit();
		*/
		$get_total_row	= $this->Api->get('_table' ,'m_vendor', NULL, $filter , NULL, NULL, NULL, TRUE);
		$total_row		= $get_total_row;
		
		

		return array("data"=>$result_data['resource'],
						"total_data"=>$total_row
				);
	}	

	public function list_data_apps($length,$start,$search,$order,$dir,$column_name,$id){
		
		$order_by="id";
		if($column_name!="" && $column_name != "no"){
			$order_by="$column_name $dir";
		}

		$filter="";
		 if($search!=""){
			$filter="and((name like '%".$search."%')or(app_url like '%".$search."%')or(description like '%".$search."%'))";
		}

		$fields		= '*';
		$filter 	= "(is_deleted=0)and(vendor_id=".$id.")".$filter;
		$limit 		= $length;
		$offset 	= $start;

		$result_data = $this->Api->get('_table' , 'm_vendor_details' , $fields , $filter, $order_by , $limit, $offset);
		// $total		= count($result_data['resource']);
		
		$get_total_row	= $this->Api->get('_table' ,'m_vendor_details', NULL, $filter , NULL, NULL, NULL, TRUE);
		$total_row		= $get_total_row;
		$data 			= array();
		if (!empty($result_data['resource'])) {
			$data = $result_data['resource'];
		}

		return array("data"=>$data,
						"total_data"=>$total_row
				);
	}
	
	public function list_data_pic($length,$start,$search,$order,$dir,$column_name,$id){
		
		$order_by="pic_id";
		if($column_name!="" && $column_name != "no"){
			$order_by="$column_name $dir";
		}

		$filter="";
		 if($search!=""){
			$filter="and((name like '%".$search."%')or(position like '%".$search."%')or(email like '%".$search."%'))";
		}

		$fields		= '*';
		$filter 	= "(is_deleted=0)and(vendor_id=".$id.")".$filter;
		$limit 		= $length;
		$offset 	= $start;

		$result_data = $this->Api->get('_table' , 'm_vendor_pic' , $fields , $filter, $order_by , $limit, $offset);
		// $total		= count($result_data['resource']);
		
		$get_total_row	= $this->Api->get('_table' ,'m_vendor_pic', NULL, $filter , NULL, NULL, NULL, TRUE);
		$total_row		= $get_total_row;
		$data 			= array();
		if (!empty($result_data['resource'])) {
			$data = $result_data['resource'];
		}

		return array("data"=>$data,
						"total_data"=>$total_row
				);
	}

	function detail_data($id){

		$type 		= '_table';
		$type_val 	= 'm_vendor';
		$fields		= '*';
		$filter 	= "(id=".$id.")";
		$result = $this->Api->get($type , $type_val , $fields , $filter);

		return $result['resource'];

	}
	
	function detail_data_apps($id){

		$type 		= '_table';
		$type_val 	= 'm_vendor_details';
		$fields		= '*';
		$filter 	= "(id=".$id.")";
		$result = $this->Api->get($type , $type_val , $fields , $filter);

		return $result['resource'];

	}
	
	function detail_data_pic($id){

		$type 		= '_table';
		$type_val 	= 'm_vendor_pic';
		$fields		= '*';
		$filter 	= "(pic_id=".$id.")";
		$result = $this->Api->get($type , $type_val , $fields , $filter);

		return $result['resource'];

	}

	function update_status($id,$status,$upd,$lup){

		$data = array('status' => $status,
					  'updated' => $upd,
					  'updated_at' => $lup
					);

		$filter = array("filter"=>"id=".$id."");

		$update_status_tenant = $this->Api->put_table( 'm_vendor' , $data , $filter );

		if (!empty($update_status_tenant['resource'])) {
			$respons = array("status" => "success" , "reason" => "Change Status to ".$status );
		}else{
			$respons = array("status" => "failed" , "reason" => "Failed update Status" );
		}

		return $respons;

	}
	
	function update_status_details($id,$status,$upd,$lup){

		$data = array('status' => $status,
					  'updated' => $upd,
					  'updated_at' => $lup
					);

		$filter = array("filter"=>"id=".$id."");

		$update_status_tenant = $this->Api->put_table( 'm_vendor_details' , $data , $filter );

		if (!empty($update_status_tenant['resource'])) {
			$respons = array("status" => "success" , "reason" => "Change Status to ".$status );
		}else{
			$respons = array("status" => "failed" , "reason" => "Failed update Status" );
		}

		return $respons;

	}
	
	function update_status_pic($id,$status,$upd,$lup){

		$data = array('status' => $status,
					  'updated' => $upd,
					  'updated_at' => $lup
					);

		$filter = array("filter"=>"pic_id=".$id."");

		$update_status_tenant = $this->Api->put_table( 'm_vendor_pic' , $data , $filter );

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

		$delete_tenant 	= $this->Api->put_table( 'm_vendor' , $data , $filter );

		if (!empty($delete_tenant['resource'])) {
			$respons = array("status" => "success" , "reason" => "Vendor has been delete" );
		}else{
			$respons = array("status" => "failed" , "reason" => "Failed delete Vendor" );
		}

		return $respons;

	}
	
	function deleted_item_details($id,$status,$upd,$lup){

		$data = array('is_deleted' => 1,
					  'updated' => $upd,
					  'updated_at' => $lup
					);

		$filter = array("filter"=>"id=".$id."");

		$delete_tenant 	= $this->Api->put_table( 'm_vendor_details' , $data , $filter );

		if (!empty($delete_tenant['resource'])) {
			$respons = array("status" => "success" , "reason" => "Vendor Apps has been delete" );
		}else{
			$respons = array("status" => "failed" , "reason" => "Failed delete Vendor Apps" );
		}

		return $respons;

	}
	
	function deleted_item_pic($id,$status,$upd,$lup){

		$data = array('is_deleted' => 1,
					  'updated' => $upd,
					  'updated_at' => $lup
					);

		$filter = array("filter"=>"pic_id=".$id."");

		$delete_tenant 	= $this->Api->put_table( 'm_vendor_pic' , $data , $filter );

		if (!empty($delete_tenant['resource'])) {
			$respons = array("status" => "success" , "reason" => "Vendor PIC has been delete" );
		}else{
			$respons = array("status" => "failed" , "reason" => "Failed delete Vendor PIC" );
		}

		return $respons;

	}


	function add($vendor_name,$vendor_nickname,$address,$phone_no,$fax_no,$zip_code,$email_support,$status,$upd,$lup){


		$data = array(
		   'vendor_name' => $vendor_name,
		   'vendor_nickname' => $vendor_nickname,
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

		$insert_vendor = $this->Api->post_table( "m_vendor" , $data );

		if (!empty($insert_vendor['resource'])) {
			$respons = array("status" => "success" , "reason" => "Add Vendor Successfully..." );
		}else{
			$respons = array("status" => "failed" , "reason" => "Add Vendor Failed..." );
		}

		return $respons;
	}
	
	function add_details($vendor_id,$name,$description,$app_url,$status,$upd,$lup){
		
		$data = array(
		   'vendor_id' => $vendor_id,
		   'name' => $name,
		   'description' => $description,
		   'app_url' => $app_url,
		   'status' => $status, 
		   'created' => $upd,
		   'created_at' => $lup,
		   'updated' => $upd,
		   'updated_at' => $lup
		);

		$insert_vendor = $this->Api->post_table( "m_vendor_details" , $data );

		if (!empty($insert_vendor['resource'])) {
			$respons = array("status" => "success" , "reason" => "Add Vendor Apps Successfully..." );
		}else{
			$respons = array("status" => "failed" , "reason" => "Add Vendor Apps Failed..." );
		}

		return $respons;
	}
	
	function add_pic($vendor_id,$name,$position,$handphone_no,$email,$status,$upd,$lup){
		
		$data = array(
		   'vendor_id' => $vendor_id,
		   'name' => $name,
		   'position' => $position,
		   'handphone_no' => $handphone_no,
		   'email' => $email,
		   'status' => $status, 
		   'created' => $upd,
		   'created_at' => $lup,
		   'updated' => $upd,
		   'updated_at' => $lup
		);

		$insert_vendor = $this->Api->post_table( "m_vendor_pic" , $data );

		if (!empty($insert_vendor['resource'])) {
			$respons = array("status" => "success" , "reason" => "Add Vendor PIC Successfully..." );
		}else{
			$respons = array("status" => "failed" , "reason" => "Add Vendor PIC Failed..." );
		}

		return $respons;
	}


	function edit($id,$vendor_name,$vendor_nickname,$address,$phone_no,$fax_no,$zip_code,$email_support,$status,$upd,$lup){
		
		$data = array(
		   'vendor_name' => $vendor_name,
		   'vendor_nickname' => $vendor_nickname,
		   'address' => $address,
		   'phone_no' => $phone_no,
		   'fax_no' => $fax_no,
		   'zip_code' => $zip_code,
		   'email_support' => $email_support,
		   'status' => $status, 
		   'updated' => $upd,
		   'updated_at' => $lup
		);

		$filter = array("filter"=>"id=".$id."");

		$update_tenant 	= $this->Api->put_table( 'm_vendor' , $data , $filter );


		if (!empty($update_tenant['resource'])) {
			$respons = array("status" => "success" , "reason" => "Vendor has been update" );
		}else{
			$respons = array("status" => "failed" , "reason" => "Failed update Vendor" );
		}

		return $respons;
	}
	
	function edit_details($id,$name,$description,$app_url,$status,$upd,$lup){
		
		$data = array(
		   'name' => $name,
		   'description' => $description,
		   'app_url' => $app_url,
		   'status' => $status, 
		   'updated' => $upd,
		   'updated_at' => $lup
		);

		$filter = array("filter"=>"id=".$id."");

		$update_tenant 	= $this->Api->put_table( 'm_vendor_details' , $data , $filter );


		if (!empty($update_tenant['resource'])) {
			$respons = array("status" => "success" , "reason" => "Vendor Apps has been update" );
		}else{
			$respons = array("status" => "failed" , "reason" => "Failed update Vendor Apps" );
		}

		return $respons;
	}
	
	function edit_pic($id,$name,$position,$handphone_no,$email,$status,$upd,$lup){
		
		$data = array(
		   'name' => $name,
		   'position' => $position,
		   'handphone_no' => $handphone_no,
		   'email' => $email,
		   'status' => $status, 
		   'updated' => $upd,
		   'updated_at' => $lup
		);

		$filter = array("filter"=>"pic_id=".$id."");

		$update_tenant 	= $this->Api->put_table( 'm_vendor_pic' , $data , $filter );


		if (!empty($update_tenant['resource'])) {
			$respons = array("status" => "success" , "reason" => "Vendor PIC has been update" );
		}else{
			$respons = array("status" => "failed" , "reason" => "Failed update Vendor PIC" );
		}

		return $respons;
	}

}

/* End of file M_admin_mail_config.php */
/* Location: ./application/models/M_admin_mail_config.php */
