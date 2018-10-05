<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_company extends CI_Controller {

	function __construct()
    {
        parent::__construct();
		$this->load->model('M_admin_company');
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
			
			
			$data =  $this->M_admin_company->list_data($length,$start,$search,$order,$dir,$column_name);
			
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
					$row['company_name'], 
					$row['company_nickname'],
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

			$company_name 		= NULL;
			$company_nickname	= NULL;
			$address 			= NULL;
			$phone_no 			= NULL;
			$fax_no 			= NULL;
			$zip_code 			= NULL;
			$email_support 		= NULL;
			$status 			= NULL;
			$logo 				= NULL;

			$tenant_id		= $this->session->userdata('tenant_id');

			
			if($act=="Edit"){

				$detail_data = $this->M_admin_company->detail_data($id);
					
					$company_name		= $detail_data[0]['company_name'];
					$company_nickname	= $detail_data[0]['company_nickname'];
					$address			= $detail_data[0]['address'];
					$phone_no			= $detail_data[0]['phone_no'];
					$fax_no				= $detail_data[0]['fax_no'];
					$zip_code			= $detail_data[0]['zip_code'];
					$email_support		= $detail_data[0]['email_support'];
					$status				= $detail_data[0]['status'];
					$logo				= $detail_data[0]['logo']==NULL?NULL:base_url().'assets/backend/images/company_logo/'.$detail_data[0]['logo'];

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
				'company_name'		=> $company_name,
				'company_nickname'	=> $company_nickname,
				'address'			=> $address,
				'phone_no'			=> $phone_no,
				'fax_no'			=> $fax_no,
				'zip_code'			=> $zip_code,
				'email_support'		=> $email_support,
				'logo'				=> $logo,
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
			
			$company_name		= $this->input->post('company_name');
			$company_nickname	= $this->input->post('company_nickname');
			$address			= $this->input->post('address');
			$phone_no			= $this->input->post('phone_no');
			$fax_no				= $this->input->post('fax_no');
			$zip_code			= $this->input->post('zip_code');
			$email_support		= $this->input->post('email_support');
			$status 			= $this->input->post('status');

			$upd 	= $this->session->userdata('email');
			$lup 	= date('Y-m-d H:i:s');

			if($act=="Edit"){
				if ($_FILES["logo"]["name"] != "") {
					$config['upload_path'] = './assets/backend/images/company_logo/';
					$config['allowed_types'] = 'jpg|png';
					$config['encrypt_name'] = TRUE;

					$this->load->library('upload', $config);

					if($this->upload->do_upload('logo')){
						$file_img	= $this->upload->data('file_name');
						$upload_file = $this->M_admin_company->upload_img_company( $file_img ,$id );
					}
				}
				$submit = $this->M_admin_company->edit($id,$company_name,$company_nickname,$address,$phone_no,$fax_no,$zip_code,$email_support,$status,$upd,$lup);
			}else{
				$file_img ='';
				if ($_FILES["logo"]["name"] != "") {
					$config['upload_path'] = './assets/backend/images/company_logo/';
					$config['allowed_types'] = 'jpg|png';
					$config['encrypt_name'] = TRUE;

					$this->load->library('upload', $config);

					if($this->upload->do_upload('logo')){
						$file_img	= $this->upload->data('file_name');
					}
				}
				$submit = $this->M_admin_company->add($company_name,$company_nickname,$address,$phone_no,$fax_no,$zip_code,$email_support,$status,$upd,$lup,$file_img);
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


			$update_status 	= $this->M_admin_company->update_status($id,$status,$upd,$lup);

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

			$deleted_item = $this->M_admin_company->deleted_item($id,$status,$upd,$lup);

			echo json_encode($deleted_item);

		}else{
			exit();
		}
	}


}

/* End of file Admin_company.php */
/* Location: ./application/controllers/Admin_company.php */
