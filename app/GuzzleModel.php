<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuzzleModel extends Model
{
    //
    
    private $url_base="https://api.coinmarketcap.com/v2/";
    private $client;
    
    public function __construct(){
    	$this->client = new \GuzzleHttp\Client();    	
    }

    public function get_response_listings(){
		
    	$res = $this->client->request('GET', $this->url_base.'listings/');
    	if($res->getStatusCode()==200){
			$js=json_decode($res->getBody());		
			return json_encode($js->data);
		}else{
			return json_encode($js->data);
			
		}
    }

    public function get_response_ticker($limite,$orden,$inicia,$convert){
		$string_add="";
		
    	if($limite!="null"){
    		$string_add.="?limit=".$limite;
    	}
    	
    	if($orden!="null"){
    		
    		$string_add.="&sort=".$orden;
    		
    		
    	}
    	
    	if($inicia!="null"){
    	
    		$string_add="?start=".$inicia;	
    		if($limite!="null"){
    			$string_add.="&limit=".$limite;
    			if($orden!="null"){
    				$string_add.="&sort=".$orden;		
    			}
    		}

    		
    	}


    	if($convert!="null"){
    		$string_add="?convert=".$convert;
    		if($limite!="null"){
    			$string_add.="&limit=".$limite;
    		}
    	}
    	
    	$res = $this->client->request('GET', $this->url_base.'ticker/'.$string_add);
    	if($res->getStatusCode()==200){
			$js=json_decode($res->getBody());		
			return json_encode($js->data);
		}else{
			return json_encode($js->data);
			
		}
    }

    public function get_specific_currency($id_cripto_currency,$convert){
		$string_add="";
		if($id_cripto_currency!="null"){

			$string_add=$id_cripto_currency."/";
			if($convert!="null"){
				$string_add.="?convert=".$convert;
			}
			echo $this->url_base.'ticker/'.$string_add;
			$res = $this->client->request('GET', $this->url_base.'ticker/'.$string_add);
	    	if($res->getStatusCode()==200){
				$js=json_decode($res->getBody());		
				return json_encode($js->data);
			}else{
				return json_encode($js->data);
				
			}	
		}else{
				return json_encode(["error"=>"Por favor ingresa un id de la cripto moneda que quieres convertir o consultar"]);
		}

    	
    }
}
