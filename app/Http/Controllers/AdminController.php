<?php

namespace App\Http\Controllers;

use App\Event;
use App\Client;
use App\Contact;
use App\HomePageHeaderTitle;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function dashboard(){
        $events = Event::all();
        $events_count = $events->count();

        $clients = Client::all();
        $clients_count = $clients->count();

        $messages = Contact::all();
        $messages_count = $messages->count();

    	return view('admin.dashboard', compact('events_count', 'clients_count', 'messages_count'));
    }

    public function homePageHeaderTitle(){
    	$data = HomePageHeaderTitle::all();
    	return view ('admin.home-page-header-title', compact('data'));
    }

    public function homePageHeaderTitleCreate(){
    	return view ('admin.home-page-header-title-create');
    }

    public function homePageHeaderTitleStore($request){
    	return "Saving Title";
    }

}
