<?php

ini_set('max_execution_time', 300); 
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Model {

	function __construct()
    {
        parent::__construct();
        $this->Url = 'https://apidev.infomedia.co.id/api/v2/recruitment/';
    }

	public function get( $type=NULL , $type_val=NULL , $fields='*' , $filter=NULL, $order=NULL , $limit=NULL, $offset=NULL , $count_only=FALSE){

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
			// $request_api .= '&filter='.$filter;
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

		$request_api .= '&count_only='.$count_only;
	
		// echo $request_api;
		// exit();

		$ch = curl_init($request_api);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		$result = json_decode(curl_exec($ch) ,TRUE) ;
		curl_close($ch);
		//$result['request_api'] = $request_api;

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


	public function post_table( $table_name=NULL , $data=array() ){

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

		$params  = array("resource" => $data);
		
		$ch = curl_init($request_api);
		$params = json_encode($params);

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
		$result = json_decode(curl_exec($ch) ,TRUE);
		// print_r($result);
		// exit();
		curl_close($ch);
		return $result;
		
	}

	public function put_table( $table_name=NULL , $data=array() , $filter=array() ){
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

		$params  = array("resource" => $data);
		if (!empty($filter)) {
			$params = array_merge($params , $filter);
		}

		$params = json_encode($params);
		
		$ch = curl_init($request_api);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
		$result = json_decode(curl_exec($ch) ,TRUE);

		curl_close($ch);
		return $result;


	}

	public function delete(  $table_name=NULL , $filter=NULL ){

		$header = array(                                                                          
							'X-DreamFactory-Api-Key: 1155384b6929b2cc03047a7021b474f29e00cd6b60f53227c830ce7c1bc53e90',
							'Accept: application/json',
							'Authorization: Basic YXBwcmVjcnVpdEBpbmZvbWVkaWEuY28uaWQ6MW5mMG1lZGlA'
						);

		$request_api = "";
		$url_api = $this->Url;

		if ($table_name !== NULL) {
			$request_api = $url_api."_table/".$table_name;
		}

		if ($filter !== NULL) {
			$request_api .= '?filter='.rawurlencode($filter);
		}

		$ch = curl_init($request_api);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE" );
		curl_setopt($ch, CURLOPT_HTTPHEADER,$header );
		$result = json_decode(curl_exec($ch) ,TRUE) ;
		curl_close($ch);
		return $result;
	}

	public function patch(){

	}
}
