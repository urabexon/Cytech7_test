<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;

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

Auth::routes();
Route::get('index','App\Http\Controllers\ProductController@index')->name('index');
Route::get('create','App\Http\Controllers\ProductController@create');
Route::get('/show/{id}','App\Http\Controllers\ProductController@show')->name('index.show');
Route::get('/edit/{id}','App\Http\Controllers\ProductController@edit')->name('index.edit');
Route::post('store','App\Http\Controllers\ProductController@store')->name('index.store');
Route::post('/update/{id}','App\Http\Controllers\ProductController@update')->name('index.update');
Route::post('/destroy/{id}','App\Http\Controllers\ProductController@destroy')->name('index.destroy');