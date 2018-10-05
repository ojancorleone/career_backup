<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_applicant extends CI_Controller {

	function __construct()
    {
        parent::__construct();
		$this->load->model('M_admin_applicant');
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
			
			$data =  $this->M_admin_applicant->list_data($length,$start,$search,$order,$dir,$column_name);
			
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
					$row['agama'],
					$row['jenis_kelamin'],
					$row['phone'],
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

			$email 			= NULL;
			$no_ktp 		= NULL;
			$fullname 		= NULL;
			$userlevel 		= NULL;
			$nama_panggilan = NULL;
			$jenis_kelamin 	= NULL;
			$alamat_domisili= NULL;
			$kota_domisili 	= NULL;
			$alamat_ktp 	= NULL;
			$agama 			= NULL;
			$tempat_lahir 	= NULL;
			$tgl_lahir 		= NULL;
			$no_npwp 		= NULL;
			$no_jamsostek 	= NULL;
			$kode_pos 		= NULL;
			$phone 			= NULL;
			$status_menikah = NULL;
			$kewarganegaraan= NULL;
			$status 		= NULL;

			
			if($act=="Edit"){

				$detail_data = $this->M_admin_applicant->detail_data($id);

					$email 			= $detail_data[0]['email'];
					$no_ktp 		= $detail_data[0]['no_ktp'];
					$fullname 		= $detail_data[0]['fullname'];
					$userlevel 		= $detail_data[0]['userlevel'];
					$nama_panggilan = $detail_data[0]['nama_panggilan'];
					$jenis_kelamin 	= $detail_data[0]['jenis_kelamin'];
					$alamat_domisili= $detail_data[0]['alamat_domisili'];
					$kota_domisili 	= $detail_data[0]['kota_domisili'];
					$alamat_ktp 	= $detail_data[0]['alamat_ktp'];
					$agama 			= $detail_data[0]['agama'];
					$tempat_lahir 	= $detail_data[0]['tempat_lahir'];
					$tgl_lahir 		= $detail_data[0]['tgl_lahir'];
					$no_npwp 		= $detail_data[0]['no_npwp'];
					$no_jamsostek 	= $detail_data[0]['no_jamsostek'];
					$kode_pos 		= $detail_data[0]['kode_pos'];
					$phone 			= $detail_data[0]['phone'];
					$status_menikah = $detail_data[0]['status_menikah'];
					$kewarganegaraan= $detail_data[0]['kewarganegaraan'];
					$status 		= $detail_data[0]['status'];

			}

			$this->drop_down->select('option_id','option_name');
			$this->drop_down->from('m_option');
			$this->drop_down->where('(option_type=status)');
			$list_status = $this->drop_down->build($status);

			$this->drop_down->select('option_id','option_name');
			$this->drop_down->from('m_option');
			$this->drop_down->where('(option_type=agama)');
			$list_agama = $this->drop_down->build($agama);			

			$this->drop_down->select('option_id','option_name');
			$this->drop_down->from('m_option');
			$this->drop_down->where('(option_type=jenis_kelamin)');
			$list_jenis_kelamin = $this->drop_down->build($jenis_kelamin);


			$data = array(
				'page'				=> $parent_page,
				'page_content'		=> $parent_page.'_'.$page,
				'base_url'			=> base_url(),
				'act'				=> $act,
				'id'				=> $id,
				'email' 			=> $email,
				'no_ktp' 			=> $no_ktp,
				'fullname' 			=> $fullname,
				'userlevel' 		=> $userlevel,
				'nama_panggilan'	=> $nama_panggilan,
				'jenis_kelamin' 	=> $jenis_kelamin,
				'alamat_domisili'	=> $alamat_domisili,
				'kota_domisili' 	=> $kota_domisili,
				'alamat_ktp' 		=> $alamat_ktp,
				'agama' 			=> $agama,
				'tempat_lahir' 		=> $tempat_lahir,
				'tgl_lahir' 		=> $tgl_lahir,
				'no_npwp' 			=> $no_npwp,
				'no_jamsostek' 		=> $no_jamsostek,
				'kode_pos' 			=> $kode_pos,
				'phone' 			=> $phone,
				'status_menikah' 	=> $status_menikah,
				'kewarganegaraan'	=> $kewarganegaraan,
				'list_status' 		=> $list_status,
				'list_agama' 		=> $list_agama,
				'list_jenis_kelamin'=> $list_jenis_kelamin
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

			$email 				= $this->input->post('email');
			$no_ktp 			= $this->input->post('no_ktp');
			$fullname 			= $this->input->post('fullname');
			$userlevel 			= $this->input->post('userlevel');
			$nama_panggilan		= $this->input->post('nama_panggilan');
			$jenis_kelamin 		= $this->input->post('jenis_kelamin');
			$alamat_domisili	= $this->input->post('alamat_domisili');
			$kota_domisili 		= $this->input->post('kota_domisili');
			$alamat_ktp 		= $this->input->post('alamat_ktp');
			$agama 				= $this->input->post('agama');
			$tempat_lahir 		= $this->input->post('tempat_lahir');
			$tgl_lahir 			= $this->input->post('tgl_lahir');
			$no_npwp 			= $this->input->post('no_npwp');
			$no_jamsostek 		= $this->input->post('no_jamsostek');
			$kode_pos 			= $this->input->post('kode_pos');
			$phone 				= $this->input->post('phone');
			$status_menikah 	= $this->input->post('status_menikah');
			$kewarganegaraan	= $this->input->post('kewarganegaraan');
			$password			= $this->input->post('password');
			$status				= $this->input->post('status');

			$upd 	= $this->session->userdata('email');
			$lup 	= date('Y-m-d H:i:s');

			if($act=="Edit"){
				$submit = $this->M_admin_applicant->edit($id,$fullname,$email,$phone,$agama,$jenis_kelamin,$status,$upd,$lup);
			}else{
				$submit = $this->M_admin_applicant->add($fullname,$email,$phone,$agama,$jenis_kelamin,$status,$password,$upd,$lup);
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


			$update_status 	= $this->M_admin_applicant->update_status($id,$status,$upd,$lup);

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

			$deleted_item = $this->M_admin_applicant->deleted_item($id,$status,$upd,$lup);

			echo json_encode($deleted_item);

		}else{
			exit();
		}
	}


}

/* End of file admin_applicant.php */
/* Location: ./application/controllers/admin_applicant.php */
