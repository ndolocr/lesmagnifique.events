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

Route::get('/admin/events', 'EventsController@index')->name('events-all');
Route::get('/admin/events/add', 'EventsController@create')->name('events-create');
Route::post('/admin/events/store', 'EventsController@store')->name('events-store');

Route::get('/admin/clients', 'AdminController@clients')->name('clients');
Route::get('/admin/clients/add', 'AdminController@clientsAdd')->name('clients-add');

Route::get('/admin/sponsors', 'AdminController@sponsors')->name('sponsors');
Route::get('/admin/sponsors/add', 'AdminController@sponsorsAdd')->name('sponsors-add');

Route::get('/admin/activities', 'AdminController@activities')->name('activities');
Route::get('/admin/activities/add', 'AdminController@activitiesAdd')->name('activities-add');

Route::get('/admin/service-providers', 'AdminController@serviceProviders')->name('service-providers');
Route::get('/admin/service-providers/add', 'AdminController@serviceProvidersAdd')->name('service-providers-add');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');