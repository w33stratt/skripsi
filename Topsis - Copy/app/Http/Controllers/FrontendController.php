<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Http\Client\Response;

class FrontendController extends Controller
{
    public function getData(){
        $client= new Client();
        $response = $client ->request('GET', 'http://127.0.0.1:81/api/getdataimage');
        $statusCode = $response-> getStatusCode();
        $body = $response->getBody();

        $data = json_decode($body, true);

        return view('frontend', ['data'=>$data]);
    }
}
