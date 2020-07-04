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


Auth::routes();
// ........................Frontend....................//
Route::get('/', 'FrontendController@index')->name('index');
Route::get('/single/genre/{id}', 'FrontendController@singleGenre')->name('singleGenre');
Route::get('/single/artist/{id}', 'FrontendController@singleArtist')->name('singleArtist');
Route::get('/single/producer/{id}', 'FrontendController@singleProducer')->name('singleProducer');
Route::get('/contact-us', 'FrontendController@contact')->name('contact');
// Route::get('/pricing-plan', 'FrontendController@pricing')->name('pricing');
Route::get('/most-downloaded-songs', 'FrontendController@mostDownloadedSongs')->name('mostDownloadedSongs');
Route::get('/most-Played-songs', 'FrontendController@mostListenedSongs')->name('mostListenedSongs');
Route::get('/new-songs', 'FrontendController@newSongs')->name('newSongs');
Route::get('/most-downloaded-beats', 'FrontendController@mostDownloadedBeats')->name('mostDownloadedBeats');
Route::get('/most-Played-beats', 'FrontendController@mostListenedBeats')->name('mostListenedBeats');
Route::get('/new-beats', 'FrontendController@newBeats')->name('newBeats');
Route::get('/top-producers', 'FrontendController@topProducers')->name('topProducers');
Route::get('/top-artists', 'FrontendController@topArtists')->name('topArtists');
Route::post('/musicpath', 'MusicController@musicpath')->name('musicpath');
Route::get('/search/music', 'FrontendController@searchMusic')->name('searchMusic');
Route::get('/download-music/{id}', 'FrontendController@buymusic')->name('buymusic');

Route::group(['middleware' => 'auth'], function () {


    Route::get('/edit-profile', 'FrontendController@editProfile')->name('editProfile');
    Route::post('/update-profile', 'FrontendController@updateProfile')->name('updateProfile');
    Route::get('/mymusic', 'FrontendController@myMusic')->name('myMusic');
    Route::get('/downloadedMusic', 'FrontendController@downloadedMusic')->name('downloadedMusic');
    Route::get('/downloadMusic', 'FrontendController@downloadMusic')->name('downloadMusic');
    Route::get('/downloadPurchasedMusic/{id}', 'FrontendController@downloadPurchasedMusic')->name('downloadPurchasedMusic');


    // ..................music..............................//
    Route::get('/file/index', 'MusicController@index')->name('file.index');
    Route::get('/file-upload', 'MusicController@create')->name('file.upload');
    Route::post('/file-upload/store', 'MusicController@store')->name('file.store');
    Route::get('/file/edit/{id}', 'MusicController@edit')->name('file.edit');
    Route::post('/file/update/{id}', 'MusicController@update')->name('file.update');
    Route::get('/file/destroy/{id}', 'MusicController@destroy')->name('file.destroy');
    Route::get('/file/destroy-pic/{id}', 'MusicController@destroyPic')->name('file.destroyPic');


    // ..................Category..............................//
    Route::get('/category/index', 'CategoryController@index')->name('category.index');
    Route::post('/category/store', 'CategoryController@store')->name('category.store');
    Route::get('/category/edit/{id}', 'CategoryController@edit')->name('category.edit');
    Route::post('/category/update/{id}', 'CategoryController@update')->name('category.update');
    Route::delete('/category/destroy/', 'CategoryController@destroy')->name('category.destroy');

    // ..................UploadFee..............................//
    Route::get('/uploadFee/index', 'UploadFeeController@index')->name('uploadFee.index');
    Route::post('/uploadFee/store', 'UploadFeeController@store')->name('uploadFee.store');
    Route::get('/uploadFee/edit/{id}', 'UploadFeeController@edit')->name('uploadFee.edit');
    Route::post('/uploadFee/update/{id}', 'UploadFeeController@update')->name('uploadFee.update');
    Route::delete('/uploadFee/destroy/', 'UploadFeeController@destroy')->name('uploadFee.destroy');


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

    Route::resource('roles', 'RoleController');
    Route::resource('users', 'UserController');

    // ..................SEO..............................//
    Route::get('/seo/index', 'SeoController@index')->name('seo.index');
    Route::post('/seo/store', 'SeoController@store')->name('seo.store');
    Route::get('/seo/edit/{id}', 'SeoController@edit')->name('seo.edit');
    Route::post('/seo/update/{id}', 'SeoController@update')->name('seo.update');
    Route::delete('/seo/destroy/', 'SeoController@destroy')->name('seo.destroy');
    Route::delete('/seo/photo/destroy/', 'SeoController@photoDestroy')->name('seo.photo.destroy');


    Route::get('/home', 'HomeController@index')->name('home');



    // ....................Paypal................................//
    Route::get('execute_payment', 'PaymentController@execute_payment')->name('execute_payment');
    Route::get('upload_payment/{id}', 'PaymentController@upload_payment')->name('upload_payment');
    Route::get('payout/{id}', 'PaymentController@payout')->name('createPayment');
    Route::get('cancel_payment', 'PaymentController@cancel_payment')->name('cancel_payment');

    // ..................Slider..............................//
    Route::get('/slider/index', 'SliderController@index')->name('slider.index');
    Route::post('/slider/store', 'SliderController@store')->name('slider.store');
    Route::get('/slider/edit/{id}', 'SliderController@edit')->name('slider.edit');
    Route::post('/slider/update/{id}', 'SliderController@update')->name('slider.update');
    Route::delete('/slider/destroy/', 'SliderController@destroy')->name('slider.destroy');



    // ...............................AdminMusic..........................//
    Route::get('/music/index', 'AdminController@adminMusic')->name('adminMusic.index');
    Route::put('/music/change/status', 'AdminController@changeStatus')->name('adminMusic.changeStatus');
    Route::get('/music/update/{id}', 'AdminController@update')->name('adminMusic.update');
    Route::get('/music/edit/{id}', 'AdminController@edit')->name('adminMusic.edit');
    Route::get('/admin/dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::get('/bulk/emails/', 'AdminController@bulkEmails')->name('bulkEmails');
    Route::post('/bulk/emails/send', 'AdminController@bulkEmailsSend')->name('bulkEmailsSend');
    Route::get('/sitesettings/index', 'AdminController@siteSettingsIndex')->name('siteSettingsIndex');
    Route::get('/sitesettings/edit/{id}', 'AdminController@siteSettingsEdit')->name('siteSettingsEdit');
    Route::post('/sitesettings/store', 'AdminController@siteSettingsStore')->name('siteSettingsStore');
    Route::post('/sitesettings/update/{id}', 'AdminController@siteSettingsUpdate')->name('siteSettingsUpdate');


    // ..................SEO..............................//
    Route::get('/seo/index', 'SeoController@index')->name('seo.index');
    Route::post('/seo/store', 'SeoController@store')->name('seo.store');
    Route::get('/seo/edit/{id}', 'SeoController@edit')->name('seo.edit');
    Route::post('/seo/update/{id}', 'SeoController@update')->name('seo.update');
    Route::delete('/seo/destroy/', 'SeoController@destroy')->name('seo.destroy');
    Route::delete('/seo/photo/destroy/', 'SeoController@photoDestroy')->name('seo.photo.destroy');


    // ..................Withdrawal..............................//
    Route::get('/withdraw/{id}', 'WithdrawalController@sellerWithdrawal')->name('sellerWithdrawal');
    Route::get('/allWithdrawalRequests', 'WithdrawalController@allWithdrawalRequests')->name('allWithdrawalRequests');
});
