<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Applicant_list extends CI_Controller {

	function __construct()
    {
        parent::__construct();
		$this->load->library('drop_down');

		$this->load->model('M_applicant_list');
		$this->load->helper('file');
    }

	public function index(){

		if($this->session->userdata('is_logged_in') == true){

			$parent_page	=  $this->uri->segment(1);
			$page			=  $this->uri->segment(1);

			$thisclass		= $this->router->fetch_class();
			$thismethod		= $this->router->fetch_method();
				
			$this->load->library('page_render');
			
			$cats =  $this->M_applicant_list->sum_category();

			
			$data=array(
				'page_content' 				=> $page,
				'base_url'					=> base_url().$page,
				'base_url2'					=> base_url(),
				'page'						=> '0',
				"cats" 						=> $cats,
				"tenant_id"					=> $this->session->userdata('tenant_id')
			);

			$this->parser->parse('master/content', $data);

		}else{
			redirect('login');
		}
	}

	public function data($page=0)
	{
		if($this->session->userdata('is_logged_in') == true){

			$this->load->library('pagination');

			$thisclass		= $this->router->fetch_class();
			$thismethod		= $this->router->fetch_method();

			$length		= 10;
			$search		= $this->input->post('search');
			$categories	= $this->input->post('categories');
			$start		= ((int)$page-1)*$length;


			$data =  $this->M_applicant_list->list_data2($length,$start,$search,$categories);

			$config['base_url']				= "#$thisclass/page";
			$config['uri_segment']			= 3;
			$config['first_url']			= "#$thisclass/page/1";
			$config['attributes']['rel']	= FALSE;
			$config['use_page_numbers']		= TRUE;
			$config['total_rows']			= $data['total_data'];
			$config['per_page']				= $length;
			$config['attributes']			= array('class' => 'page-link');
			$config['full_tag_open']		= '<ul class="pagination">';
			$config['full_tag_close']		= '</ul>';
			$config['first_tag_open']		= '<li class="page-item">';
			$config['first_tag_close']		= '</li>';
			$config['num_tag_open']			= '<li class="page-item">';
			$config['num_tag_close']		= '</li>';
			$config['cur_tag_open']			= '<li class="page-item active"><a class="page-link" href="#" tabindex="-1">';
			$config['cur_tag_close']		= '</a></li>';
			$config['next_tag_open']		= '<li class="page-item">';
			$config['next_tag_close']		= '</li>';
			$config['prev_tag_open']		= '<li class="page-item">';
			$config['prev_tag_close']		= '</li>';
			$config['last_tag_open']		= '<li class="page-item">';
			$config['last_tag_close']		= '</li>';

			$this->pagination->initialize($config);
			$this->pagination->initialize($config);

			$data["paging"] 				=  $this->pagination->create_links();

			echo json_encode($data);

		}
	}

	

	public function page($page_number)
	{
		if($this->session->userdata('is_logged_in') == true){
			$parent_page	=  $this->uri->segment(1);
			$page			=  $this->uri->segment(1);

			$thisclass		= $this->router->fetch_class();
			$thismethod		= $this->router->fetch_method();
				
			$this->load->library('page_render');


			$cats =  $this->M_applicant_list->sum_category();
			
			$data=array(
				'page_content' 				=> $page,
				'base_url'					=> base_url().$page,
				'base_url2'					=> base_url(),
				'page'						=> $page_number,
				"cats" 						=> $cats,
				"tenant_id"					=> $this->session->userdata('tenant_id')
			);

			$this->parser->parse('master/content', $data);
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
			
			
			$data =  $this->M_applicant_list->list_data($length,$start,$search,$order,$dir,$column_name);
			
			$output=array();
			$output['draw']=$draw;
			$output['recordsTotal']=$output['recordsFiltered']=$data['total_data'];
			$output['data']=array();
			
			
			$nomor_urut=$start+1;
			setlocale(LC_ALL, 'id_ID');
			
			foreach ($data['data'] as $rows =>$row) {
				
				$id = $row['applicant_id'];


                $iconAction = "<a href='main#".$parent_page."/hiring_step/".base64_encode($this->encryption->encrypt('Hiring')).'/'.base64_encode($this->encryption->encrypt($id))."' class='btn btn-icon btn-primary btn-rounded mr-2 mb-2' data-toggle='tooltip' title='View Details' aria-expanded='false'>
			                    <i class='icmn-clipboard'></i>
			                  </a>
			                  <a onclick=del('".$id."') id=$id class='btn btn-icon btn-danger btn-rounded mr-2 mb-2' data-toggle='tooltip' title='Deleted' aria-expanded='false'>
			                    <i class='icmn-bin2'></i>
			                  </a>";

				$output['data'][]=array(
					$nomor_urut, 
					$row['fullname'],
					$row['email'],
					$row['company_name'], 
					$row['job_position'], 
					$row['job_category'], 
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

			$tenant_id		= $this->session->userdata('tenant_id');

			
			if($act=="Edit"){

				$detail_data = $this->M_applicant_list->detail_data($id);
					
					$company_name		= $detail_data[0]['company_name'];
					$company_nickname	= $detail_data[0]['company_nickname'];
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
				'company_name'		=> $company_name,
				'company_nickname'	=> $company_nickname,
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
				$submit = $this->M_applicant_list->edit($id,$company_name,$company_nickname,$address,$phone_no,$fax_no,$zip_code,$email_support,$status,$upd,$lup);
			}else{
				$submit = $this->M_applicant_list->add($company_name,$company_nickname,$address,$phone_no,$fax_no,$zip_code,$email_support,$status,$upd,$lup);
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


			$update_status 	= $this->M_applicant_list->update_status($id,$status,$upd,$lup);

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

			$deleted_item = $this->M_applicant_list->deleted_item($id,$status,$upd,$lup);

			echo json_encode($deleted_item);

		}else{
			exit();
		}
	}


	public function hiring_step(){

		if($this->session->userdata('is_logged_in') == true){
			
			$this->load->library('encryption');

			$parent_page	= $this->uri->segment(1);
			$page			= $this->uri->segment(2);
			$act			= $this->encryption->decrypt(base64_decode($this->uri->segment(3)));
			$id				= $this->encryption->decrypt(base64_decode($this->uri->segment(4)));


			$detail_data = $this->M_applicant_list->detail_data($id);

			$user_id = $this->session->userdata('id');

			$this->drop_down->select('id','fullname');
			$this->drop_down->from('m_admin');
			$this->drop_down->where("(status=Aktif)and(userlevel=sso)");
			$list_pic = $this->drop_down->build($user_id);	

			$this->load->library('drop_down');

			$data = array(
				'parent_page'		=> $parent_page,
				'page_content'		=> $page,
				'base_url'			=> base_url(),
				'fullname'			=> $this->session->userdata("fullname"),
				'act'				=> $act,
				'id'				=> $id,
				'list_pic'			=> $list_pic,
				'active_stages_id'	=> $detail_data[0]['active_stages_id'],
				'vacancy_status' 	=> $detail_data[0]['vacancy_status'],
				'vacancy_name' 		=> $detail_data[0]['vacancy_name']
			);

			$this->parser->parse('master/content', $data);

		}else{
			exit();
		}

	}

	public function create_job(){

		if($this->session->userdata('is_logged_in') == true){
			
			$this->load->library('encryption');

			$parent_page	= $this->uri->segment(1);
			$page			= $this->uri->segment(2);

			$this->load->library('drop_down');

			$this->drop_down->select('option_id','option_name');
			$this->drop_down->from('m_option');
			$this->drop_down->where('(option_type=job_level)');
			$list_job_level = $this->drop_down->build();

			$this->drop_down->select('id','name');
			$this->drop_down->from('m_opt_experience');
			$this->drop_down->where();
			$list_experience = $this->drop_down->build();
						
			$this->drop_down->select('id','name');
			$this->drop_down->from('m_opt_industri');
			$this->drop_down->where();
			$list_industri = $this->drop_down->build();			

			$this->drop_down->select('id','name');
			$this->drop_down->from('m_opt_stream');
			$this->drop_down->where();
			$list_stream = $this->drop_down->build();			

			$this->drop_down->select('id','name');
			$this->drop_down->from('m_opt_education');
			$this->drop_down->where();
			$list_education = $this->drop_down->build();			

			$this->drop_down->select('id','name');
			$this->drop_down->from('m_opt_employee_type');
			$this->drop_down->where();
			$list_employee_type = $this->drop_down->build();			

			$this->drop_down->select('id','name');
			$this->drop_down->from('m_opt_keterampilan');
			$this->drop_down->where();
			$list_keterampilan = $this->drop_down->build();

			$this->drop_down->select('id','company_name');
			$this->drop_down->from('m_tenant');
			$this->drop_down->where("(status=Aktif)");
			$list_tenant = $this->drop_down->build();		

			$this->drop_down->select('id','fullname');
			$this->drop_down->from('m_admin');
			$this->drop_down->where("(status=Aktif)and(userlevel=sso)");
			$list_pic = $this->drop_down->build();		


			$this->drop_down->select('id','vendor_name');
			$this->drop_down->from('m_vendor');
			$this->drop_down->where("(status=Aktif)");
			$list_vendor = $this->drop_down->build();


			$this->drop_down->select('id','name');
			$this->drop_down->from('m_vendor_details');
			$this->drop_down->where("(status=Aktif)");
			$list_vendor_details = $this->drop_down->build();

			$list_form_setting = $this->M_applicant_list->list_form_setting();
			$data_form_setting = array();

			foreach ($list_form_setting as $key => $value) {
				$data_form_setting[$value['table_type']][$value['table_name']][] = array(
										'table_type' => $value['table_type'],
										'table_name' => $value['table_name'],
										'field_name' => $value['field_name'],
										'field_type' => $value['field_type'],
										'field_type_ref' => $value['field_type_ref'],
										'field_label' => $value['field_label'],
										'field_status' => $value['field_status'],
										'tab_name' => $value['tab_name'],
										'tab_field_sort' => $value['tab_field_sort']
									);
				
				
			}



			$data = array(
				'parent_page'		=> $parent_page,
				'page_content'		=> $page,
				'base_url'			=> base_url(),
				'list_experience' 	=> $list_experience,
				'list_industri' 	=> $list_industri,
				'list_stream' 		=> $list_stream,
				'list_education' 	=> $list_education,
				'list_employee_type'=> $list_employee_type,
				'list_keterampilan' => $list_keterampilan,
				'list_tenant' 		=> $list_tenant,
				'list_job_level' 	=> $list_job_level,
				'list_pic' 			=> $list_pic,
				'list_vendor' 		=> $list_vendor,
				'list_vendor_details' => $list_vendor_details,
				'data_form_setting' => json_encode($data_form_setting)

			);

			$this->parser->parse('master/content', $data);

		}else{
			exit();
		}

	}

	public function get_form_setting(){
		// foreach ($list_form_setting as $key => $value) {
		// 	$data_form_setting[$value['table_type']]['key'][] = array( $value['table_name'] => array(
		// 							'table_type' => $value['table_type'],
		// 							'table_name' => $value['table_name'],
		// 							'field_name' => $value['field_name'],
		// 							'field_type' => $value['field_type'],
		// 							'field_type_ref' => $value['field_type_ref'],
		// 							'field_label' => $value['field_label'],
		// 							'field_status' => $value['field_status'],
		// 							'tab_name' => $value['tab_name'],
		// 							'tab_field_sort' => $value['tab_field_sort']
		// 						));
		// }
		// print_r($data_form_setting);
		// $data_form_setting = array();
		$list_form_setting = $this->M_applicant_list->list_form_setting();
		echo json_encode($list_form_setting);
	}


	public function get_option(){

		if($this->session->userdata('is_logged_in')){

			$page			= $this->uri->segment(1);
			$q				= $this->input->post('q');
			$vendor_id 		= $this->input->post('vendor_id');
			$table			= $this->input->post('table');

			$data = array();

		$data = $this->M_applicant_list->get_option($q,$table,$vendor_id);

		if(is_array($data['resource'])){
			foreach($data['resource'] as $key  ){
				if($q!=NULL){
					if (stripos($key['name'], $q) !== false) {
					    $result[] =  array('id' => $key['id'], 'text'=> $key['name'] );
					}
				}else{
						$result[] =  array('id' => $key['id'], 'text'=> $key['name'] );
				}
			}
		}else{
			$result = array();
		}

		echo json_encode($result);

			
		}else{
			exit();
		}
	}


	public function get_stage(){
		$vacancy_id = $this->input->post('vacancy_id');
		$get_stage = $this->M_applicant_list->get_stage($vacancy_id);
		echo json_encode($get_stage);
		// echo $vacancy_id;

	}
	
	public function get_applicant()
	{

		$id 				= $this->input->post('id');
		$get_applicant 		= $this->M_applicant_list->get_applicant( $id );

		echo json_encode($get_applicant);
	}	

	public function get_applicants()
	{

		$vacancy_id 		= $this->input->post('vacancy_id');
		$stage_id 			= $this->input->post('stage_id');
		$status_applicant 	= $this->input->post('status_applicant');
		$get_applicants 	= $this->M_applicant_list->get_applicants( $vacancy_id , $stage_id , $status_applicant );

		echo json_encode($get_applicants);
	}


	public function get_comments()
	{

		$stage_id 			= $this->input->post('stage_id');
		$applicant_id 		= $this->input->post('pelamar_id');
		$get_applicant 		= $this->M_applicant_list->get_comment( $stage_id,$applicant_id );

		echo json_encode($get_applicant);
	}	

	public function send_comments()
	{

		$stage_id 			= $this->input->post('stage_id');
		$applicant_id 		= $this->input->post('pelamar_id');
		$content 			= $this->input->post('content');
		$email	 			= $this->session->userdata('email');
		$data 				= $this->M_applicant_list->send_comments( $stage_id,$applicant_id,$content,$email );

		echo json_encode($data);
	}	


	public function ch_qualification()
	{

		$changeto 		= $this->input->post('changeto');
		$pelamar_id 	= $this->input->post('pelamar_id');
		$stage_id 		= $this->input->post('stage_id');
		$upd			= $this->session->userdata('email');
		$lup			= date('Y-m-d H:i:s');

		$ch_data		= $this->M_applicant_list->ch_qualification( $pelamar_id , $stage_id , $changeto, $upd, $lup);

		echo json_encode($ch_data);
	}

	public function ch_stage()
	{

		$changeto 		= $this->input->post('changeto');
		$pelamar_id 	= $this->input->post('pelamar_id');
		$stage_id 		= $this->input->post('stage_id');
		$upd			= $this->session->userdata('email');
		$lup			= date('Y-m-d H:i:s');

		$ch_data		= $this->M_applicant_list->ch_stage( $pelamar_id , $stage_id , $changeto, $upd, $lup);

		echo json_encode($ch_data);
	}


	public function search_applicant(){
		$applicant_email = $this->input->post('applicant_email');
		$search_applicant = $this->M_applicant_list->search_applicant( $applicant_email );

		echo json_encode($search_applicant);
	}


	// Vacancy OLD
	// public function submit_vacancy(){

	// 	// Job Details
	// 	$data_vacancy = array(
	// 		'vacancy_status' => "published",
	// 		'vacancy_name' => $this->input->post('job_title'),
	// 		'tenant_id' => $this->input->post('tenant_id'),
	// 		'departement' => $this->input->post('departement'),
	// 		'total_job_available' => $this->input->post('total_job_available'),
	// 		'job_level' => $this->input->post('job_level'),
	// 		'user_id' => $this->input->post('user_id'),
	// 		'job_code' => $this->input->post('job_code'),
	// 		'country' => $this->input->post('country'), 
	// 		'state_region' => $this->input->post('state_region'), 
	// 		'city' => $this->input->post('city'), 
	// 		'currency' => $this->input->post('currency'),
	// 		'show_salary' => $this->input->post('show_salary'),
	// 		'maximum_salary' => $this->input->post('maximum_salary'),
	// 		'minimum_salary' => $this->input->post('minimum_salary'),
	// 		'job_description' => $this->input->post('job_description'), 
	// 		'job_requirements' => $this->input->post('job_requirements'),
	// 		'experience_id' => $this->input->post('experience'),
	// 		'industry_id' => $this->input->post('industry'),
	// 		'stream_id' => $this->input->post('stream'), 
	// 		'education_id' => $this->input->post('education'), 
	// 		'employeement_type' => $this->input->post('employeement_type'), 
	// 		'skill_requirement' => json_encode($this->input->post('skill_requirement')),
	// 		'auto_close_job' => $this->input->post('auto_close_job'),
	// 		'job_date' => $this->input->post('job_date'),
	// 		'job_time' => $this->input->post('job_time'),
	// 		'created' => $this->session->userdata('email'),
	// 		'create_at' => date('Y-m-d H:i:s')
	// 	);


	// 	// STAGE 
	// 	$data_stage = json_decode($this->input->post('data_stage') , TRUE );
	// 	$data_stage_sort = json_decode($this->input->post('data_stage_sort') , TRUE );

	// 	// SET FORM

	// 	$data_vacancy_form = $this->input->post('setform');
	// 	$data_vacancy_form = json_encode($data_vacancy_form);
	// 	$data_vacancy_form = array('form_value' => $data_vacancy_form);

	// 	$data_vacancy_stage = array();


	// 	if (is_array($data_stage)) {

 // 			$stage_name = ['SOURCED','APPLIED'];
	// 		for ($i=0; $i < 2 ; $i++) { 
	// 			array_push($data_vacancy_stage, array(
	// 				'stage_id' => "stage".$i+1,
	// 				'stage_name' => $stage_name[$i],
	// 				'vendor_id' => NULL,
	// 				'vendor_details_id' => NULL,
	// 				'sortable' => $i+1 
	// 			));
	// 		}

	// 		$last_sortable = 0;
	// 		foreach ($data_stage as $key => $value) {
	// 	 		foreach ($data_stage_sort as $key2 => $value2) {

	// 	 			if ($value['stage_id'] == $value2['stage_id']) {
	// 		 			array_push($data_vacancy_stage,  array(
	// 	 					'stage_id' => $value['stage_id'],
	// 	 					'stage_name' => $value['stage_name'],
	// 	 					'vendor_id' => $value['vendor_id'],
	// 	 					'vendor_details_id' => $value['vendor_details_id'],
	// 	 					'sortable' => $value2['sortable'],
	// 		 			));
	// 		 			if ($last_sortable < $value2['sortable'] ) {
	// 		 			 	$last_sortable = $value2['sortable'];
	// 		 			 } 
	// 	 			}
		 			
	// 	 		}
	// 		} 

 // 			array_push($data_vacancy_stage, array(
	// 			'stage_id' => "stage".$last_sortable+1,
	// 			'stage_name' => 'HIRED',
	// 			'vendor_id' => NULL,
	// 			'vendor_details_id' => NULL,
	// 			'sortable' => $last_sortable+1 
	// 		));
	// 	}



	// 	$result = $this->M_applicant_list->add( $data_vacancy , $data_vacancy_stage , $data_vacancy_form );


	// 	// print_r( $data_vacancy_stage );
	// 	// print_r( $data_vacancy_form );
	// 	// echo json_encode($data_vacancy_form);

	// 	echo json_encode($result);

	// 	// print_r( $data_stage );
		
	// }
	public function submit_vacancy(){

		// Job Details
		$data_vacancy = array(
			'vacancy_status' =>  $this->input->post('save_type'),
			'vacancy_name' => $this->input->post('job_title'),
			'tenant_id' => $this->input->post('tenant_id'),
			'departement' => $this->input->post('departement'),
			'total_job_available' => $this->input->post('total_job_available'),
			'job_level' => $this->input->post('job_level'),
			'user_id' => $this->input->post('user_id'),
			'job_code' => $this->input->post('job_code'),
			'country' => $this->input->post('country'), 
			'state_region' => $this->input->post('state_region'), 
			'city' => $this->input->post('city'), 
			'currency' => $this->input->post('currency'),
			'show_salary' => $this->input->post('show_salary'),
			'maximum_salary' => $this->input->post('maximum_salary'),
			'minimum_salary' => $this->input->post('minimum_salary'),
			'job_description' => $this->input->post('job_description'), 
			'job_requirements' => $this->input->post('job_requirements'),
			'experience_id' => $this->input->post('experience'),
			'industry_id' => $this->input->post('industry'),
			'stream_id' => $this->input->post('stream'), 
			'education_id' => $this->input->post('education'), 
			'employeement_type' => $this->input->post('employeement_type'), 
			'skill_requirement' => json_encode($this->input->post('skill_requirement')),
			'auto_close_job' => $this->input->post('auto_close_job'),
			'job_date' => $this->input->post('job_date'),
			'job_time' => $this->input->post('job_time'),
			'created' => $this->session->userdata('email'),
			'create_at' => date('Y-m-d H:i:s')
		);


		// STAGE 
		$data_stage = json_decode($this->input->post('data_stage') , TRUE );
		$data_stage_sort = json_decode($this->input->post('data_stage_sort') , TRUE );

		// SET FORM

		$data_vacancy_form = $this->input->post('setform');
		$data_vacancy_form = json_encode($data_vacancy_form);
		$data_vacancy_form = array('form_value' => $data_vacancy_form);

		$data_vacancy_stage = array();


		if (is_array($data_stage)) {

 			$stage_name = ['SOURCED','APPLIED'];
			for ($i=0; $i < 2 ; $i++) { 
				$x = $i + 1;
				array_push($data_vacancy_stage, array(
					'stage_id' => "stage".$x,
					'stage_name' => $stage_name[$i],
					'vendor_id' => NULL,
					'vendor_details_id' => NULL,
					'sortable' => $x 
				));
			}

			$last_sortable = 0;
			foreach ($data_stage as $key => $value) {
		 		foreach ($data_stage_sort as $key2 => $value2) {

		 			if ($value['stage_id'] == $value2['stage_id']) {
			 			array_push($data_vacancy_stage,  array(
		 					'stage_id' => $value['stage_id'],
		 					'stage_name' => $value['stage_name'],
		 					'vendor_id' => $value['vendor_id'],
		 					'vendor_details_id' => $value['vendor_details_id'],
		 					'sortable' => $value2['sortable'],
			 			));
			 			if ($last_sortable < $value2['sortable'] ) {
			 			 	$last_sortable = $value2['sortable'];
			 			 } 
		 			}
		 			
		 		}
			} 
			$last_sortable2 = $last_sortable + 1;
 			array_push($data_vacancy_stage, array(
				'stage_id' => "stage".$last_sortable2,
				'stage_name' => 'HIRED',
				'vendor_id' => NULL,
				'vendor_details_id' => NULL,
				'sortable' => $last_sortable2 
			));
		}



		$result = $this->M_applicant_list->add( $data_vacancy , $data_vacancy_stage , $data_vacancy_form );


		// print_r( $data_vacancy_stage );
		// print_r( $data_vacancy_form );
		// echo json_encode($data_vacancy_form);

		echo json_encode($result);

		// print_r( $data_stage );
		
	}

	public function send_invitation(){
		$pelamar_id = $this->input->post('id_invitation');
		$email = $this->input->post('email_invitation');
		$fullname = $this->input->post('fullname_invitation');
		$vacancy_id = $this->input->post('vacancy_id');
		$base_url = base_url();
		$upd = $this->session->userdata('email');

		// echo $email." ".$vacancy_id; 
		$data = $this->M_applicant_list->check_email( $email, $pelamar_id, $fullname,  $vacancy_id , $base_url , $upd );
		echo json_encode($data);
	}


	public function send_schedule(){

		$pelamar_id = $this->input->post('id_schedule');
		$fullname = $this->input->post('name_schedule');
		$email = $this->input->post('email_schedule');
		$stage_id = $this->input->post('stage_id_schedule');
		$stage_name = $this->input->post('stage_name_schedule');
		$vacancy_id = $this->input->post('vacancy_id_schedule');
		$vacancy_name = $this->input->post('vacancy_name_schedule');
		$date = $this->input->post('date_schedule');
		$start_time = $this->input->post('start_time');
		$end_time = $this->input->post('end_time');
		$location = $this->input->post('place_schedule');
		$notes = $this->input->post('notes_schedule');
		$base_url = base_url();
		$upd = $this->session->userdata('email');

		// $data= array(
		// 			'email' => $email,
		// 			'pelamar_id' => $pelamar_id,
		// 			'stage_id' => $stage_id,
		// 			'stage_name' => $stage_name,
		// 			'vacancy_id' => $vacancy_id,
		// 			'date' => $date,
		// 			'start_time' => $start_time,
		// 			'end_time' => $end_time,
		// 			'location' => $location,
		// 			'notes' => $notes,
		// 			'base_url' => $base_url,
		// 			'upd' => $upd
		// );

		// print_r($data);
		// echo $email." ".$vacancy_id; 

		$data = $this->M_applicant_list->send_mail_stage( $pelamar_id, $fullname, $email, $stage_id, $stage_name, $vacancy_id, $vacancy_name, $date, $start_time, $end_time, $location, $notes, $base_url, $upd );


		echo json_encode($data);
	}
}

/* End of file Company_configuration.php */
/* Location: ./application/controllers/Company_configuration.php */
