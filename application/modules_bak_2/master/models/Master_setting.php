<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Master_setting extends CI_Model {
	
	function __construct()
    {
        parent::__construct();
       	$this->load->model('data/Api');
    }

	public function SetSettings()
	{
		$type 		= '_table';
		$type_val 	= 'master_setting';
		$fields 	= '*';
		$filter 	= '';
		$setting 	= $this->Api->get($type , $type_val , $fields , $filter );
		return $setting['resource'][0];
	}
	
	public function SetMenu($level=NULL,$tenant_id=NULL)
	{
		$where_clause = "";
		if($level!=NULL){
			$where_clause .= "and(userlevel like '%\"".$level."\"%')";
		}

		if($tenant_id!=NULL){
			$where_clause .= "and(tenant_id like '%".$tenant_id."%')";
		}
		$type 		= "_table";
		$type_val	= "m_menu";
		$fields 	= "id,menuname,parent,url,icon,is_default,tooltip,divider";
		$filter 	= "(status=1)".$where_clause;
		$order 		= "parent,id ASC";
		$menus 		= $this->Api->get($type,$type_val,$fields,$filter,$order);

		return $menus['resource'];
	}
	
	public function check_auth($level=NULL, $url=NULL)
	{

		$where_clause = "AND userlevel LIKE \"$level\" AND url='$url'";
		
		$sql	=	"SELECT id
					FROM m_menu
					WHERE id IS NOT NULL
					$where_clause";
		
		$query	= $this->db->query($sql);
		
		$result	= $query->num_rows();
		
		return $result;
	}

}

/* End of file Master_setting.php */
/* Location: ./application/models/Master_setting.php */