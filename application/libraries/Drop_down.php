<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Drop_down extends CI_Controller 
{


	
	public function __construct()
	{
		$this->ci =& get_instance();
		$this->ci->load->model('data/Api');
		
		$this->where_query = NULL;
	}
		
	public function select($value,$name)
	{
		$this->value_option	= $value;
		$this->name_option	= $name;
		
		$this->select_query = $this->value_option.",".$this->name_option;
	}
	
	public function from($from_table)
	{
		$this->from_query = $from_table;
		
		$this->where_query = NULL;
	}
	
	public function where($where_clause=NULL)
	{
		$where_clause==NULL?
		$this->where_query = "" :
		$this->where_query = $where_clause;		
	}
	
	public function build($selected_item=NULL){
		
		$sql = $this->select_query.$this->from_query.$this->where_query;
		
		$type 		= "_table";
		$type_val 	= $this->from_query;
		$fields		= $this->select_query;
		$filter 	= $this->where_query;

		$result1 = $this->ci->Api->get( $type , $type_val , $fields, $filter );
		$result = "";

		foreach ($result1['resource'] as $row){
				
				$rows = array_keys($row);
				
				$selected_item==$row[$rows[0]]?$selected="selected":$selected="";
				
			    $result .= "<option value='".$row[$rows[0]]."' $selected>".$row[$rows[1]]."</option>";
			}
			
		return $result;
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */