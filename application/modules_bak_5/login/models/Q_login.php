<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Q_login extends CI_Model {

	function check_login($email,$password){

		$type = '_table';
		$type_val = 'm_login';
		$fields = '*';
		$filter = '(email='.$email.')';
		$this->load->model('data/Api');
		$data = $this->Api->get( $type , $type_val , $fields , $filter );

		// print_r($data);
		// 		exit();
		// 		die();

		if(isset($data['resource'][0]['email'])){
			if (password_verify($password, $data['resource'][0]['password'])) {
				$type_val = 'm_'.$data['resource'][0]['user_type'];
				$fields = '*';
				$filter = '(email='.$data['resource'][0]['email'].')';
				$data = $this->Api->get( $type , $type_val , $fields , $filter );
					
				// print_r($data);
				// exit();
				// die();

				$result = array("status"	=> true,
							"email"			=> $data['resource'][0]['email'],
							"fullname"		=> $data['resource'][0]['fullname'],
							"userlevel"		=> $data['resource'][0]['userlevel'],
							"phone"			=> $data['resource'][0]['phone'],
							"foto"			=> $data['resource'][0]['img_profile'],
							"tenant_id"		=> $data['resource'][0]['tenant_id']
							);
				

			}else{
				$result = array("status"	=> false,
							"email"			=> '',
							"fullname"		=> '',
							"userlevel"		=> '',
							"phone"			=> '',
							"foto"			=> '',
							"tenant_id"		=> ''
							);
			}
		}else{
				$result = array("status"	=> false,
							"email"			=> '',
							"fullname"		=> '',
							"userlevel"		=> '',
							"phone"			=> '',
							"foto"			=> '',
							"tenant_id"		=> ''
							);
		}	
		return $result;
	}


	function check_tenant($page){
		
		$this->db->select('tenant_id, favicon, logo, title , login_image');
		$query = $this->db->get_where('master_setting', array('tenant_id_alias'=> $page));

		$data = $query->result_array();

		if(isset($data[0]['tenant_id'])){
				$result = array("status" => true, "tenant_id" => $data[0]['tenant_id'], "favicon" => $data[0]['favicon'] , "logo" => $data[0]['logo'], "title" => $data[0]['title'], 'login_image' => $data[0]['login_image'] );
		}else{
				$result = array("status" => false );
		}

		return $result;
	}

}

/* End of file q_login.php */
/* Location: ./application/models/q_login.php */
