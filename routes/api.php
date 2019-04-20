<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/nome/{nome}/{n}', function ($nome, $n) {
    $s = '';
    for ($i=0; $i<$n; $i++)
        $s .= "<h1>Olá, $nome!</h1>";
    echo $s;
 });

 Route::post('/hello1', function () {
    return 'Hello World1 (POST)';
 });
 
 Route::delete('/hello1', function () {
    return 'Hello World1 (DELETE)';
 });
 
 Route::put('/hello1', function () {
    return 'Hello World1 (PUT)';
 });
 
 Route::patch('/hello1', function () {
    return 'Hello World1 (PATCH)';
 });
 
 Route::options('/hello1', function () {
    return 'Hello World1 (OPTIONS)';
 });

 Route::get('/nome/{id}', "MeuControlador@getNameByID");

 Route::post('/customer/new', "CustomerController@store");
 Route::get('/customer/all', "CustomerController@all");
 Route::get('/customer/{id}', "CustomerController@getCustomerByID");
 Route::put('/customer/update/{id}', "CustomerController@update");
 Route::delete('/customer/delete/{id}', "CustomerController@delete");