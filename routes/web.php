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
    Route::get('/about-us', 'AboutUsContoller@index')->name('about-us');
    Route::get('/service', 'ServiceController@index')->name('service');
    Route::get('/contact', 'ContactController@index')->name('contact');
});

// Route::get('/', function () {
//     return view('web');
// });

Route::get('/digi-admin', function () {
    return view('admin.digi-admin');
});
