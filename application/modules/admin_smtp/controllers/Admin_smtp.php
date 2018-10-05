<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_smtp extends CI_Controller {

	function __construct()
    {
        parent::__construct();
		$this->load->model('M_admin_smtp');
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
			
			
			$data =  $this->M_admin_smtp->list_data($length,$start,$search,$order,$dir,$column_name);
			
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
					$row['mail_name'], 
					$row['email'],
					$row['protocol'],
					$row['smtp_host'],
					$row['smtp_port'],
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

			$mail_name 		= NULL;
			$email 			= NULL;
			$protocol 		= NULL;
			$smtp_host 		= NULL;
			$smtp_port 		= NULL;
			$smtp_from 		= NULL;
			$smtp_fromname 	= NULL;
			$status 		= NULL;

			$tenant_id		= $this->session->userdata('tenant_id');

			
			if($act=="Edit"){

				$detail_data = $this->M_admin_smtp->detail_data($id);
					
					$mail_name		= $detail_data[0]['mail_name'];
					$email			= $detail_data[0]['email'];
					$protocol		= $detail_data[0]['protocol'];
					$smtp_host		= $detail_data[0]['smtp_host'];
					$smtp_port		= $detail_data[0]['smtp_port'];
					$smtp_from		= $detail_data[0]['smtp_from'];
					$smtp_fromname	= $detail_data[0]['smtp_fromname'];
					$status			= $detail_data[0]['status'];
					$tenant_id		= $this->session->userdata('tenant_id');

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
				'mail_name'			=> $mail_name,
				'email'				=> $email,
				'protocol'			=> $protocol,
				'smtp_host'			=> $smtp_host,
				'smtp_from'			=> $smtp_from,
				'smtp_fromname'		=> $smtp_fromname,
				'list_status' 		=> $list_status
			);

			$this->parser->parse('master/content', $data);

		}else{
			exit();
		}

	}


	// public function forms_submit(){

	// 	if($this->session->userdata('is_logged_in') == true){

	// 		$act 		= $this->input->post('act');
	// 		$id 		= $this->input->post('id');
	// 		$tenant_id	= $this->input->post('tenant_id');
			
	// 		$username		= $this->input->post('username');
	// 		$password		= $this->input->post('password');
	// 		$mail_type		= $this->input->post('mail_type');
	// 		$host			= $this->input->post('host');
	// 		$auth			= $this->input->post('auth');
	// 		$port			= $this->input->post('port');
	// 		$set_from_name	= $this->input->post('set_from_name');
	// 		$set_from_mail	= $this->input->post('set_from_mail');
	// 		$set_replyto_name	= $this->input->post('set_replyto_name');
	// 		$set_replyto_mail	= $this->input->post('set_replyto_mail');
	// 		$status 		= $this->input->post('status');

	// 		$upd 	= $this->session->userdata('userid');
	// 		$lup 	= date('Y-m-d H:i:s');

	// 		$this->load->model('m_admin_mail_config');

	// 		if($act=="Edit"){

	// 				$submit = $this->m_admin_mail_config->edit($act,$id,$username,$password,$mail_type,$host,$auth,$port,$set_from_name,$set_from_mail,$set_replyto_name,$set_replyto_mail,$status,$upd,$lup,$tenant_id);

	// 				if($submit['status']){
	// 					$statusResp=true;
	// 					$reason="Update Data Successfully...!";
	// 				}else{
	// 					$statusResp="fail";
	// 					$reason= $submit['reason'];
	// 				}

	// 		}else{
				
	// 				$submit = $this->m_admin_mail_config->add($username,$password,$mail_type,$host,$auth,$port,$set_from_name,$set_from_mail,$set_replyto_name,$set_replyto_mail,$status,$upd,$lup,$tenant_id);
					
	// 				if($submit['status']){
	// 					$statusResp=true;
	// 					$reason="Add Data Successfully...!";
	// 				}else{
	// 					$statusResp="fail";
	// 					$reason= $submit['reason'];
	// 				}					
	// 		}

	// 		echo json_encode(array("status"=>$statusResp, "reason"=>$reason));

	// 	}else{
	// 		exit();
	// 	}

	// }

	// public function change_status(){

	// 	if($this->session->userdata('is_logged_in') == true){

	// 		$id 	= $this->input->post('id');
	// 		$status = $this->input->post('status');
	// 		$upd 	= $this->session->userdata('userid');
	// 		$lup 	= date('Y-m-d H:i:s');

	// 		$this->load->model('m_admin_mail_config');

	// 		$update_status 	= $this->m_admin_mail_config->update_status($id,$status,$upd,$lup);

	// 		echo json_encode($update_status);

	// 	}else{
	// 		exit();
	// 	}

	// }

	// public function del_item(){

	// 	if($this->session->userdata('is_logged_in') == true){

	// 		$id 	= $this->input->post('id');
	// 		$status = $this->input->post('status');
	// 		$upd 	= $this->session->userdata('userid');
	// 		$lup 	= date('Y-m-d H:i:s');

	// 		$this->load->model('m_admin_mail_config');

	// 		$deleted_item = $this->m_admin_mail_config->deleted_item($id,$status,$upd,$lup);

	// 		echo json_encode($deleted_item);

	// 	}else{
	// 		exit();
	// 	}
	// }


}

/* End of file Admin_escalation_config.php */
/* Location: ./application/controllers/Admin_escalation_config.php */
