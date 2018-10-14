<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
		$client = new \GuzzleHttp\Client();
    	$res = $client->request('GET', 'https://api.coinmarketcap.com/v2/listings/');
		//echo $res->getStatusCode();

		if($res->getStatusCode()==200){
			$js=json_decode($res->getBody());		
			//var_dump($js->data);
			//echo gettype($res->getBody());
			//return view('ajax',["data"=>json_encode($js->data)]);
		}else{

			//return view('ajax',["data"=>json_encode([])]);
		}
    return view('welcome',["data"=>json_encode($js->data)]);
});
Route::get("/test_guzzle","TestController@test_guzzle");
Route::get("/test_guzzle_2","TestController@test_guzzle_2");
//http://localhost/test_ccoinmarketcap/public/test_ticker/1/id/3/COP
//http://localhost/test_ccoinmarketcap/public/test_ticker/10/id/3/null ==eata no puede ir con convert
//http://localhost/test_ccoinmarketcap/public/test_ticker/10/null/null/null
//http://localhost/test_ccoinmarketcap/public/test_ticker/10/id/null/null
//http://localhost/test_ccoinmarketcap/public/test_ticker/10/null/6/null
//http://localhost/test_ccoinmarketcap/public/test_ticker/null/null/6/null
//http://localhost/test_ccoinmarketcap/public/test_ticker/null/null/null/COP
//http://localhost/test_ccoinmarketcap/public/test_ticker/null/null/null/null
Route::get("/test_ticker/{limite}/{orden}/{inicia}/{convert}/","TestController@get_ticker");
//http://localhost/test_ccoinmarketcap/public/test_sp_ticker/1/COP => BITCOIN TO COP
//http://localhost/test_ccoinmarketcap/public/test_sp_ticker/1/USD => BITCOIN TO USD
//http://localhost/test_ccoinmarketcap/public/test_sp_ticker/2/BTC => LITECOIN TO BITCOIN
Route::get("/test_sp_ticker/{id_cripto}/{currency}","TestController@get_specific_currency");
