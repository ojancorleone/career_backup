<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Job_request extends CI_Controller {

	function __construct()
    {
        parent::__construct();
		$this->load->library('drop_down');
		$this->load->model('M_job_request');
		$this->load->library('encryption');
    }

	public function index(){

		if($this->session->userdata('is_logged_in') == true){

			$parent_page	=  $this->uri->segment(1);
			$page			=  $this->uri->segment(1);
				
			$this->load->library('page_render');
			
			$data=array(
				'page_content' 				=> $page,	
				'base_url'					=> base_url().$page,
				"tenant_id"					=> $this->session->userdata('tenant_id'),
				'add_form'					=> base64_encode($this->encryption->encrypt("add"))
			);

			$this->parser->parse('master/content', $data);

		}else{
			redirect('login');
		}
	}


	public function json_list(){
			
			$parent_page	=  	$this->uri->segment(1);
			$draw			=	$_REQUEST['draw'];
			$length			=	$_REQUEST['length'];
			$start			=	$_REQUEST['start'];
			$search			=	$_REQUEST['search']["value"];
			$order			=	$_REQUEST['order'][0]["column"];
			$column_name	=	$_REQUEST['columns'][$order]["name"];
			$dir			=	$_REQUEST['order'][0]["dir"];
			
			$data 			=  $this->M_job_request->list_data($length,$start,$search,$order,$dir,$column_name);
			
			$output					=	array();
			$output['draw']			=	$draw;
			$output['recordsTotal']	=	$output['recordsFiltered']=$data['total_data'];
			$output['data']			=	array();
			
			
			$nomor_urut=$start+1;
			setlocale(LC_ALL, 'id_ID');
			
			foreach ($data['data'] as $rows =>$row) {
				
				$id = $row['id'];

				
                $iconAction = "";    

                $iconAction = "<a href='main#".$parent_page."/form_job_request/".base64_encode($this->encryption->encrypt("edit"))."/".base64_encode($this->encryption->encrypt($id))."' class='btn btn-icon btn-primary btn-sm mr-2 mb-2' data-toggle='tooltip' title='View Details' aria-expanded='false'>
			                    <i class='icmn-clipboard'></i>
			                  </a>
			                  <a onclick=del('".$row['id']."') id=$id class='btn btn-icon btn-danger btn-sm mr-2 mb-2' data-toggle='tooltip' title='Deleted' aria-expanded='false'>
			                    <i class='icmn-bin2'></i>
			                  </a>";

			    $badge_css = "";
			    switch ($row['request_status']) {
			    	case 'approved':
		    			$badge_css = "badge-success";
		    		break;
		    		case 'requested':
		    			$badge_css = "badge-warning";
		    		break;
		    		case 'rejected':
		    			$badge_css = "badge-danger";
					break;
					case 'canceled':
		    			$badge_css = "badge-info";
		    		break;
			    	
			    	default:
			    		# code...
			    	break;
			    }

				$output['data'][]=array(
					$nomor_urut, 
					$row['request_code'],
					$row['vacancy_name'],
					$row['company_name'], 
					"<h6><span class='badge badge-pill ".$badge_css." mr-2 mb-2'>".$row['request_status']."</span><h6>",
					$row["update_at"],
					$iconAction
				);
				$nomor_urut++;
			}
			
			echo json_encode($output);
	}

	
	public function history_request(){
			
		$id 			= $this->input->post('id');
		$result			= $this->M_job_request->list_history($id);
		
		$image_admin 	= base_url()."assets/backend/modules/core/common/img/infomedia_logo.png";
		$image_user 	= base_url()."assets/backend/modules/dummy-assets/common/img/avatars/1.jpg";
		// print_r($result);
		// exit();
		$html		= "";
		foreach ($result as $row) {
			if($row['user_level']=='sso'){
				$html .= 	"<div class='cat__apps__chat-block__item clearfix'>\n
								<div class='cat__apps__chat-block__avatar'>\n
									<a class='cat__core__avatar' href=''>\n
										<img src='".$image_admin."' alt='Alternative text to the image' />\n
									</a>\n
								</div>\n
								<div class='cat__apps__chat-block__content'>\n
									<strong>Sharedvis</strong>\n
									<p>".$row['notes_request']."</p>\n
									<p>Your Approval Status : <b>".$row['approval_status']."</b></p>\n
									<small>".$row['created_at']."</small>\n
								</div>\n
							</div>\n
							";
			}else{
				$html .= " <div class='cat__apps__chat-block__item cat__apps__chat-block__item--right clearfix'>\n
							<div class='cat__apps__chat-block__avatar'>\n
								<a class='cat__core__avatar' href='javascript:void(0);'>\n
									<img src='".$image_user."' alt='Alternative text to the image' />\n
								</a>\n
							</div>\n
							<div class='cat__apps__chat-block__content'>\n
								<strong>You</strong>\n
								<p>".$row['notes_request']."</p>
								<small>".$row['created_at']."</small>\n
							</div>\n
						</div>\n
						"; 
			}
			
		}

		echo json_encode(array("html"=>$html));
}

	public function detail_progress(){
		if($this->session->userdata('is_logged_in') == true){

			$parent_page	=  	$this->uri->segment(1);
			$page			= 	$this->uri->segment(2);
			$id 			=  	$this->encryption->decrypt(base64_decode($this->uri->segment(3)));
			$result			=	$this->M_job_request->detail_data($id);
			
			$this->load->library('page_render');
			
			$data=array(
				'page_content' 				=> $page,
				'parent_page'				=> $parent_page,	
				'base_url'					=> base_url().$page,
				'parent_url'				=> base_url().$parent_page,
				'vacancy_name'				=> $result,
				'vacancy_id'				=> $id,
				"tenant_id"					=> $this->session->userdata('tenant_id')
			);

			$this->parser->parse('master/content', array_merge($data, $result));

		}else{
			redirect('login');
		}
	}
	

	public function del_item(){

		if($this->session->userdata('is_logged_in') == true){

			$id 	= $this->input->post('id');
			$status = $this->input->post('status');
			$upd 	= $this->session->userdata('email');
			$lup 	= date('Y-m-d H:i:s');

			$deleted_item = $this->M_monitoring_job_vacancies->deleted_item($id,$status,$upd,$lup);

			echo json_encode($deleted_item);

		}else{
			exit();
		}
	}

	public function form_job_request(){

		if($this->session->userdata('is_logged_in') == true){
			$parent_page	= $this->uri->segment(1);
			$page			= $this->uri->segment(2);
			$tenant_id  	= $this->session->userdata('tenant_id');
			$user_level		= $this->session->userdata('userlevel');
			$show			= date('Y-m-d H:i:s');
			$timestamp 		= strtotime($show);
			$generate		= "RQ".$timestamp;
			$action 		=  $this->encryption->decrypt(base64_decode($this->uri->segment(3)));
	
			if($action == 'add'){
					$act					= "add";
					$title 					= "Create Job Request";
					$id 					= null;
					$request_code			= $generate;
					$job_title 				= null;
					$tenant					= null;
					$department 			= null;
					$total_job_available 	= null;
					$job_level 				= null;
					$job_code 				= null;
					$country 				= null;
					$city		 			= null;
					$state_region 			= null;
					$currency 				= null;
					$show_salary 			= null;
					$maximum_salary			= null;
					$minimum_salary 		= null;
					$job_description 		= null;
					$job_requirements 		= null;
					$experience 			= null;
					$industry 				= null;
					$stream 				= null;
					$education 				= null;
					$employeement_type 		= null;
					$skill_requirement 		= null;
					$auto_close_job 		= null;
					$job_date 				= null;
					$job_time 				= null;
					$pic 					= null;
					
								
					$this->drop_down->select('option_id','option_name');
					$this->drop_down->from('m_option');
					$this->drop_down->where('(option_type=job_level)');
					$list_job_level = $this->drop_down->build();

					$this->drop_down->select('id','name');
					$this->drop_down->from('m_opt_experience');
					$this->drop_down->where();
					$list_experience = $this->drop_down->build();

					$this->drop_down->select('id','name');
					$this->drop_down->from('m_department');
					$this->drop_down->where("(tenant_id = '$tenant_id')");
					$list_department = $this->drop_down->build();
								
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


					$this->drop_down->select('id','fullname');
					$this->drop_down->from('m_admin');
					$this->drop_down->where("(status=Aktif)and(userlevel=sso)");
					$list_pic = $this->drop_down->build();		


			}else{
					$id 	=  $this->encryption->decrypt(base64_decode($this->uri->segment(4)));
					$result	=	$this->M_job_request->detail_data($id);

					$act					= "edit";
					$title 					= "Edit Job Request";
					$request_code 			= $result['request_code'];
					$job_title 				= $result['vacancy_name'];
					$tenant					= $result['tenant_id'];
					$department 			= $result['department'];
					$total_job_available 	= $result['total_job_available'];
					$job_level 				= $result['job_level'];
					$job_code 				= $result['job_code'];
					$country 				= $result['country'];
					$city		 			= $result['city'];
					$state_region 			= $result['state_region'];
					$currency 				= $result['currency'];
					$show_salary 			= $result['show_salary'];
					$maximum_salary			= $result['maximum_salary'];
					$minimum_salary 		= $result['minimum_salary'];
					$job_description 		= $result['job_description'];
					$job_requirements 		= $result['job_requirements'];
					$experience 			= $result['experience_id'];
					$industry 				= $result['industry_id'];
					$stream 				= $result['stream_id'];
					$education 				= $result['education_id'];
					$employeement_type 		= $result['employeement_type'];
					$skill_requirement 		= $result['skill_requirement'];
					$auto_close_job 		= $result['auto_close_job'];
					$job_date 				= $result['job_date'];
					$job_time 				= $result['job_time'];
					$pic 					= $result['user_id'];

					$this->drop_down->select('option_id','option_name');
					$this->drop_down->from('m_option');
					$this->drop_down->where('(option_type=job_level)');
					$list_job_level = $this->drop_down->build($job_level);

					$this->drop_down->select('id','name');
					$this->drop_down->from('m_opt_experience');
					$this->drop_down->where();
					$list_experience = $this->drop_down->build($experience);

					$this->drop_down->select('id','name');
					$this->drop_down->from('m_department');
					$this->drop_down->where("(tenant_id = '$tenant_id')");
					$list_department = $this->drop_down->build($department);
								
					$this->drop_down->select('id','name');
					$this->drop_down->from('m_opt_industri');
					$this->drop_down->where();
					$list_industri = $this->drop_down->build($industry);			

					$this->drop_down->select('id','name');
					$this->drop_down->from('m_opt_stream');
					$this->drop_down->where();
					$list_stream = $this->drop_down->build($stream);			

					$this->drop_down->select('id','name');
					$this->drop_down->from('m_opt_education');
					$this->drop_down->where();
					$list_education = $this->drop_down->build($education);			

					$this->drop_down->select('id','name');
					$this->drop_down->from('m_opt_employee_type');
					$this->drop_down->where();
					$list_employee_type = $this->drop_down->build($employeement_type);			

					$this->drop_down->select('id','name');
					$this->drop_down->from('m_opt_keterampilan');
					$this->drop_down->where();
					$list_keterampilan = $this->drop_down->build();


					$this->drop_down->select('id','fullname');
					$this->drop_down->from('m_admin');
					$this->drop_down->where("(status=Aktif)and(userlevel=sso)");
					$list_pic = $this->drop_down->build($pic);		

			}

			$this->drop_down->select('id','company_name');
			$this->drop_down->from('m_tenant');
			
			if($tenant_id != '0'){
				$this->drop_down->where("(status=Aktif) and (id = '$tenant_id')");
				$list_tenant = $this->drop_down->build($tenant_id);	
			}else{
				$this->drop_down->where("(status=Aktif)");
				$list_tenant = $this->drop_down->build();	
			}
			

			$data = array(
					'parent_page'			=> $parent_page,
					'page_content'			=> $page,
					'title'					=> $title,
					'base_url'				=> base_url(),
					'list_experience' 		=> $list_experience,
					'list_department'		=> $list_department,
					'list_industri' 		=> $list_industri,
					'list_stream' 			=> $list_stream,
					'list_education' 		=> $list_education,
					'list_employee_type'	=> $list_employee_type,
					'list_keterampilan' 	=> $list_keterampilan,
					'list_tenant' 			=> $list_tenant,
					'list_job_level' 		=> $list_job_level,
					'list_pic' 				=> $list_pic,
					'act'					=> $act,		
					'id'					=> $id,	
					'request_code'			=> $request_code,
					'job_title'				=> $job_title,		
					'tenant_id'				=> $tenant,				
					'department'			=> $department,		
					'total_job_available'	=> $total_job_available,
					'job_level'				=> $job_level, 			
					'job_code'				=> $job_code,			
					'country'				=> $country,			
					'city'					=> $city,		 		
					'state_region'			=> $state_region, 		
					'currency'				=> $currency, 			
					'show_salary'			=> $show_salary, 		
					'maximum_salary'		=> $maximum_salary,			
					'minimum_salary'		=> $minimum_salary,
					'job_description'		=> $job_description,
					'job_requirements'		=> $job_requirements, 
					'experience'			=> $experience,
					'industry'				=> $industry,
					'stream'				=> $stream,
					'education'				=> $education,
					'employeement_type'		=> $employeement_type,
					'skill_requirement'		=> $skill_requirement, 
					'auto_close_job'		=> $auto_close_job, 
					'job_date'				=> $job_date,
					'job_time'				=> $job_time,
					'pic'					=> $pic,
					'isset_pic'				=> ($user_level=='sso')?"":"none"

			);

			$this->parser->parse('master/content', $data);

		}else{
			exit();
		}

	}


	public function get_option(){

		if($this->session->userdata('is_logged_in')){

			$page			= $this->uri->segment(1);
			$q				= $this->input->post('q');
			$vendor_id 		= $this->input->post('vendor_id');
			$table			= $this->input->post('table');

			$data = array();

		$data = $this->M_job_request->get_option($q,$table,$vendor_id);

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

	public function submit_vacancy(){
		$user_level	= $this->session->userdata('userlevel');
		$result 	= "";
		$action 	= $this->input->post('act');
		$id 		= $this->input->post('id');
		$data_vacancy = array(
						'request_code'			=> $this->input->post('request_code'),
						'request_status' 		=> $this->input->post('save_type'),
						'vacancy_name' 			=> $this->input->post('job_title'),
						'tenant_id' 			=> $this->input->post('tenant_id'),
						'department' 			=> $this->input->post('department'),
						'total_job_available' 	=> $this->input->post('total_job_available'),
						'job_level' 			=> $this->input->post('job_level'),
						'user_id' 				=> $this->input->post('user_id'),
						'job_code' 				=> $this->input->post('job_code'),
						'country' 				=> $this->input->post('country'), 
						'state_region' 			=> $this->input->post('state_region'), 
						'city' 					=> $this->input->post('city'), 
						'currency' 				=> $this->input->post('currency'),
						'show_salary' 			=> $this->input->post('show_salary'),
						'maximum_salary' 		=> $this->input->post('maximum_salary'),
						'minimum_salary' 		=> $this->input->post('minimum_salary'),
						'job_description' 		=> $this->input->post('job_description'), 
						'job_requirements' 		=> $this->input->post('job_requirements'),
						'experience_id' 		=> $this->input->post('experience'),
						'industry_id' 			=> $this->input->post('industry'),
						'stream_id' 			=> $this->input->post('stream'), 
						'education_id' 			=> $this->input->post('education'), 
						'employeement_type' 	=> $this->input->post('employeement_type'), 
						'skill_requirement' 	=> json_encode($this->input->post('skill_requirement')),
						'auto_close_job' 		=> $this->input->post('auto_close_job'),
						'job_date' 				=> $this->input->post('job_date'),
						'job_time' 				=> $this->input->post('job_time'),
						'updated' 				=> $this->session->userdata('id'),
						'update_at' 			=> date('Y-m-d H:i:s')
					);
					
		// print_r($data_vacancy);
		// exit();
		if($action == "add"){

			$data_vacancy['created']	= $this->session->userdata('id');
			$data_vacancy['created_at']	= date('Y-m-d H:i:s');

			$data_request = array(
				'approval_status' 		=> 'requested',
				'user_level'			=> $this->session->userdata('userlevel'),
				'notes_request'			=> $this->input->post('notes_request'),
				'created' 				=> $this->session->userdata('id'),
				'created_at' 			=> date('Y-m-d H:i:s')
			);

			$result = $this->M_job_request->add($data_vacancy, $data_request);

		}else{
			if($user_level == 'sso'){
				$data_request = array(
					'approval_status' 		=> 'requested',
					'state'					=> 'validator',
					'notes_request'			=> $this->input->post('notes_request'),
					'created' 				=> $this->session->userdata('id'),
					'created_at' 			=> date('Y-m-d H:i:s')
				);
			}else{
				$data_request = array(
					'approval_status' 		=> 'requested',
					'state'					=> 'requester',
					'notes_request'			=> $this->input->post('notes_request'),
					'created' 				=> $this->session->userdata('id'),
					'created_at' 			=> date('Y-m-d H:i:s')
				);

			}

			$result = $this->M_job_request->edit($id,$data_vacancy, $data_request);
		}
	
		echo json_encode($result);


	}

}

/* End of file Company_configuration.php */
/* Location: ./application/controllers/Company_configuration.php */
