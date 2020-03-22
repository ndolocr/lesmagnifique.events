<?php

namespace App\Http\Controllers;

use App\Event;
use App\Service;
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
        $homePageHeader = homePageHeader::orderBy('created_at', 'DESC')->limit(1)->get();

        return view('index', compact('events', 'services', 'homePageHeader'));
    }
    
    public function about(){ return view('front-end.about'); }

    public function eventShow($id){
        $events = Event::find($id);

        return view('front-end.event-show', compact('events'));
    }
}
