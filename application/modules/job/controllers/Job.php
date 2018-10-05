<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Job extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->library('encryption');
       	$this->load->model('M_job');
       	$this->load->model('master/Master_setting');
       	$this->is_login = $this->session->userdata('is_logged_in')==TRUE?1:0;
		$result = $this->Master_setting->SetSettings();
			$this->data = array(
				'base_url'					=> base_url(),
				'title' 					=> $result['title'],
				'favicon' 					=> $result['favicon'],
				'logo_full'	 				=> $result['logo_full'],
				'logo' 						=> $result['logo'],
				'login_image' 				=> $result['login_image'],
				'footer' 					=> $result['footer'],
				'copyright' 				=> $result['copyright'],
				'is_login'					=> $this->is_login
			);

			
    }
	
	public function index(){
		$data = array( 'title_page' => 'Job' );
		$this->parser->parse('job', array_merge( $this->data , $data) );
	}

	public function detail(){

		$parent_page	= $this->uri->segment(1);
		$page			= $this->uri->segment(2);
		$vacancy_id		= $this->encryption->decrypt(base64_decode($this->uri->segment(3)));
		$pelamar_id		= $this->encryption->decrypt(base64_decode($this->uri->segment(4)));
		$source			= $this->encryption->decrypt(base64_decode($this->uri->segment(5)));
		
		if ($vacancy_id != "") {
			$button_apply	= $source=="invitation"?"1":"0";
			$job_detail 	= $this->M_job->detail_data($vacancy_id);
			$data_job_detail = array(
  				'vacancy_id' => $job_detail['vacancy_id'],
  				'active_stages_id' => $job_detail['active_stages_id'],
  				'vacancy_status' => $job_detail['vacancy_status'],
  				'vacancy_name' => $job_detail['vacancy_name'],
  				'departement' => $job_detail['departement'],
  				'total_job_available' => $job_detail['total_job_available'],
  				'country' => $job_detail['country'],
  				'state_region' => $job_detail['state_region'],
  				'city' => $job_detail['city'],
  				'tenant_id' => $job_detail['tenant_id'],
  				'job_description' => $job_detail['job_description'],
  				'job_requirements' => $job_detail['job_requirements'],
  				'final_status' => $job_detail['final_status'],
  				'job_level' => $job_detail['job_level'],
  				'pic_id' => $job_detail['pic_id'],
  				'pic_name' => $job_detail['pic_name'],
  				'minimum_salary' => $job_detail['minimum_salary'],
  				'maximum_salary' => $job_detail['maximum_salary'],
  				'experience_id' => $job_detail['experience_id'],
  				'industry_id' => $job_detail['industry_id'],
  				'stream_id' => $job_detail['stream_id'],
  				'education_id' => $job_detail['education_id'],
  				'employeement_type' => $job_detail['employeement_type'],
  				'experience_name' => $job_detail['experience_name'],
  				'industry_name' => $job_detail['industry_name'],
  				'stream_name' => $job_detail['stream_name'],
  				'education_name' => $job_detail['education_name'],
  				'employeement_name' => $job_detail['employeement_name'],
  				'skill_requirement' => $job_detail['skill_requirement'],
  				'company_name' => $job_detail['company_name'],
  				'company_logo' => $job_detail['company_logo'],
  				'address' => $job_detail['address'],
  				'phone_no' => $job_detail['phone_no'],
  				'fax_no' => $job_detail['fax_no'],
  				'zip_code' => $job_detail['zip_code'],
  				'email_support' => $job_detail['email_support']
			);

			$data = array(
					'title_page' 	=> 'Job Detail',
					'parent_page' 	=> $parent_page,
					'page' 			=> $page,
					'vacancy_id' 	=> $vacancy_id,
					'button_apply'  => $button_apply
			);
			$this->parser->parse('job_detail', array_merge( $this->data , $data , $data_job_detail) );
		}else{
			$data = array(
					'title_page' 	=> 'Job Not Found',

			);
			$this->parser->parse('job_not_found',array_merge( $this->data , $data));
		}
	}

	public function apply( $id=NULL, $vacancy_id=NULL ){

		if ($this->input->post('t0ke3n') == "Sh4r3dv1s") {

			$pelamar_id = $this->input->post('pelamar_id');
			$vacancy_id = $this->input->post('vacancy_id');
			$email 		= $this->input->post('email');

			$cek_invitation = $this->M_job->check_invitation( $email, $vacancy_id );
			if ( $cek_invitation['status'] ) {
				$data_trn01applicant = array(
											'pelamar_id' => $pelamar_id, 
											'm_vacancy_id' => $vacancy_id, 
											'known_from' => 'invitation', 
											'invite_at' => date('Y-m-d H:i:s'),
											'create_at' => date('Y-m-d H:i:s')
										);
				$log_invitation_id = $cek_invitation['log_invitation_id'];

				$insert_trn_applicant = $this->M_job->insert_trn_applicant( $data_trn01applicant, $vacancy_id, $pelamar_id ,$log_invitation_id );

				if ( $insert_trn_applicant ) {
					if($this->session->userdata('is_logged_in') == true){
						redirect("main#application");
						# code...
					}else{
						redirect("home?vid=".base64_encode($this->encryption->encrypt($vacancy_id))."&act=applied");
					}
				}else{
					redirect('home');
				}
			}else{
				if($this->session->userdata('is_logged_in') == true){
					redirect("main#application");
					# code...
				}else{
					redirect("home?vid=".base64_encode($this->encryption->encrypt($vacancy_id))."&act=applied");
				}
			}
			

		}else{
			redirect('home');
		}
		
	}




}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
