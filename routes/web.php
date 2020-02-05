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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');