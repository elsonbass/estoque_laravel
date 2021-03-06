<?php

Route::get('/', 'ProdutoController@lista');

Route::get('/produtos', 'ProdutoController@lista');
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra');
Route::get('/produtos/editar/{id}', 'ProdutoController@editar');
Route::get('/produtos/remove/{id}', 'ProdutoController@remove');
Route::get('/produtos/novo', 'ProdutoController@novo');
Route::post('/produtos/adiciona', 'ProdutoController@adiciona');

Route::get('/login', 'LoginController@form');
Route::post('/login', 'LoginController@login');

//Auth::routes();

Route::get('/home', 'HomeController@index');

//Route::controllers([
//    'auth' => 'Auth\AuthController',
//    'passwod' => 'Auth\PasswordController',
//]);
