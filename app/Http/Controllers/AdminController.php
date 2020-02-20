<?php

namespace App\Http\Controllers;

use App\Event;
use App\Client;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function dashboard(){
        $events = Event::all();
        $events_count = $events->count();

        $clients = Client::all();
        $clients_count = $clients->count();

    	return view('admin.dashboard', compact('events_count', 'clients_count'));
    }

}
