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

Route::get('/teste', function () {
    return 'Hello World';
});


Route::prefix('app')->group(function(){
    Route::get('/', function(){
        return 'Página Principal do APP';
    });
    Route::get('profile', function(){
        return 'Página Profile';
    });
    Route::get('about', function(){
        return 'Página About';
    });
});


Route::get('/nome', 'MeuControlador@getNome');

Route::get('/nome/{id}', "MeuControlador@getNameByID");