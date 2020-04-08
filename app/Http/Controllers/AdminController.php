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
    	return view ('admin.header-section.home-page-header', compact('data'));
    }

    public function homePageHeaderCreate(){
    	return view ('admin.header-section.home-page-header-create');
    }


    public function homePageHeaderEdit($id){
    	$data = HomePageHeader::find($id);
    	return view('admin.header-section.home-page-header-edit', compact('data'));
    }

    public function homePageHeaderUpdate(Request $request, $id){
    	$data = HomePageHeader::find($id);

    	//Validations
    	$this->validate(
    		$request,
            [
                'title'=>'required',
                'sub_title'=>'required',
                'cover_image'=>'image|nullable|max:1999'
            ]
    	);

    	//Handle Feature Image Upload
        if($request->hasFile('cover_image')){
            //Get file name with extension
            $fileNameWithExtension = $request->file('cover_image')->getClientOriginalName();

            //Get file name witout extension
            $filename = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);

            //get extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();

            //Create a eunique filename to store
            $fileNameToStore = time().'.'.$extension;

            //Upload feature image
            $path = $request->file('cover_image')->storeAs('public/assets/img/homepage', $fileNameToStore); 

            $data->cover_image = $fileNameToStore;
        }

        //Assign Request values to database fields
        $data->title = $request->get('title');
        $data->sub_title = $request->get('sub_title');

        //Save events data in the database
        $data->save();

        //Redirect User to events page
        return redirect()->route('home-page-header')->with('success', 'Record Successfully Updated!'); 

    }

    public function homePageHeaderStore(Request $request){

    	$this->validate(
    		$request,
            [
                'title'=>'required',
                'sub_title'=>'required',
                'cover_image'=>'image|nullable|max:1999'
            ]
    	);

    	//Handle Feature Image Upload
        if($request->hasFile('cover_image')){
            //Get file name with extension
            $fileNameWithExtension = $request->file('cover_image')->getClientOriginalName();

            //Get file name witout extension
            $filename = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);

            //get extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();

            //Create a eunique filename to store
            $fileNameToStore = time().'.'.$extension;

            //Upload feature image
            $path = $request->file('cover_image')->storeAs('public/assets/img/homepage', $fileNameToStore); 
        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        //Initialize a new Event
        $data = new HomePageHeader;

        //Assign Request values to database fields
        $data->title = $request->get('title');
        $data->cover_image = $fileNameToStore;
        $data->sub_title = $request->get('sub_title');

        //Save events data in the database
        $data->save();

        //Redirect User to events page
        return redirect()->route('home-page-header')->with('success', 'Record Successfully Saved!');
    }

    public function homePageHeaderDelete($id){
    	$data = HomePageHeader::find($id);

    	return view('admin.header-section.home-page-header-delete', compact('data'));
    }

    public function homePageHeaderDestroy($id){
    	$data = HomePageHeader::find($id);

    	$data->delete();

        return redirect()->route('home-page-header')->with('success', 'Record Successfully Deleted!');
    }

}
