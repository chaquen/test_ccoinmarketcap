<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\GuzzleModel;

class TestController extends Controller
{
    //
    public function test_guzzle(){
    	$client = new \GuzzleHttp\Client();
    	$res = $client->request('GET', 'https://api.coinmarketcap.com/v2/listings/');
		//echo $res->getStatusCode();

		if($res->getStatusCode()==200){
			$js=json_decode($res->getBody());		
			//var_dump($js->data);
			//echo gettype($res->getBody());
			return view('ajax',["data"=>json_encode($js->data)]);
		}else{

			return view('ajax',["data"=>json_encode([])]);
		}
		
		//echo $res->getHeaderLine('content-type');
		//'application/json; charset=utf8'
		//echo $res->getBody();
		

		
		
		
    }

    public function test_guzzle_2(){
    	$client = new GuzzleModel();
    	$res = $client->get_response_listings();
		//echo $res->getStatusCode();

			
		return view('ajax',["data"=>$res]);
		
		//echo $res->getHeaderLine('content-type');
		//'application/json; charset=utf8'
		//echo $res->getBody();
		

		
		
		
    }


    public function get_ticker($limite,$orden,$inicia,$convert){
    	$client = new GuzzleModel();
    	
    	return $client->get_response_ticker($limite,$orden,$inicia,$convert);
    }

    public function get_specific_currency($id_cripto_currency,$convert){
    	$client = new GuzzleModel();
    	
    	return $client->get_specific_currency($id_cripto_currency,$convert);
    }
}
