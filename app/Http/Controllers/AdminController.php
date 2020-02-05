<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function dashboard(){
    	return view('admin.dashboard');
    }

    public function eventsAdd(){
    	return view('admin.events.events-add');
    }
}
