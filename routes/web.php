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
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/about-us', 'AboutUsContoller@index')->name('about-us');
});

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/digi-admin', function () {
    return view('admin.digi-admin');
});
