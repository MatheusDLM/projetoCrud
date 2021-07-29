<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::prefix('v1')->namespace('Api')->group(function(){ //Prefix para o html começar com o /v1/api

    Route::prefix('produto')->name('produto.')->group(function(){

        Route::resource('/', 'ProdutoController'); //Pagina home do  /produto
        Route::put('/{id}','ProdutoController@update')->name('update'); // /produto/id
        Route::delete('/{id}','ProdutoController@destroy')->name('delete'); // /produto/id
       // Route::delete('/{orgIds},','ProdutoController@destroySelect')->name('deleteSelect'); Teste
    });


});


