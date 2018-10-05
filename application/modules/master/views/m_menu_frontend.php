    <?php 
    	$this->load->model('master/Master_setting');
    	$result = $this->Master_setting->SetMenuFrontend();
    	foreach ($result as $key => $value) {
    		echo "<li>
                	<a href=".base_url().$value['url'].">".$value['menuname']."</a>
	        	</li>";
    	}
    ?>
