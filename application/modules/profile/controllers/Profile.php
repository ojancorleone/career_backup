<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

	function __construct()
    {
        parent::__construct();
		$this->load->model('M_profile');
		if($this->session->userdata('is_logged_in') == false){
			redirect(base_url()."home");
		}
    }

	public function index(){
			$parent_page	=  $this->uri->segment(1);
			$page			=  $this->uri->segment(1);

			$this->load->library('page_render');
			
			
			$id 		= $this->session->userdata('id');
			$userlevel 	= $this->session->userdata('userlevel');
			$tenant_id 	= $this->session->userdata('tenant_id');

			$image_url = "";
			$detail_profile = $this->M_profile->detail_profile( $id , $userlevel );

			if ($detail_profile['foto'] != "" ) {
				$path_ext  = $userlevel=="pelamar"?"applicant/":"internal/".$tenant_id;
				$image_url = base_url().'assets/backend/images/profile/'.$path_ext.'/'.$detail_profile['email'].'/'.$detail_profile['foto'];
			}else{
				$image_url = base_url().'assets/backend/modules/dummy-assets/common/img/avatars/1.jpg';
			}

			$data = array(
				"fullname"		=> $detail_profile['fullname'],
				"email"			=> $detail_profile['email'],
				"phone"			=> $detail_profile['phone'],
				"userlevel"		=> $detail_profile['userlevel'],
				"foto"			=> $detail_profile['foto']
			);
				
			$this->session->set_userdata($data);

			$data['page_content'] 	= $page;
			$data['base_url'] 		= base_url();
			$data['tenant_id'] 		= $tenant_id;
			$data['image_url'] 		= $image_url;



			$this->parser->parse('master/content', $data);

	}

	public function form_update(){
		
		$fullname 	= $this->input->post('fullname');
		$email 		= $this->input->post('email');
		$phone 		= $this->input->post('phone');

		$userlevel 	= $this->session->userdata('userlevel');
		$id 	 	= $this->session->userdata('id');

		$tenant_id 		= $this->session->userdata('tenant_id');
		$upd			= $this->session->userdata('email');
		$lup			= date("Y-m-d H:i:s");

		$tenant_id=$userlevel=="pelamar"?"applicant/":"internal/".$tenant_id;

		$path 	= str_replace('\\','/', APPPATH)."";
		$path 	= str_replace('application','assets/backend/images/profile',$path);
		$kode_tenant_id = $tenant_id.'/';
		$kode_upd 		= $upd.'/';
			
		!is_dir($path.$kode_tenant_id.$kode_upd)?mkdir($path.$kode_tenant_id.$kode_upd,0777,TRUE):'';

		$final_path = $path.$kode_tenant_id.$kode_upd;

		$config['upload_path'] = $final_path;
		$config['allowed_types'] = 'jpg|png';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload', $config);

		if($this->upload->do_upload('img_profile')){
			$file_img	= $this->upload->data('file_name');
			$upload_file = $this->M_profile->upload_img_profile($file_img);
		}

		$result		= $this->M_profile->form_update( $fullname, $email, $phone , $userlevel , $id);
		echo json_encode($result);

	}


	public function change_password(){

		$userlevel 	= $this->session->userdata('userlevel');
		$email 	= $this->session->userdata('email');
		$id 	= $this->session->userdata('id');

		$current_password = $this->input->post('current_password');
		$new_password = $this->input->post('new_password');


		$check_current_password = $this->M_profile->check_password( $email, $current_password );
		// print_r($check_current_password);
		// exit();
		if ($check_current_password) {
			$change_password = $this->M_profile->change_password( $id, $email , $new_password , $userlevel );
		}else{
			$change_password = array("status" => "failed" , "reason" => "Failed, Check your current password" );
		}
			echo json_encode($change_password);
	}





}

/* End of file Profile.php */
/* Location: ./application/controllers/dashboard.php */
