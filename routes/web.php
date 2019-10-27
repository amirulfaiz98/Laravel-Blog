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
Route::get('/article/create', 'ArticleController@create')->name('articles:create');
Route::post('/article/create', 'ArticleController@store')->name('articles:store');
Route::get('/articles/edit/{article}', 'ArticleController@edit')->name('articles:edit');
Route::post('/articles/edit/{article}', 'ArticleController@update')->name('articles:update');
Route::get('/articles/delete/{article}', 'ArticleController@destroy')->name('articles:delete');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
