<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;

class TestConvertController extends Controller
{
    //
    public function askforall_cryptocurrency(){
    	$ts=new Test();
        return response()->json(["data"=>$ts->get_tickers()]);
    }
    public function askfor_cryptocurrency($crito_currency){
    	$ts=new Test();

        return response()->json(["data"=>$ts->get_ticker_for_currency($crito_currency)]);
    }
    public function ask_forall_list_ofcryptocurrencyalldata(){
    	$ts=new Test();
    	return response()->json($ts->get_list_of_currency());
    }
    public function ask_forall_list_ofcryptocurrency(){
    	$ts=new Test();
    	var_dump($ts->get_list_of_currency());
    	$i=0;
    	foreach ($ts->get_list_of_currency() as $key => $value) {
    		$arr[$i++]=["id"=>$value["id"],"name"=>$value["name"],"symbol"=>$value["symbol"]];
    	}
    	    	
    	//return response()->json($ts->get_list_of_currency());
        return response()->json($arr);
    }
    public function ask_forall_listof_fiatcurrency(){
    		$ts=new Test();
			return response()->json($ts->get_fiat_currency());
    }
    public function convert_to_crypto($amount,$crypto,$fiat){
    	$ts=new Test();
        return response()->json(["data"=>$ts->convert_to_cryto($amount,$crypto,$fiat)]);
    }
    public function convert_to_fiat($amount, string $id, string $to, int $scale = 4){
    	$ts=new Test();
        return response()->json(["data"=>$ts->convert_to_fiat($amount,  $id, $to, $scale)]);
    }
    

    public function convert_fiat_to_cripto(){
    	$ts=new Test();
        return response()->json(["data"=>$ts->obtener_tickers()]);
    }
    /*
    public function (){
    	$ts=new Test();
        return response()->json(["data"=>$ts->obtener_tickers()]);
    }*/
}

