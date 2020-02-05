<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function dashboard(){
    	return view('admin.dashboard');
    }

    public function events(){
    	return view('admin.events');
    }

    public function eventsAdd(){
    	return view('admin.events-add');
    }

    public function clients(){
    	return view('admin.clients');
    }

    public function clientsAdd(){
    	return view('admin.clients-add');
    }

    public function activities(){
    	return view('admin.activities');
    }

    public function activitiesAdd(){
    	return view('admin.activities-add');
    }

    public function sponsors(){
    	return view('admin.sponsors');
    }

    public function sponsorsAdd(){
    	return view('admin.sponsors-add');
    }

    public function serviceProviders(){
    	return view('admin.service-providers');
    }

    public function serviceProvidersAdd(){
    	return view('admin.service-providers-add');
    }
}
