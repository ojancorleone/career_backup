<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Curiculum_vitae extends CI_Model {

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

	function detail_data( $id , $table ){
		$filter 	= "(id=".$id.")";

		if ($table != "m_pelamar") {
			$filter = "(pelamar_id = ".$id.")";
		}

		$result = $this->Api->get( '_table' , $table , '*' , $filter);

		return $result['resource'];

	}	

	function detail_data_file( $id , $table , $file_id ){
		$filter = "(pelamar_id=".$id.")and(file_id=".$file_id.")";
		$result = $this->Api->get( '_table' , $table , 'filename' , $filter);
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




	function update_pelamar( $detail_data, $pelamar_id ){
		
		$respons = array();

		$filter = array("filter"=>"id=".$pelamar_id."");

		$insert_data = $this->Api->put_table( 'm_pelamar' , $detail_data , $filter );

		if (!empty($insert_data['resource'])) {
			$respons = array("status" => "success" , "reason" => "Data has been update" );
		}else{
			$respons = array("status" => "failed" , "reason" => "Failed update Data" );
		}

		return $respons;
	}	


	function update_data( $pelamar_id, $data_fix , $table ){
		
		$respons = array();
		$delete_data = $this->delete_data( $table , $pelamar_id);
		$insert_data = $this->Api->post_table( $table , $data_fix );


		if (!empty($insert_data['resource'])) {
			$respons = array("status" => "success" , "reason" => "Data has been update" );
		}else{
			$respons = array("status" => "failed" , "reason" => "Failed update Data" );
		}

		return $respons;
	}	

	function update_file( $pelamar_id , $data_fix , $table , $file_id ){
		
		$respons = array();
		$filter = array("filter"=>"(pelamar_id=".$pelamar_id.")and(file_id=".$file_id.")");
		$update_data = $this->Api->put_table( $table , $data_fix , $filter);

		if (!empty($update_data['resource'])) {
			$respons = array("status" => "success" , "reason" => "Data has been update" );
		}else{
			$respons = array("status" => "failed" , "reason" => "Failed update Data" );
		}

		return $respons;
	}	

	function add_file( $data_fix , $table  ){
		
		$respons = array();
		$insert_data = $this->Api->post_table( $table , $data_fix );
		if (!empty($insert_data['resource'])) {
			$respons = array("status" => "success" , "reason" => "Data has been update" );
		}else{
			$respons = array("status" => "failed" , "reason" => "Failed update Data" );
		}

		return $respons;
	}


	function delete_data( $table , $pelamar_id ){
		$filter = "(pelamar_id=".$pelamar_id.")";
		$delete_data = $this->Api->delete(  $table , $filter );
		return false;
	}


	function get_list_docs(){
		$result = array();
		$result = $this->Api->get('_table' , 'm_opt_file' , '*', '(status=Aktif)' );
		return $result['resource'];
	}

}

/* End of file M_admin_mail_config.php */
/* Location: ./application/models/M_admin_mail_config.php */
