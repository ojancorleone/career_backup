<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Model {

	function __construct()
    {
        parent::__construct();
        $this->Url = 'https://apidev.infomedia.co.id/api/v2/recruitment/';
    }

	public function get( $type=NULL , $type_val=NULL , $fields='*' , $filter=NULL, $order=NULL , $limit=NULL, $offset=NULL){

		$header = array(                                                                          
							'X-DreamFactory-Api-Key: 1155384b6929b2cc03047a7021b474f29e00cd6b60f53227c830ce7c1bc53e90',
							'Accept: application/json',
							'Authorization: Basic YXBwcmVjcnVpdEBpbmZvbWVkaWEuY28uaWQ6MW5mMG1lZGlA'
						);


		$request_api = "";
		$url_api = $this->Url;

		if ($type !== NULL) {
			$request_api = $url_api.$type;
		}

		if ($type_val !== NULL) {
			$request_api .= "/".$type_val.'?';
		}

		if ($fields !== NULL) {
			$request_api .= 'fields='.$fields;
		}

		if ($filter !== NULL) {
			$request_api .= '&filter='.rawurlencode($filter);
		}

		if ($order !== NULL) {
			$request_api .= '&order='.urlencode($order);
		}
		if ($limit !== NULL) {
			$request_api .= '&limit='.$limit;
		}

		if ($offset !== NULL) {
			$request_api .= '&offset='.$offset;
		}
	
	
		// echo $request_api;
		// exit();

		$ch = curl_init($request_api);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		$result = json_decode(curl_exec($ch) ,TRUE) ;
		curl_close($ch);
		$result['request_api'] = $request_api;

		return $result;
	}

	public function post_proc( $sp_name , $data ){

		$header = array(                                                                          
							'X-DreamFactory-Api-Key: 1155384b6929b2cc03047a7021b474f29e00cd6b60f53227c830ce7c1bc53e90',
							'Content-Type: application/json',
							'Authorization: Basic YXBwcmVjcnVpdEBpbmZvbWVkaWEuY28uaWQ6MW5mMG1lZGlA'
						);
		$request_api = "";
		$url_api = $this->Url;
			
			if ($sp_name !== NULL) {
				$request_api = $url_api."_proc/".$sp_name;
			}

		$params  = array("params" => $data);

		$ch = curl_init($request_api);
		$params = json_encode($params);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
		$result = json_decode(curl_exec($ch) ,TRUE);

		curl_close($ch);
		return $result;
		
	}


	public function post_table( $table_name , $data ){

		$header = array(                                                                          
							'X-DreamFactory-Api-Key: 1155384b6929b2cc03047a7021b474f29e00cd6b60f53227c830ce7c1bc53e90',
							'Content-Type: application/json',
							'Authorization: Basic YXBwcmVjcnVpdEBpbmZvbWVkaWEuY28uaWQ6MW5mMG1lZGlA'
						);
		
		$request_api = "";
		$url_api = $this->Url;
		if ($table_name !== NULL) {
			$request_api = $url_api."_table/".$table_name;
		}

		// echo $request_api;
		// exit();
		// die();

		$params  = array("resource" => $data);

		$ch = curl_init($request_api);
		$params = json_encode($params);

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
		$result = json_decode(curl_exec($ch) ,TRUE);

		curl_close($ch);
		return $result;
		
	}

	public function put(){

	}

	public function delete(){

	}

	public function patch(){

	}
}
