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


Route::get('/', 'App\Http\Controllers\PageController@index');

Route::get('/datapenduduk', 'App\Http\Controllers\CitizensController@index');
Route::get('/penduduk/create', 'App\Http\Controllers\CitizensController@create');
Route::get('/datapenduduk/{citizen}', 'App\Http\Controllers\CitizensController@show');
Route::post('/datapenduduk', 'App\Http\Controllers\CitizensController@store');
Route::delete('/penduduk/{citizen}', 'App\Http\Controllers\CitizensController@destroy');
Route::get('/penduduk/{citizen}/edit','App\Http\Controllers\CitizensController@edit');
Route::patch('/penduduk/{citizen}','App\Http\Controllers\CitizensController@update');