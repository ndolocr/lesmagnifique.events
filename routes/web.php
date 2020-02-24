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

Route::get('/', function () {
	$events = Event::orderBy('start_date', 'DESC')->limit(3)->get();
    return view('index', compact('events'));
});

/* ADMIN ROUTES */

Route::get('/admin', 'AdminController@dashboard')->name('dashboard');


//CLIENT ROUTES
Route::get('/admin/clients', 'ClientController@index')->name('clients-all');
Route::get('/admin/clients/add', 'ClientController@create')->name('clients-create');
Route::post('/admin/clients/store', 'ClientController@store')->name('clients-store');
Route::get('/admin/clients/edit/{id}', 'ClientController@edit')->name('clients-edit');
Route::put('/admin/clients/update/{id}', 'ClientController@update')->name('clients-update');

//SPONSOR ROUTES
Route::get('/admin/sponsors', 'SponsorController@index')->name('sponsors');
Route::get('/admin/sponsors/add', 'SponsorController@create')->name('sponsors-add');

//ACTIVITY ROUTES
Route::get('/admin/activities', 'ActivityController@index')->name('activities');
Route::get('/admin/activities/add', 'ActiivityController@create')->name('activities-add');

//OUR SERVICES ROUTES
Route::get('/admin/our-services', 'ServicesController@index')->name('our-services');
Route::get('/admin/our-services/add', 'ServicesController@create')->name('our-services-add');

//EVENTS ROUTES
Route::get('/admin/events', 'EventsController@index')->name('events-all');
Route::get('/admin/events/add', 'EventsController@create')->name('events-create');
Route::post('/admin/events/store', 'EventsController@store')->name('events-store');
Route::get('/admin/events/edit/{id}', 'EventsController@edit')->name('events-edit');
Route::get('/admin/events/show/{id}', 'EventsController@show')->name('events-show');
Route::get('/admin/events/delete/{id}', 'EventsController@delete')->name('events-delete');
Route::put('/admin/events/update/{id}', 'EventsController@update')->name('events-update');
Route::delete('/admin/events/destroy/{id}', 'EventsController@destroy')->name('events-destroy');

//SERVICE PROVIDER ROUTES
Route::get('/admin/service-providers', 'ServiceProviderController@index')->name('service-providers');
Route::get('/admin/service-providers/add', 'ServiceProviderController@create')->name('service-providers-add');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');