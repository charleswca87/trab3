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



//Chamando o controllador
Route::get('/', 'ProdutoController@produtos');

//Rotas para parte de Produtos
Route::get('/produtos', 'ProdutoController@produtos');
Route::get('/produtos/form-adicionar', 'ProdutoController@formAdicionar');
Route::post('/produtos/adicionar', 'ProdutoController@adicionar');
Route::get('/produtos/excluir/{id}', 'ProdutoController@excluir');
Route::get('/produtos/editar/{id}', 'ProdutoController@form_editar');
Route::post('/produtos/editar', 'ProdutoController@editar');

//Rotas para parte de Fabricante
Route::get('/fabricantes', 'FabricanteController@fabricantes');
Route::get('/fabricantes/form-adicionar', 'FabricanteController@formAdicionar');
Route::post('/fabricantes/adicionar', 'FabricanteController@adicionar');
Route::get('/fabricantes/excluir/{id}', 'FabricanteController@excluir');
Route::get('/fabricantes/editar/{id}', 'FabricanteController@form_editar');
Route::post('/fabricantes/editar', 'FabricanteController@editar');
