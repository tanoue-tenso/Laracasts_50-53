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

Route::view('/', 'welcome');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/conversations', 'ConversationsController@index');
Route::get('/conversations/{conversation}', 'ConversationsController@show');

Auth::routes();

