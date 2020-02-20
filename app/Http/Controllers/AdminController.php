<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function dashboard(){
        $events = Event::all();
        $events_count = $events->count();

    	return view('admin.dashboard', compact('events_count'));
    }

}
