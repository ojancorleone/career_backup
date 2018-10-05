<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Master_vendor extends CI_Controller {

	function __construct()
    {
        parent::__construct();
		$this->load->model('M_master_vendor');
    }

	public function index(){

		if($this->session->userdata('is_logged_in') == true){

			$parent_page	=  $this->uri->segment(1);
			$page			=  $this->uri->segment(1);
				
			$this->load->library('page_render');
			$this->load->library('drop_down');
			
			$this->drop_down->select('option_id','option_name');
			$this->drop_down->from('m_option');
			$this->drop_down->where('(option_type=status)');
			$list_status = $this->drop_down->build('');
			
			$data=array(
				'page_content' 				=> $page,
				'base_url'					=> base_url().$page,
				"tenant_id"					=> $this->session->userdata('tenant_id'),
				'list_status' 				=> $list_status
			);

			$this->parser->parse('master/content', $data);

		}else{
			redirect('login');
		}
	}


	public function json_list(){
			
			$parent_page	=  $this->uri->segment(1);
			
			$draw=$_REQUEST['draw'];
			$length=$_REQUEST['length'];
			$start=$_REQUEST['start'];
			$search=$_REQUEST['search']["value"];
			
			$order=$_REQUEST['order'][0]["column"];
			$column_name=$_REQUEST['columns'][$order]["name"];
			$dir=$_REQUEST['order'][0]["dir"];

			$this->load->library('encryption');
			
			
			$data =  $this->M_master_vendor->list_data($length,$start,$search,$order,$dir,$column_name);
			
			$output=array();
			$output['draw']=$draw;
			$output['recordsTotal']=$output['recordsFiltered']=$data['total_data'];
			$output['data']=array();
			
			
			$nomor_urut=$start+1;
			setlocale(LC_ALL, 'id_ID');
			
			foreach ($data['data'] as $rows =>$row) {
				
				$id = $row['id'];

				if($row['status'] == 'Aktif'){
					$iconStatus = "<input type='checkbox' data-render='switchery' id=$id onclick='change_status($id)' class='form-check-input' checked />";
				}else{
					$iconStatus = "<input type='checkbox' data-render='switchery' id=$id onclick='change_status($id)' class='form-check-input' />";
				}
				
                $iconAction = "";    

                $iconAction = "<a href='main#".$parent_page."/view_detail/".base64_encode($this->encryption->encrypt('Edit')).'/'.base64_encode($this->encryption->encrypt($id))."' class='btn btn-icon btn-primary btn-rounded mr-2 mb-2' data-toggle='tooltip' title='View Details' aria-expanded='false'>
			                    <i class='icmn-pencil'></i>
			                  </a>
			                  <a onclick=del('".$row['id']."') id=$id class='btn btn-icon btn-danger btn-rounded mr-2 mb-2' data-toggle='tooltip' title='Deleted' aria-expanded='false'>
			                    <i class='icmn-bin2'></i>
			                  </a>
			                  <a onclick=detail_apps('".$row['id']."','".$row['vendor_nickname']."') id=$id class='btn btn-icon btn-success btn-rounded mr-2 mb-2' data-toggle='tooltip' title='View Apps' aria-expanded='false'>
			                    <i class='fa fa-table'></i>
			                  </a>
							  <a onclick=detail_pic('".$row['id']."','".$row['vendor_nickname']."') id=$id class='btn btn-icon btn-success btn-rounded mr-2 mb-2' data-toggle='tooltip' title='View PIC' aria-expanded='false'>
			                    <i class='fa fa-users'></i>
			                  </a>
							  ";

				$output['data'][]=array(
					$nomor_urut, 
					$row['vendor_name'], 
					$row['vendor_nickname'],
					$row['address'],
					$row['phone_no'],
					$row['fax_no'],
					$row['email_support'],
					$iconStatus,  
					$iconAction
				);
				$nomor_urut++;
			}
			
			echo json_encode($output);
	}

	public function view_detail(){

		if($this->session->userdata('is_logged_in') == true){
			
			$this->load->library('encryption');

			$parent_page	= $this->uri->segment(1);
			$page			= $this->uri->segment(2);
			$act			= $this->encryption->decrypt(base64_decode($this->uri->segment(3)));
			$id				= $this->encryption->decrypt(base64_decode($this->uri->segment(4)));

			$this->load->library('drop_down');

			$vendor_name 		= NULL;
			$vendor_nickname	= NULL;
			$address 			= NULL;
			$phone_no 			= NULL;
			$fax_no 			= NULL;
			$zip_code 			= NULL;
			$email_support 		= NULL;
			$status 			= NULL;

			$tenant_id		= $this->session->userdata('tenant_id');

			
			if($act=="Edit"){

				$detail_data = $this->M_master_vendor->detail_data($id);
					
					$vendor_name		= $detail_data[0]['vendor_name'];
					$vendor_nickname	= $detail_data[0]['vendor_nickname'];
					$address			= $detail_data[0]['address'];
					$phone_no			= $detail_data[0]['phone_no'];
					$fax_no				= $detail_data[0]['fax_no'];
					$zip_code			= $detail_data[0]['zip_code'];
					$email_support		= $detail_data[0]['email_support'];
					$status				= $detail_data[0]['status'];

					$tenant_id			= $this->session->userdata('tenant_id');

			}

			$this->drop_down->select('option_id','option_name');
			$this->drop_down->from('m_option');
			$this->drop_down->where('(option_type=status)');
			$list_status = $this->drop_down->build($status);

			$data = array(
				'page'				=> $parent_page,
				'page_content'		=> $parent_page.'_'.$page,
				'base_url'			=> base_url(),
				'act'				=> $act,
				'id'				=> $id,
				'vendor_name'		=> $vendor_name,
				'vendor_nickname'	=> $vendor_nickname,
				'address'			=> $address,
				'phone_no'			=> $phone_no,
				'fax_no'			=> $fax_no,
				'zip_code'			=> $zip_code,
				'email_support'		=> $email_support,
				'list_status' 		=> $list_status
			);

			$this->parser->parse('master/content', $data);

		}else{
			exit();
		}

	}


	public function forms_submit(){

		if($this->session->userdata('is_logged_in') == true){

			$act 	= $this->input->post('act');
			$id 	= $this->input->post('id');
			
			$vendor_name		= $this->input->post('vendor_name');
			$vendor_nickname	= $this->input->post('vendor_nickname');
			$address			= $this->input->post('address');
			$phone_no			= $this->input->post('phone_no');
			$fax_no				= $this->input->post('fax_no');
			$zip_code			= $this->input->post('zip_code');
			$email_support		= $this->input->post('email_support');
			$status 			= $this->input->post('status');

			$upd 	= $this->session->userdata('email');
			$lup 	= date('Y-m-d H:i:s');

			if($act=="Edit"){
				$submit = $this->M_master_vendor->edit($id,$vendor_name,$vendor_nickname,$address,$phone_no,$fax_no,$zip_code,$email_support,$status,$upd,$lup);
			}else{
				$submit = $this->M_master_vendor->add($vendor_name,$vendor_nickname,$address,$phone_no,$fax_no,$zip_code,$email_support,$status,$upd,$lup);
			}

			echo json_encode($submit);

		}else{
			exit();
		}

	}
	
	public function forms_details_submit(){

		if($this->session->userdata('is_logged_in') == true){

			$act 	= $this->input->post('vendor_details_act');
			$id 	= $this->input->post('vendor_details_id');
			$vendor_id 	= $this->input->post('vendor_details_vendor_id');
			
			$vendor_details_name 		= $this->input->post('vendor_details_name');
			$vendor_details_description = $this->input->post('vendor_details_description');
			$vendor_details_app_url 	= $this->input->post('vendor_details_app_url');
			$vendor_details_status 		= $this->input->post('vendor_details_status');

			$upd 	= $this->session->userdata('email');
			$lup 	= date('Y-m-d H:i:s');

			if($act=="Edit"){
				$submit = $this->M_master_vendor->edit_details($id,$vendor_details_name,$vendor_details_description,$vendor_details_app_url,$vendor_details_status,$upd,$lup);
			}else{
				$submit = $this->M_master_vendor->add_details($vendor_id,$vendor_details_name,$vendor_details_description,$vendor_details_app_url,$vendor_details_status,$upd,$lup);
			}

			echo json_encode($submit);

		}else{
			exit();
		}

	}
	
	public function forms_pic_submit(){

		if($this->session->userdata('is_logged_in') == true){

			$act 	= $this->input->post('vendor_pic_act');
			$id 	= $this->input->post('vendor_pic_id');
			$vendor_id 	= $this->input->post('vendor_pic_vendor_id');
			
			$vendor_pic_name 		= $this->input->post('vendor_pic_name');
			$vendor_pic_position 	= $this->input->post('vendor_pic_position');
			$vendor_pic_email 		= $this->input->post('vendor_pic_email');
			$vendor_pic_handphone_no= $this->input->post('vendor_pic_handphone_no');
			$vendor_pic_status 		= $this->input->post('vendor_pic_status');

			$upd 	= $this->session->userdata('email');
			$lup 	= date('Y-m-d H:i:s');

			if($act=="Edit"){
				$submit = $this->M_master_vendor->edit_pic($id,$vendor_pic_name,$vendor_pic_position,$vendor_pic_handphone_no,$vendor_pic_email,$vendor_pic_status,$upd,$lup);
			}else{
				$submit = $this->M_master_vendor->add_pic($vendor_id,$vendor_pic_name,$vendor_pic_position,$vendor_pic_handphone_no,$vendor_pic_email,$vendor_pic_status,$upd,$lup);
			}

			echo json_encode($submit);

		}else{
			exit();
		}

	}

	public function change_status(){

		if($this->session->userdata('is_logged_in') == true){

			$id 	= $this->input->post('id');
			$status = $this->input->post('status');
			$upd 	= $this->session->userdata('email');
			$lup 	= date('Y-m-d H:i:s');


			$update_status 	= $this->M_master_vendor->update_status($id,$status,$upd,$lup);

			echo json_encode($update_status);

		}else{
			exit();
		}

	}

	public function del_item(){

		if($this->session->userdata('is_logged_in') == true){

			$id 	= $this->input->post('id');
			$status = $this->input->post('status');
			$upd 	= $this->session->userdata('email');
			$lup 	= date('Y-m-d H:i:s');

			$deleted_item = $this->M_master_vendor->deleted_item($id,$status,$upd,$lup);

			echo json_encode($deleted_item);

		}else{
			exit();
		}
	}
	
	public function json_list_apps(){
			
			$parent_page	=  $this->uri->segment(1);
			$id				=  $this->uri->segment(3);
			
			$draw=$_REQUEST['draw'];
			$length=$_REQUEST['length'];
			$start=$_REQUEST['start'];
			$search=$_REQUEST['search']["value"];
			
			$order=$_REQUEST['order'][0]["column"];
			$column_name=$_REQUEST['columns'][$order]["name"];
			$dir=$_REQUEST['order'][0]["dir"];

			$this->load->library('encryption');
			
			
			$data =  $this->M_master_vendor->list_data_apps($length,$start,$search,$order,$dir,$column_name,$id);
			
			$output=array();
			$output['draw']=$draw;
			$output['recordsTotal']=$output['recordsFiltered']=$data['total_data'];
			$output['data']=array();
			
			
			$nomor_urut=$start+1;
			setlocale(LC_ALL, 'id_ID');
			
			foreach ($data['data'] as $rows =>$row) {
				
				$id = $row['id'];

				if($row['status'] == 'Aktif'){
					$iconStatus = "<input type='checkbox' data-render='switchery' id=detail_$id onclick='change_status_detail($id)' class='form-check-input' checked />";
				}else{
					$iconStatus = "<input type='checkbox' data-render='switchery' id=detail_$id onclick='change_status_detail($id)' class='form-check-input' />";
				}
				
                $iconAction = "";    

                $iconAction = "<a onclick='updDetails(\"".$id."\");' class='btn btn-icon btn-primary btn-rounded mr-2 mb-2 show-vendor-details' title='Update Apps' aria-expanded='false'>
			                    <i class='icmn-pencil'></i>
			                  </a>
			                  <a onclick=delDetails('".$row['id']."') id=$id class='btn btn-icon btn-danger btn-rounded mr-2 mb-2' data-toggle='tooltip' title='Deleted' aria-expanded='false'>
			                    <i class='icmn-bin2'></i>
			                  </a>";

				$output['data'][]=array(
					$nomor_urut, 
					$row['name'], 
					$row['app_url'],
					$row['description'],
					$iconStatus,  
					$iconAction
				);
				$nomor_urut++;
			}
			
			echo json_encode($output);
	}
	
	public function json_detail_apps(){
			
			$id				=  $this->uri->segment(3);
			
			$this->load->library('encryption');
			
			$data =  $this->M_master_vendor->detail_data_apps($id);
			
			$return = array();
			if (isset($data[0])){
				$return['status'] = 'success';
				$return['data'] = $data[0];
			}else{
				$return['status'] = 'failed';
			}
			
			echo json_encode($return);
	}
	
	public function change_status_detail(){

		if($this->session->userdata('is_logged_in') == true){

			$id 	= $this->input->post('id');
			$status = $this->input->post('status');
			$upd 	= $this->session->userdata('email');
			$lup 	= date('Y-m-d H:i:s');


			$update_status 	= $this->M_master_vendor->update_status_details($id,$status,$upd,$lup);

			echo json_encode($update_status);

		}else{
			exit();
		}

	}
	
	public function del_item_detail(){

		if($this->session->userdata('is_logged_in') == true){

			$id 	= $this->input->post('id');
			$status = $this->input->post('status');
			$upd 	= $this->session->userdata('email');
			$lup 	= date('Y-m-d H:i:s');

			$deleted_item = $this->M_master_vendor->deleted_item_details($id,$status,$upd,$lup);

			echo json_encode($deleted_item);

		}else{
			exit();
		}
	}

	public function json_list_pic(){
			
			$parent_page	=  $this->uri->segment(1);
			$id				=  $this->uri->segment(3);
			
			$draw=$_REQUEST['draw'];
			$length=$_REQUEST['length'];
			$start=$_REQUEST['start'];
			$search=$_REQUEST['search']["value"];
			
			$order=$_REQUEST['order'][0]["column"];
			$column_name=$_REQUEST['columns'][$order]["name"];
			$dir=$_REQUEST['order'][0]["dir"];

			$this->load->library('encryption');
			
			
			$data =  $this->M_master_vendor->list_data_pic($length,$start,$search,$order,$dir,$column_name,$id);
			
			$output=array();
			$output['draw']=$draw;
			$output['recordsTotal']=$output['recordsFiltered']=$data['total_data'];
			$output['data']=array();
			
			
			$nomor_urut=$start+1;
			setlocale(LC_ALL, 'id_ID');
			
			foreach ($data['data'] as $rows =>$row) {
				
				$id = $row['pic_id'];

				if($row['status'] == 'Aktif'){
					$iconStatus = "<input type='checkbox' data-render='switchery' id=pic_$id onclick='change_status_pic($id)' class='form-check-input' checked />";
				}else{
					$iconStatus = "<input type='checkbox' data-render='switchery' id=pic_$id onclick='change_status_pic($id)' class='form-check-input' />";
				}
				
                $iconAction = "";    

                $iconAction = "<a onclick='updPIC(\"".$id."\");' class='btn btn-icon btn-primary btn-rounded mr-2 mb-2 show-vendor-pic' title='Update Apps' aria-expanded='false'>
			                    <i class='icmn-pencil'></i>
			                  </a>
			                  <a onclick=delPIC('".$row['pic_id']."') id=$id class='btn btn-icon btn-danger btn-rounded mr-2 mb-2' data-toggle='tooltip' title='Deleted' aria-expanded='false'>
			                    <i class='icmn-bin2'></i>
			                  </a>";

				$output['data'][]=array(
					$nomor_urut, 
					$row['name'], 
					$row['position'],
					$row['email'],
					$row['handphone_no'],
					$iconStatus,  
					$iconAction
				);
				$nomor_urut++;
			}
			
			echo json_encode($output);
	}
	
	public function json_detail_pic(){
			
			$id				=  $this->uri->segment(3);
			
			$this->load->library('encryption');
			
			$data =  $this->M_master_vendor->detail_data_pic($id);
			
			$return = array();
			if (isset($data[0])){
				$return['status'] = 'success';
				$return['data'] = $data[0];
			}else{
				$return['status'] = 'failed';
			}
			
			echo json_encode($return);
	}
	
	public function change_status_pic(){

		if($this->session->userdata('is_logged_in') == true){

			$id 	= $this->input->post('id');
			$status = $this->input->post('status');
			$upd 	= $this->session->userdata('email');
			$lup 	= date('Y-m-d H:i:s');


			$update_status 	= $this->M_master_vendor->update_status_pic($id,$status,$upd,$lup);

			echo json_encode($update_status);

		}else{
			exit();
		}

	}
	
	public function del_item_pic(){

		if($this->session->userdata('is_logged_in') == true){

			$id 	= $this->input->post('id');
			$status = $this->input->post('status');
			$upd 	= $this->session->userdata('email');
			$lup 	= date('Y-m-d H:i:s');

			$deleted_item = $this->M_master_vendor->deleted_item_pic($id,$status,$upd,$lup);

			echo json_encode($deleted_item);

		}else{
			exit();
		}
	}
}

/* End of file Admin_company.php */
/* Location: ./application/controllers/Admin_company.php */
