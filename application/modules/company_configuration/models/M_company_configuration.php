<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_company_configuration extends CI_Model {

	function __construct()
    {
        parent::__construct();
		$this->load->model('data/Api');
    }


	public function list_data($length,$start,$search,$order,$dir,$column_name){
		
		$order_by="company_name";
		if($column_name!="" && $column_name != "no"){
			$order_by="$column_name $dir";
		}

		$filter="";
		 if($search!=""){
			$filter="and((company_name like '%".$search."%')or(address like '%".$search."%')or(phone_no like '%".$search."%')or(fax_no like '%".$search."%')or(email_support like '%".$search."%'))";
		}

		$fields		= '*';
		$filter 	= "(is_deleted=0)".$filter;
		$limit 		= $length;
		$offset 	= $start;

		$result_data = $this->Api->get('_table' , 'm_tenant' , $fields , $filter, $order_by , $limit, $offset);
		// $total		= count($result_data['resource']);

		$get_total_row	= $this->Api->get('_table' ,'m_tenant', NULL, $filter , NULL, NULL, NULL, TRUE);
		$total_row		= $get_total_row;
		
		

		return array("data"=>$result_data['resource'],
						"total_data"=>$total_row
				);
	}

	function detail_data($id){

		$type 		= '_table';
		$type_val 	= 'm_tenant';
		$fields		= '*';
		$filter 	= "(id=".$id.")";
		$result = $this->Api->get($type , $type_val , $fields , $filter);

		return $result['resource'];

	}

	function update_status($id,$status,$upd,$lup){

		$data = array('status' => $status,
					  'updated' => $upd,
					  'updated_at' => $lup
					);

		$filter = array("filter"=>"id=".$id."");

		$update_status_tenant = $this->Api->put_table( 'm_tenant' , $data , $filter );

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

		$delete_tenant 	= $this->Api->put_table( 'm_tenant' , $data , $filter );

		if (!empty($delete_tenant['resource'])) {
			$respons = array("status" => "success" , "reason" => "Tenant has been delete" );
		}else{
			$respons = array("status" => "failed" , "reason" => "Failed delete Tenant" );
		}

		return $respons;

	}


	function add($company_name,$company_nickname,$address,$phone_no,$fax_no,$zip_code,$email_support,$status,$upd,$lup){


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

		$insert_tenant = $this->Api->post_table( "m_tenant" , $data );

		if (!empty($insert_tenant['resource'])) {
			$respons = array("status" => "success" , "reason" => "Add Company Successfully..." );
		}else{
			$respons = array("status" => "failed" , "reason" => "Add Company Failed..." );
		}

		return $respons;
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

		$update_tenant 	= $this->Api->put_table( 'm_tenant' , $data , $filter );


		if (!empty($update_tenant['resource'])) {
			$respons = array("status" => "success" , "reason" => "Tenant has been update" );
		}else{
			$respons = array("status" => "failed" , "reason" => "Failed update Tenant" );
		}

		return $respons;
	}

}

/* End of file M_admin_mail_config.php */
/* Location: ./application/models/M_admin_mail_config.php */
