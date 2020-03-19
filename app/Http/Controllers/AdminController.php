<?php

namespace App\Http\Controllers;

use App\Event;
use App\Client;
use App\Contact;
use App\HomePageHeader;
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

    public function homePageHeader(){
    	$data = HomePageHeader::all();
    	return view ('admin.home-page-header', compact('data'));
    }

    public function homePageHeaderCreate(){
    	return view ('admin.home-page-header-create');
    }

    public function homePageHeaderStore(Request $request){

    	$this->validate(
    		$request[
    			
    		]
    	);


    	return "Saving Title";
    }

}
