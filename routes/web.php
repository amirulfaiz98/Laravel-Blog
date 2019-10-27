<?php

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
Route::resource('article', 'ArticleController');

Route::get('/article', 'ArticleController@index')->name('articles:index');
Route::get('/create', 'ArticleController@create')->name('articles:create');
Route::post('/create', 'ArticleController@store')->name('articles:store');
Route::get('/edit', 'ArticleController@edit')->name('articles:edit');
Route::post('/edit', 'ArticleController@update')->name('articles:update');
//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
