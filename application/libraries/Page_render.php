<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page_render 
{
		
	public function __construct()
	{
		$CI =& get_instance();
		
		$this->userlevel = $CI->session->userdata('userlevel');
		$this->tenant_id = $CI->session->userdata('tenant_id');
		$this->id 		 = $CI->session->userdata('id');
		
		$CI->load->model('master/Master_setting');
		$CI->load->model('profile/M_profile');
		
		$menu = $CI->Master_setting->SetMenu( strtolower($this->userlevel),$this->tenant_id);
	
		$menus = array('id' => array(), 'parents' => array());
		
			foreach ($menu as $menu_key){
				
				$top_menu[] = $menu_key['url'];
				
				$menus['id'][$menu_key['id']] = $menu_key;
				
				$menus['parents'][$menu_key['parent']][] = $menu_key['id'];
			}
		
		$this->top_menu = $top_menu;
				
		$this->menus = array("menus" => $menu);
		
		$file_type = get_mime_by_extension(base_url().'assets/img/propic/' . $CI->session->userdata('foto'));
		
		switch ($file_type){
			
			case 'image/jpeg':
			$photo = base_url().'assets/img/propic/' . $CI->session->userdata('foto');
			break;
			
			case 'image/png':
			$photo = base_url().'assets/img/propic/' . $CI->session->userdata('foto');
			break;
			
			default:
			$photo = base_url().'assets/img/default.jpg';
			break;
			
		}
		
		$image_url = "";
		$detail_profile = $CI->M_profile->detail_profile( $this->id, $this->userlevel );

		if ($detail_profile['foto'] != "" ) {
			$path_ext  = $this->userlevel=="pelamar"?"applicant/":"internal/".$this->tenant_id;
			$image_url = base_url().'assets/backend/images/profile/'.$path_ext.'/'.$detail_profile['email'].'/'.$detail_profile['foto'];
		}else{
			$image_url = base_url().'assets/backend/modules/dummy-assets/common/img/avatars/1.jpg';
		}

		$photos = array( "photos" => $photo );
		
		$this->data_menu = array("base_url" => base_url(),
						"email" 		=> ucwords($CI->session->userdata('email')),
						"fullname" 		=> ucwords($CI->session->userdata('fullname')),
						"userlevel" 	=> ucwords($CI->session->userdata('userlevel')),
						"email" 		=> $CI->session->userdata('email'),
						"tenant_id" 	=> $CI->session->userdata('tenant_id'),
						"photos" 		=> $photo,
						"menus" 		=> $menus,
						"image_url" 	=> $image_url
						);


		$this->settings = array_merge($CI->Master_setting->SetSettings(),$photos,$this->menus,$this->data_menu);
	
	}
	
	public function set_layout($layout,$data=NULL)
	{
			$CI =& get_instance();
			
			return array("page_content" => $CI->parser->parse($layout,$data,true));
	}
	
	public function set_menu($data=NULL,$active_menu=NULL,$level=NULL)
	{
		$CI =& get_instance();
		
		return array("menu" =>  $CI->parser->parse("master/m_menu_user",array_merge($data, array("active_menu"=>$active_menu)),true) ) ;
		
	}
	
	public function page_auth_check($url)
	{
		$CI =& get_instance();
		
		$CI->load->model('master/Master_setting');
		
		$check = $CI->Master_setting->check_auth( strtolower( $this->userlevel ), $url );
		
		return $check;
		
	}
	
	public function render($parent_page,$page,$data=array())
	{
		$CI =& get_instance();
		$top_menus=array();
		foreach($this->top_menu as $top_menu){
			
			if($top_menu==$parent_page){
				$topMenu='active';
			}else{
				$topMenu='';
			}
			
			$top_menus = array_merge($top_menus,array("class_".$top_menu=>$topMenu));
		}
		
		$this->menu = $this->set_menu($this->data_menu,$parent_page,$CI->session->userdata('userlevel'));
		
		$layout		= $this->set_layout($page,array_merge(array("base_url"=>base_url(), 
																"thispage"=>base_url().$page, 
																"thisparent"=>$parent_page)
										,$data,$this->data_menu));
		

		return $CI->parser->parse('master/portal',array_merge($this->settings,$layout,$this->menu,$top_menus));

	}

	public function content_render($parent_page,$page,$data=array())
	{
		$CI =& get_instance();
		$top_menus=array();

		foreach($this->top_menu as $top_menu){
			
			if($top_menu==$parent_page){
				$topMenu='active';
			}else{
				$topMenu='';
			}
			
			$top_menus = array_merge($top_menus,array("class_".$top_menu=>$topMenu));
		}
		
		$this->menu = $this->set_menu($this->data_menu,$parent_page,$CI->session->userdata('userlevel'));
		
		$layout		= $this->set_layout($page,array_merge(array("base_url"=>base_url(), 
																"thispage"=>base_url().$page, 
																"thisparent"=>$parent_page)
										,$data,$this->data_menu));


		return $CI->parser->parse('master/content',$layout);

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */