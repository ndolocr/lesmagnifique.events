<?php

namespace App\Http\Controllers;

use App\Event;
use App\Service;
use App\homePageAbout;
use App\homePageHeader;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }
    */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $services = Service::orderBy('name', 'ASC')->limit(4)->get();
        $events = Event::orderBy('start_date', 'DESC')->limit(3)->get();
        $homePageAbout = homePageAbout::orderBy('created_at', 'DESC')->limit(1)->get();
        $homePageHeader = homePageHeader::orderBy('created_at', 'DESC')->limit(1)->get();

        return view('index', compact('events', 'services', 'homePageHeader', 'homePageAbout'));
    }
    
    public function about(){ return view('front-end.about'); }

    public function events(){
        $events_count = Event::count();
        $events_skip = 1;
        $events_limit = $events_count - $events_skip;

        $events = Event::orderBy('start_date', 'DESC')->skip($events_skip)->take($events_limit)->get();
        
        $first_event = Event::orderBy('start_date', 'DESC')->limit(1)->get();

        $services = Service::all();

        return view('front-end.events', compact('events', 'first_event', 'services'));
    }

    public function eventShow($id){
        $event = Event::find($id);

        $events = Event::all();
        $services = Service::all();

        return view('front-end.event-show', compact('event', 'events', 'services'));
    }

    public function services(){
        $services = Service::orderBy('created_at', 'DESC')->get();

        return view('front-end.services', compact('services'));
    }
}
