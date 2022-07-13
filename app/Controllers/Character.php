<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Character extends BaseController
{
    public function get_data($id)
    {
        helper(['curl']);

        $rest_api_base_url = 'https://rickandmortyapi.com/api';

        //GET - list of users
        $get_endpoint = '/character/'. $id;

        $response = perform_http_request('GET', $rest_api_base_url . $get_endpoint);
        $response_obj = json_decode($response);
        $data['character_info'] = $response_obj;

        return view('character_info', $data);
    }
}
