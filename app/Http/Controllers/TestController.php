<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function test_guzzle(){
    	$client = new \GuzzleHttp\Client();
    	$request = new \GuzzleHttp\Psr7\Request('GET', 'https://api.coinmarketcap.com/v2/listings/');
		$promise = $client->sendAsync($request)->then(function ($response) {
		    echo 'I completed! ' . $response->getBody();
		});
		$promise->wait();
    }
}
