<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Rentberry;

class Test extends Model
{
    //

	public function get_list_of_currency(){
    	$client = new Rentberry\Coinmarketcap\Coinmarketcap();
		return $client->getListening();
    }

    public function get_tickers($limit = null, $start = null, $convert = null){
    	$client = new Rentberry\Coinmarketcap\Coinmarketcap();
		return $client->getTickers();
    }

    public function get_ticker_for_currency($id){
    	$client = new Rentberry\Coinmarketcap\Coinmarketcap();
		return $client->getTicker($id);
    }
    
    public function convert_to_cryto($amount,$crypto,$fiat){
    	$client = new Rentberry\Coinmarketcap\Coinmarketcap();
    	return number_format($client->convertToCrypto($amount,$crypto,$fiat), 3, '.', '');
    }
    
    public function convert_to_fiat($amount, string $id, string $to, int $scale = 4){
    	$client = new Rentberry\Coinmarketcap\Coinmarketcap();
    	return $client->convertToFiat($amount, $id, $to, $scale);
    }

    public function get_fiat_currency(){
    	$currency_for_contry=[
					[
						"id"=> "1",
						"Country"=> " United States dollar ($)",
						"Currency"=> "USD"
					],
					[
						"id"=> "2",
						"Country"=> "Australian dollar ($)",
						"Currency"=> "AUD"
					],
					[
						"id"=> "3",
						"Country"=> "Brazilian real (R$)",
						"Currency"=> "BRL"
					],
					[
						"id"=> "4",
						"Country"=> "Canadian dollar ($)",
						"Currency"=> "CAD"
					],
					[
						"id"=> "5",
						"Country"=> "Swiss franc (Fr)",
						"Currency"=> "CHF"
					],
					[
						"id"=> "6",
						"Country"=> "Chilean peso ($)",
						"Currency"=> "CLP"
					],
					[
						"id"=> "7",
						"Country"=> "Chinese yuan (¥)",
						"Currency"=> "CNY"
					],
					[
						"id"=> "8",
						"Country"=> "Czech koruna (Kč)",
						"Currency"=> "CZK"
					],
					[
						"id"=> "9",
						"Country"=> "Danish krone (kr)",
						"Currency"=> "DKK"
					],
					[
						"id"=> "10",
						"Country"=> "Euro (€)",
						"Currency"=> "EUR"
					],
					[
						"id"=> "11",
						"Country"=> "British pound (£)",
						"Currency"=> "GBP"
					],
					[
						"id"=> "12",
						"Country"=> "Hong Kong dollar ($)",
						"Currency"=> "HKD"
					],
					[
						"id"=> "13",
						"Country"=> "Hungarian forint (Ft)",
						"Currency"=> "HUF"
					],
					[
						"id"=> "14",
						"Country"=> "Indonesian rupiah ( Rp)",
						"Currency"=> "IDR"
					],
					[
						"id"=> "15",
						"Country"=> "Israeli new shekel (₪)",
						"Currency"=> "ILS"
					],
					[
						"id"=> "16",
						"Country"=> "Indian rupee (₹)",
						"Currency"=> "INR"
					],
					[
						"id"=> "17",
						"Country"=> "Japanese yen (¥)",
						"Currency"=> "JPY"
					],
					[
						"id"=> "18",
						"Country"=> "South Korean won (₩)",
						"Currency"=> "KRW"
					],
					[
						"id"=> "19",
						"Country"=> "Mexican peso ($)",
						"Currency"=> "MXN"
					],
					[
						"id"=> "20",
						"Country"=> "Malaysian ringgit (RM)",
						"Currency"=> "MYR"
					],
					[
						"id"=> "21",
						"Country"=> "Norwegian krone (kr)",
						"Currency"=> "NOK"
					],
					[
						"id"=> "22",
						"Country"=> "New Zealand dollar ($)",
						"Currency"=> "NZD"
					],
					[
						"id"=> "23",
						"Country"=> "Philippine piso (₱)",
						"Currency"=> "PHP"
					],
					[
						"id"=> "24",
						"Country"=> "Pakistani rupee (₨)",
						"Currency"=> "PKR"
					],
					[
						"id"=> "25",
						"Country"=> "Polish złoty (zł)",
						"Currency"=> "PLN"
					],
					[
						"id"=> "26",
						"Country"=> "Russian ruble (₽)",
						"Currency"=> "RUB"
					],
					[
						"id"=> "27",
						"Country"=> "Swedish krona (kr)",
						"Currency"=> "SEK"
					],
					[
						"id"=> "28",
						"Country"=> "Singapore dollar ($)",
						"Currency"=> "SGD"
					],
					[
						"id"=> "29",
						"Country"=> "Thai baht (฿)",
						"Currency"=> "THB"
					],
					[
						"id"=> "30",
						"Country"=> "Turkish lira (₺)",
						"Currency"=> "TRY"
					],
					[
						"id"=> "31",
						"Country"=> "New Taiwan dollar ($)",
						"Currency"=> "TWD"
					],
					[
						"id"=> "32",
						"Country"=> "South African rand (R)",
						"Currency"=> "ZAR"
					],
					[
						"id"=> "33",
						"Country"=> "Colombia",
						"Currency"=> "COP"
					]
				];	
		return $currency_for_contry;
    }


}
