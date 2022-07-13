<?php

namespace App\Controllers;

class Home extends BaseController
{

	public function index()
	{
		helper(['curl']);
		$rest_api_base_url = 'https://rickandmortyapi.com/api';

		//GET - list of users
		$get_endpoint = '/character';

		$page = $this->request->getVar('page');
		if (isset($page)) {
			$get_endpoint .= "?page=" . $page;
		}

		
		$response = perform_http_request('GET', $rest_api_base_url . $get_endpoint);
		$response_obj = json_decode($response);
		$data['characters'] = $response_obj;
		if($response_obj->info->prev){
			$prev = explode("?", $response_obj->info->prev)[1];
			$response_obj->info->prev = $prev;
		}
		if($response_obj->info->next){
			$next = explode("?", $response_obj->info->next)[1];
			$response_obj->info->next = $next;
		}

		//View
		return view('catalog', $data);
	}
}
