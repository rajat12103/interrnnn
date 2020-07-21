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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

	Route::match(['get','post'],'/add-books','BooksController@addbooks');
	Route::match(['get','post'],'/view-books','BooksController@viewbooks');
	Route::match(['get','post'],'/edit-Books/{id}','BooksController@editBooks');
	Route::match(['get','post'],'/delete-Books/{id}','BooksController@deletebooks');
	Route::get('/logout','HomeController@logout');

	Route::get('/viewall','HomeController@admin');
