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

/*Route::get('/', function () {
    //return "aqui";
        return view('welcome');
});*/

Route::get('home', function (){
        return view('home');
});

Route::group(['prefix'=>'produtos'], function () {
        Route::get('',['as'=>'produtos', 'uses'=>'ProdutosController@index']);
        Route::get('criar', ['as'=>'produtos.create', 'uses'=>'ProdutosController@create']);
        Route::post('store', ['as'=>'produtos.store', 'uses'=>'ProdutosController@store']);
        Route::get('{id}/del', ['as'=>'produtos.destroy', 'uses'=>'ProdutosController@destroy']);
        Route::get('{id}/edit', ['as'=>'produtos.edit', 'uses'=>'ProdutosController@edit']);
        Route::put('{id}/update', ['as'=>'produtos.update', 'uses'=>'ProdutosController@update']);
});
Route::auth();

Route::get('/home', 'HomeController@index');
