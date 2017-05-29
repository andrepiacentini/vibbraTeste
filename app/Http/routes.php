<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
       return view('welcome');

});

Route::get('login',                   ['as' => 'login.view',                'uses'    => 'LoginController@create']);
Route::post('loginStore',             ['as' => 'login.store',               'uses'    => 'LoginController@store']);
Route::get('cadastro',                ['as' => 'cadastro.view',             'uses'    => 'CadastroController@create']);
Route::post('cadastroStore',          ['as' => 'cadastro.store',            'uses'    => 'CadastroController@store']);


Route::group(['middleware' => 'auth'], function () {

    Route::get('home',                      ['as' => 'home.home',                 'uses'    => 'HomeController@create']);
    Route::get('estabelecimento',           ['as' => 'estabelimento.view',        'uses'    => 'EstabelecimentoController@create']);
    Route::get('estabelecimentoList',       ['as' => 'estabelimento.list',        'uses'    => 'EstabelecimentoController@index']);
    Route::post('estabelecimentoStore',     ['as' => 'estabelimento.store',       'uses'    => 'EstabelecimentoController@store']);
    Route::get('estabelecimento',           ['as' => 'estabelimento.view',        'uses'    => 'EstabelecimentoController@create']);

    Route::get('avaliacao',                 ['as' => 'avaliacao.view',             'uses'    => 'AvaliacaoController@create']);
    Route::get('avaliacaoShow/{id}',        ['as' => 'avaliacao.show',             'uses'    => 'AvaliacaoController@show']);
    Route::post('avaliacaoStore',           ['as' => 'avaliacao.store',            'uses'    => 'AvaliacaoController@store']);
    Route::get('avaliacaoMinha',            ['as' => 'avaliacao.minha',            'uses'    => 'AvaliacaoController@minhasAvaliacoes']);
    Route::get('avaliacaoLista',            ['as' => 'avaliacao.lista',            'uses'    => 'AvaliacaoController@index']);
    Route::get('avaliacaoCompleta/{id}',    ['as' => 'avaliacao.completa',         'uses'    => 'AvaliacaoController@avaliacaoCompleta']);


});
