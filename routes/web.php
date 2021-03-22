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
    Route::get('/', 'HomePageController@index')->name('web');
    Route::get('/contact-footer', 'HomePageController@ContactFooter')->name('contact-footer');
    Route::get('contact/image-logo/{path}', 'HomePageController@ImageLogo');
    Route::get('slide/image/{path}', 'HomePageController@ImageSlide');
    Route::get('/home-our-clients-list', 'HomePageController@OurClientList')->name('home-our-clients-list');

    Route::get('/about/image/{path}', 'AboutUsContoller@ImageBanner');
    Route::get('/about-us', 'AboutUsContoller@index')->name('about-us');

    Route::get('/service/image/{path}', 'ServiceController@ImageBanner');
    Route::get('/service/image-icon/{path}', 'ServiceController@ImageIcon');
    Route::get('/service-list-detail/{id}', 'ServiceController@ServiceListDetail')->name('service-list-detail');
    Route::get('/service', 'ServiceController@index')->name('service');
    Route::post('/sent-budget', 'ServiceController@SentBudget')->name('sent-budget');

    Route::get('/our-clients/image/{path}', 'OurClientsController@ImageBanner');
    Route::get('/company-logo-list/image/{path}', 'OurClientsController@ImageCompanyLogo');
    Route::get('/our-clients', 'OurClientsController@index')->name('our-clients');
    Route::get('/our-clients-list', 'OurClientsController@OurClientList')->name('our-clients-list');
    Route::get('/our-clients-list-tap', 'OurClientsController@OurClientListTap')->name('our-clients-list-tap');
    Route::get('/clients-list/image/{path}', 'OurClientsController@ImageOurClientList')->name('clients-list-img');

    Route::post('/sent-contact', 'ContactController@SentContact')->name('sent-contact');
    Route::get('/contact/image/{path}', 'ContactController@ImageBanner');
    Route::get('/contact', 'ContactController@index')->name('contact');


});

Auth::routes();
Route::group([
    'middleware' => 'auth',
], function () {
    Route::group([
        'prefix' => 'admin',
        'as' => 'admin.'
    ], function () {
        Route::namespace('App\Http\Controllers\Admin')->group(function () {
            Route::resource('/home', 'HomeAdminController');

            Route::get('about/image/{path}', 'AboutController@ImageBanner');
            Route::resource('about', 'AboutController');

            Route::get('service/image/{path}', 'ServiceController@ImageBanner');
            Route::resource('service', 'ServiceController');

            Route::get('service-list/image/{path}', 'ServiceListController@ImageBanner');
            Route::get('service-list/image-icon/{path}', 'ServiceListController@ImageIcon');
            Route::get('service-list-items', 'ServiceListController@List')->name('service-list-items');
            Route::post('service-list-item-delete', 'ServiceListController@ServiceListDelete')->name('service-list-items.delete');
            Route::resource('service-list', 'ServiceListController');

            Route::get('budget-list', 'BudgetController@BudgetList')->name('budget-list');
            Route::resource('budget', 'BudgetController');

            Route::get('our-client/image/{path}', 'OurClientController@ImageBanner');
            Route::resource('our-client', 'OurClientController');

            Route::get('company-logo-list/image/{path}', 'CompanyLogoController@Image');
            Route::get('company-logo-list', 'CompanyLogoController@List')->name('company-logo-list');
            Route::post('company-logo-list-delete', 'CompanyLogoController@LogoListDelete')->name('company-logo-list.delete');
            Route::resource('company-logo', 'CompanyLogoController');

            Route::get('client-list', 'ClientController@List')->name('client-list');
            Route::post('client-list-delete', 'ClientController@ClientListDelete')->name('client-list.delete');
            Route::get('client-list/image/{path}', 'ClientController@Image')->name('client-list-img');
            Route::resource('client', 'ClientController');

            Route::get('contact/image/{path}', 'ContactController@ImageBanner');
            Route::get('contact/image-logo/{path}', 'ContactController@ImageLogo');
            Route::get('contact-list', 'ContactController@ContactList')->name('contact-list');
            Route::get('contact-list-view', 'ContactController@ContactListView')->name('contact-list-view');
            Route::resource('contact', 'ContactController');

            Route::get('slide-list/image/{path}', 'SlideController@Image');
            Route::get('slide-list', 'SlideController@List')->name('slide-list');
            Route::post('slide-list-delete', 'SlideController@LogoListDelete')->name('slide-list.delete');
            Route::resource('slide', 'SlideController');


        });
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

Route::get('/admin/login', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
