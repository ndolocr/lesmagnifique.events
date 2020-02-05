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

Route::get('/', function () {
    return view('index');
});

/* ADMIN ROUTES */

Route::get('/admin', 'AdminController@dashboard')->name('dashboard');

Route::get('/admin/events', 'AdminController@events')->name('events');
Route::get('/admin/events/add', 'AdminController@eventsAdd')->name('events-add');

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