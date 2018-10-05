<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_users extends CI_Controller {

	function __construct()
    {
        parent::__construct();
		$this->load->model('M_admin_users');
    }

	public function index(){

		if($this->session->userdata('is_logged_in') == true){

			$parent_page	=  $this->uri->segment(1);
			$page			=  $this->uri->segment(1);
				
			$this->load->library('page_render');
			
			$data=array(
				'page_content' 				=> $page,
				'base_url'					=> base_url().$page,
				"tenant_id"					=> $this->session->userdata('tenant_id')
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
			
			$data =  $this->M_admin_users->list_data($length,$start,$search,$order,$dir,$column_name);
			
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
			                  </a>";

				$output['data'][]=array(
					$nomor_urut,
					$row['fullname'], 
					$row['email'],
					$row['phone'],
					$row['userlevel'],
					$row['company_name'],
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

			$fullname 		= NULL;
			$email			= NULL;
			$phone 			= NULL;
			$userlevel 		= NULL;
			$status 		= NULL;
			$tenant_id		= $this->session->userdata('tenant_id');

			
			if($act=="Edit"){

				$detail_data = $this->M_admin_users->detail_data($id);
					
					$fullname		= $detail_data[0]['fullname'];
					$email			= $detail_data[0]['email'];
					$phone			= $detail_data[0]['phone'];
					$userlevel		= $detail_data[0]['userlevel'];
					$status			= $detail_data[0]['status'];
					$tenant_id		= $detail_data[0]['tenant_id'];

			}

			$this->drop_down->select('option_id','option_name');
			$this->drop_down->from('m_option');
			$this->drop_down->where('(option_type=status)');
			$list_status = $this->drop_down->build($status);

			$this->drop_down->select('option_id','option_name');
			$this->drop_down->from('m_option');
			$this->drop_down->where('(option_type=userlevel)');
			$list_userlevel = $this->drop_down->build($userlevel);

			$this->drop_down->select('id','company_name');
			$this->drop_down->from('m_tenant');
			$this->drop_down->where();
			$list_tenant = $this->drop_down->build($tenant_id);

			$data = array(
				'page'				=> $parent_page,
				'page_content'		=> $parent_page.'_'.$page,
				'base_url'			=> base_url(),
				'act'				=> $act,
				'id'				=> $id,
				'fullname'			=> $fullname,
				'email'				=> $email,
				'phone'				=> $phone,
				'userlevel'			=> $userlevel,
				'list_status' 		=> $list_status,
				'list_tenant' 		=> $list_tenant,
				'list_userlevel'	=> $list_userlevel
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
			
			$fullname	= $this->input->post('fullname');
			$email		= $this->input->post('email');
			$userlevel	= $this->input->post('userlevel');
			$phone		= $this->input->post('phone');
			$tenant_id	= $this->input->post('tenant_id');
			$status 	= $this->input->post('status');

			$password	= $this->input->post('password');

			$upd 	= $this->session->userdata('email');
			$lup 	= date('Y-m-d H:i:s');

			if($act=="Edit"){
				$submit = $this->M_admin_users->edit($id,$fullname,$email,$phone,$userlevel,$tenant_id,$status,$upd,$lup);
			}else{
				$submit = $this->M_admin_users->add($fullname,$email,$phone,$userlevel,$tenant_id,$password,$status,$upd,$lup);
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


			$update_status 	= $this->M_admin_users->update_status($id,$status,$upd,$lup);

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

			$deleted_item = $this->M_admin_users->deleted_item($id,$status,$upd,$lup);

			echo json_encode($deleted_item);

		}else{
			exit();
		}
	}


}

/* End of file Admin_users.php */
/* Location: ./application/controllers/Admin_users.php */
