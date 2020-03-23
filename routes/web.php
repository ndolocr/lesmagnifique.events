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

use App\Event;
use App\Service;

/* HOME PAGE ROUTES */
Route::get('/', 'HomeController@index')->name('index');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/events', 'HomeController@events')->name('events');
Route::get('/event/show/{id}', 'HomeController@eventShow')->name('event-show');

/* ADMIN ROUTES */

Route::get('/admin', 'AdminController@dashboard')->name('dashboard');

Route::get('/admin/pages/home/header', 'AdminController@homePageHeader')->name('home-page-header');
Route::post('/admin/pages/home/header/store', 'AdminController@homePageHeaderStore')->name('home-page-header-store');
Route::get('/admin/pages/home/header/edit/{id}', 'AdminController@homePageHeaderEdit')->name('home-page-header-edit');
Route::get('/admin/pages/home/header/create', 'AdminController@homePageHeaderCreate')->name('home-page-header-create');
Route::get('/admin/pages/home/header/delete/{id}', 'AdminController@homePageHeaderDelete')->name('home-page-header-delete');
Route::put('/admin/pages/home/header/update/{id}', 'AdminController@homePageHeaderUpdate')->name('home-page-header-update');
Route::delete('/admin/pages/home/header/destroy/{id}', 'AdminController@homePageHeaderDestroy')->name('home-page-header-destroy');

//CONTACT ROUTES
Route::post('/', 'ContactController@store')->name('contact-store');
Route::get('/admin/message/inbox', 'ContactController@index')->name('message-inbox');
Route::get('/admin/message/show/{id}', 'ContactController@show')->name('message-show');

//CLIENT ROUTES
Route::get('/admin/clients', 'ClientController@index')->name('clients-all');
Route::post('/admin/clients/store', 'ClientController@store')->name('clients-store');
Route::get('/admin/clients/edit/{id}', 'ClientController@edit')->name('clients-edit');
Route::get('/admin/clients/create', 'ClientController@create')->name('clients-create');
Route::get('/admin/clients/delete/{id}', 'ClientController@delete')->name('clients-delete');
Route::put('/admin/clients/update/{id}', 'ClientController@update')->name('clients-update');
Route::delete('/admin/clients/destroy/{id}', 'ClientController@destroy')->name('clients-destroy');

//SPONSOR ROUTES
Route::get('/admin/sponsors', 'SponsorController@index')->name('sponsors');
Route::get('/admin/sponsors/create', 'SponsorController@create')->name('sponsors-create');

//ACTIVITY ROUTES
Route::get('/admin/activities', 'ActivityController@index')->name('activities');
Route::get('/admin/activities/create', 'ActiivityController@create')->name('activities-create');

//OUR SERVICES ROUTES
Route::get('/admin/services', 'ServicesController@index')->name('services-all');
Route::post('/admin/services/store', 'ServicesController@store')->name('services-store');
Route::get('/admin/services/edit/{id}', 'ServicesController@edit')->name('services-edit');
Route::get('/admin/services/create', 'ServicesController@create')->name('services-create');
Route::get('/admin/services/delete/{id}', 'ServicesController@delete')->name('services-delete');
Route::put('/admin/services/update/{id}', 'ServicesController@update')->name('services-update');
Route::delete('/admin/services/destroy/{id}', 'ServicesController@destroy')->name('services-destroy');

//EVENTS ROUTES
Route::get('/admin/events', 'EventsController@index')->name('events-all');
Route::post('/admin/events/store', 'EventsController@store')->name('events-store');
Route::get('/admin/events/edit/{id}', 'EventsController@edit')->name('events-edit');
Route::get('/admin/events/show/{id}', 'EventsController@show')->name('events-show');
Route::get('/admin/events/create', 'EventsController@create')->name('events-create');
Route::get('/admin/events/delete/{id}', 'EventsController@delete')->name('events-delete');
Route::put('/admin/events/update/{id}', 'EventsController@update')->name('events-update');
Route::delete('/admin/events/destroy/{id}', 'EventsController@destroy')->name('events-destroy');

//SERVICE PROVIDER ROUTES
Route::get('/admin/service-providers', 'ServiceProviderController@index')->name('service-providers');
Route::get('/admin/service-providers/create', 'ServiceProviderController@create')->name('service-providers-create');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');