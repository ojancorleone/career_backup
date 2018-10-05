<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_admin_smtp extends CI_Model {

	function __construct()
    {
        parent::__construct();
		$this->load->model('data/Api');
    }


	public function list_data($length,$start,$search,$order,$dir,$column_name){
		
		$order_by="mail_name";
		if($column_name!="" && $column_name != "no"){
			$order_by="$column_name $dir";
		}
		
		$filter="";
		 if($search!=""){
			$filter="and((mail_name like '%".$search."%')or(smtp_user like '%".$search."%')or(smtp_port like '%".$search."%'))";
		}

		$fields		= '*';
		$filter 	= "(is_deleted=0)".$filter;
		$limit 		= $length;
		$offset 	= $start;

		$result_data = $this->Api->get('_table' , 'mail_setting' , $fields , $filter, $order , $limit, $offset);
		// $total		= count($result_data['resource']);

		$get_total_row	= $this->Api->get('_table' ,'mail_setting', NULL, $filter , NULL, NULL, NULL, TRUE);
		$total_row		= $get_total_row;
		
		return array("data"=>$result_data['resource'],
						"total_data"=>$total_row
				);
	}

	function detail_data($id){

		$type 		= '_table';
		$type_val 	= 'mail_setting';
		$fields		= '*';
		$filter 	= "(id=".$id.")";
		$result = $this->Api->get($type , $type_val , $fields , $filter);

		return $result['resource'];

	}

	// function update_status($id,$status,$upd,$lup){

	// 	$data = array('status' => $status,
	// 				  'updated' => $upd,
	// 				  'updated_at' => $lup
	// 				);

	// 	$this->db->where('id', $id );

	// 	$update	= $this->db->update('m_tenant_mail_account', $data); 

	// 	if($update){
	// 		$result = array('status'=> 'success', 'reason'=> 'Data has been changed');
	// 	}else{
	// 		$result = array('status'=> 'fail', 'reason'=> 'Failed Update Data');
	// 	}

	// 	return $result;

	// }

	// function deleted_item($id,$status,$upd,$lup){

	// 	$data = array('is_deleted' => '1',
	// 				  'updated' => $upd,
	// 				  'updated_at' => $lup
	// 				);

	// 	$this->db->where('id', $id );

	// 	$update	= $this->db->update('m_tenant_mail_account', $data); 

	// 	if($update){
	// 		$result = array('status'=> 'success', 'reason'=> 'Data has been deleted');
	// 	}else{
	// 		$result = array('status'=> 'fail', 'reason'=> 'Failed Deleted Data');
	// 	}

	// 	return $result;

	// }


	// function add($username,$password,$mail_type,$host,$auth,$port,$set_from_name,$set_from_mail,$set_replyto_name,$set_replyto_mail,$status,$upd,$lup,$tenant_id){


	// 	$data = array(
	// 	   'username' => $username,
	// 	   'password' => $password,
	// 	   'mail_type' => $mail_type,
	// 	   'host' => $host,
	// 	   'auth' => $auth,
	// 	   'port' => $port,
	// 	   'set_from_name' => $set_from_name,
	// 	   'set_from_mail' => $set_from_mail,
	// 	   'set_replyto_name' => $set_replyto_name,
	// 	   'set_replyto_mail' => $set_replyto_mail,
	// 	   'status' => $status,
	// 	   'tenant_id' => $tenant_id,   
	// 	   'created' => $upd,
	// 	   'created_at' => $lup,
	// 	   'updated' => $upd,
	// 	   'updated_at' => $lup
	// 	);

	// 	$insert = $this->db->insert('m_tenant_mail_account', $data); 

	// 	if($insert){
	// 		$result = array('status'=> 'success', 'reason'=> 'Data has been changed');
	// 	}else{
	// 		$result = array('status'=> 'fail', 'reason'=> 'Failed Update Data');
	// 	}

	// 	return $result;

	// }


	// function edit($act,$id,$username,$password,$mail_type,$host,$auth,$port,$set_from_name,$set_from_mail,$set_replyto_name,$set_replyto_mail,$status,$upd,$lup,$tenant_id){

	// 	$data = array('username' => $username,
	// 				   'password' => $password,
	// 				   'mail_type' => $mail_type,
	// 				   'host' => $host,
	// 				   'auth' => $auth,
	// 				   'port' => $port,
	// 				   'set_from_name' => $set_from_name,
	// 				   'set_from_mail' => $set_from_mail,
	// 				   'set_replyto_name' => $set_replyto_name,
	// 				   'set_replyto_mail' => $set_replyto_mail,
	// 				  'status' => $status,
	// 				  'updated' => $upd,
	// 				  'updated_at' => $lup,
	// 				  'tenant_id' => $tenant_id
	// 				);

	// 	$this->db->where('id', $id );

	// 	$update	= $this->db->update('m_tenant_mail_account', $data); 

	// 	if($update){
	// 		$result = array('status'=> 'success', 'reason'=> 'Data has been changed');
	// 	}else{
	// 		$result = array('status'=> 'fail', 'reason'=> 'Failed Update Data');
	// 	}

	// 	return $result;
	// }

}

/* End of file M_admin_mail_config.php */
/* Location: ./application/models/M_admin_mail_config.php */
