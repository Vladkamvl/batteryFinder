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

Route::get('/', 'MainController@index')->name('index');
Route::get('/find', 'MainController@find')->name('find');
Route::get('/find_by_size', 'MainController@findBySize')->name('findBySize');
Route::get('/about', 'MainController@about')->name('about');
Route::get('/find_size', 'MainController@findSize')->name('findSize');
