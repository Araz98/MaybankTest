<?php

use Illuminate\Support\Facades\Route;
use App\https\Controllers\TestController;

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

Route::get('/list','App\Http\Controllers\TestController@index');

Route::get('/search','App\Http\Controllers\TestController@search');