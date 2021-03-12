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
    Route::get('/service/image-icon/{path}', 'ServiceController@ImageIcon');
    Route::get('/service-list-detail/{id}', 'ServiceController@ServiceListDetail')->name('service-list-detail');
//    Route::get('/service/image-list/{path}', 'ServiceController@ImageIcon');
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

        Route::get('service-list/image/{path}', 'ServiceListController@ImageBanner');
        Route::get('service-list/image-icon/{path}', 'ServiceListController@ImageIcon');
        Route::get('service-list-items', 'ServiceListController@List')->name('service-list-items');
        Route::post('service-list-item-delete', 'ServiceListController@ServiceListDelete')->name('service-list-items.delete');
        Route::resource('service-list', 'ServiceListController');

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
