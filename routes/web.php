<?php

use Illuminate\Support\Facades\Route;

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


Route::post('create', "App\Http\Controllers\NegozioController@create");

Route::get('/', "App\Http\Controllers\NegozioController@read");
//abilitiamo la root principale ad usare la funzione read di NegozioController

Route::post('update', "App\Http\Controllers\NegozioController@update");

Route::post('delete', "App\Http\Controllers\NegozioController@delete");
