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

Route::namespace('App\Http\Controllers')->group(function () {
    Route::get('/', 'HomeController@index')->name('web');

    Route::get('/about/image/{path}', 'AboutUsContoller@ImageBanner');
    Route::get('/about-us', 'AboutUsContoller@index')->name('about-us');

    Route::get('/service/image/{path}', 'ServiceController@ImageBanner');
    Route::get('/service', 'ServiceController@index')->name('service');

    Route::get('/our-clients/image/{path}', 'OurClientsController@ImageBanner');
    Route::get('/our-clients', 'OurClientsController@index')->name('our-clients');

    Route::get('/contact', 'ContactController@index')->name('contact');

});

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.'
], function () {
    Route::namespace('App\Http\Controllers\Admin')->group(function () {
        Route::resource('home', 'HomeAdminController');

        Route::get('about/image/{path}', 'AboutController@ImageBanner');
        Route::resource('about', 'AboutController');

        Route::get('service/image/{path}', 'ServiceController@ImageBanner');
        Route::resource('service', 'ServiceController');

        Route::get('our-client/image/{path}', 'OurClientController@ImageBanner');
        Route::resource('our-client', 'OurClientController');
    });
});

//Route::name('admin.')->group(function () {
//    Route::namespace('App\Http\Controllers\Admin')->group(function () {
//        Route::get('home', 'HomeAdminController@index')->name('admin.home');
//    });
//});

Route::get('/digi-admin', function () {
    return view('admin.digi-admin');
});
