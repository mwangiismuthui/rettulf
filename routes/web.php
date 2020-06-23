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



Route::get('/', 'FrontendController@index')->name('index');
Auth::routes();

// ..................music..............................//
Route::get('/file/index', 'MusicController@index')->name('file.index');
Route::get('/file-upload', 'MusicController@create')->name('file.upload');
Route::post('/file-upload/store', 'MusicController@store')->name('file.store');
Route::get('/file/edit/{id}', 'MusicController@edit')->name('file.edit');
Route::post('/file/update/{id}', 'MusicController@update')->name('file.update');
Route::delete('/file/destroy/', 'MusicController@destroy')->name('file.destroy');


// ..................Category..............................//
Route::get('/category/index', 'CategoryController@index')->name('category.index');
Route::post('/category/store', 'CategoryController@store')->name('category.store');
Route::get('/category/edit/{id}', 'CategoryController@edit')->name('category.edit');
Route::post('/category/update/{id}', 'CategoryController@update')->name('category.update');
Route::delete('/category/destroy/', 'CategoryController@destroy')->name('category.destroy');


// ..................Genre..............................//
Route::get('/genre/index', 'GenreController@index')->name('genre.index');
Route::post('/genre/store', 'GenreController@store')->name('genre.store');
Route::get('/genre/edit/{id}', 'GenreController@edit')->name('genre.edit');
Route::post('/genre/update/{id}', 'GenreController@update')->name('genre.update');
Route::delete('/genre/destroy/', 'GenreController@destroy')->name('genre.destroy');

// ..................Key..............................//
Route::get('/key/index', 'KeyController@index')->name('key.index');
Route::post('/key/store', 'KeyController@store')->name('key.store');
Route::get('/key/edit/{id}', 'KeyController@edit')->name('key.edit');
Route::post('/key/update/{id}', 'KeyController@update')->name('key.update');
Route::delete('/key/destroy/', 'KeyController@destroy')->name('key.destroy');



// ..................Rbac..............................//

Route::resource('roles','RoleController');
Route::resource('users','UserController');

// ..................SEO..............................//
Route::get('/seo/index', 'SeoController@index')->name('seo.index');
Route::post('/seo/store', 'SeoController@store')->name('seo.store');
Route::get('/seo/edit/{id}', 'SeoController@edit')->name('seo.edit');
Route::post('/seo/update/{id}', 'SeoController@update')->name('seo.update');
Route::delete('/seo/destroy/', 'SeoController@destroy')->name('seo.destroy');
Route::delete('/seo/photo/destroy/', 'SeoController@photoDestroy')->name('seo.photo.destroy');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/dashboard', 'AdminController@dashboard')->name('dashboard');
