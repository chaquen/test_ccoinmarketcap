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
    return view('welcome');
});
Route::get('/list_cripto', "TestConvertController@ask_forall_list_ofcryptocurrency");
Route::get('/list_cripto_all_data', "TestConvertController@ask_forall_list_ofcryptocurrencyalldata");
Route::get('/list_fiat', "TestConvertController@ask_forall_listof_fiatcurrency");
Route::get('/test', "TestConvertController@askforall_cryptocurrency");
Route::get('/test/{cryto_currency}', "TestConvertController@askfor_cryptocurrency");
//http://localhost/test_ccoinmarketcap/public/convert_test_to_crypto/1/USD/1
Route::get('/convert_test_to_crypto/{amount}/{cryto_currency}/{fiat}', "TestConvertController@convert_to_crypto");
//http://localhost/test_ccoinmarketcap/public/convert_test_to_fiat/1/1/USD
Route::get('/convert_test_to_fiat/{amount}/{cryto_currency}/{fiat}', "TestConvertController@convert_to_fiat");

