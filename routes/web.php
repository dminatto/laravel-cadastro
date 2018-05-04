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

Route::get('/', 'ProdutoController@lista');

Route::get('/mostra', 'ProdutoController@mostra');

Route::get('/novo', 'ProdutoController@novo');

Route::post('/adiciona', 'ProdutoController@adiciona');

Route::get('/remove/{id}', 'ProdutoController@remove');

Route::get('/detalhes', 'ProdutoCaracteristicaController@novo');

Route::post('/adicionadetalhe', 'ProdutoCaracteristicaController@adiciona');

Route::get('/exibir/{id}', 'ProdutoCaracteristicaController@exibir');
