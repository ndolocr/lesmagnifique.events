<?php

namespace App\Http\Controllers;

use App\Event;
use App\Client;
use App\Contact;
use App\HomePageAbout;
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

    /*ABOUT SECTION */
    public function homePageAbout(){
        $data = HomePageAbout::all();
        return view("admin.about-section.home-page-about", compact("data"));
    }

    public function homePageAboutCreate(){
        return view("admin.about-section.home-page-about-create");
    }

    public function homePageAboutStore(Request $request){
        $this->validate(
            $request,
            [
                'title'=>'required',
                'sub_title'=>'required',
                'description'=>'required',
                'first_image'=>'image|nullable|max:1999',
                'third_image'=>'image|nullable|max:1999',
                'second_image'=>'image|nullable|max:1999'
            ]
        );

        //Handle First Image Upload
        if($request->hasFile('first_image')){
            $firstFileNameWithExtension = $request->file('first_image')->getClientOriginalName(); //Get file name with extension
            $firstFilename = pathinfo($firstFileNameWithExtension, PATHINFO_FILENAME); //Get file name witout extension
            $firstExtension = $request->file('first_image')->getClientOriginalExtension(); //Get extension
            $firstFileNameToStore = time().'_1'.'.'.$firstExtension; //Create a eunique filename to store
            $firstPath = $request->file('first_image')->storeAs('public/assets/img/about', $firstFileNameToStore); //Upload feature image 
        }else{ $firstFileNameToStore = 'noSquareImage.jpg'; /* Save default image */ }

        //Handle Second Image Upload
        if($request->hasFile('second_image')){
            $secondFileNameWithExtension = $request->file('second_image')->getClientOriginalName(); //Get file name with extension
            $secondFilename = pathinfo($secondFileNameWithExtension, PATHINFO_FILENAME); //Get file name witout extension
            $secondExtension = $request->file('second_image')->getClientOriginalExtension(); //Get extension
            $secondFileNameToStore = time().'_2'.'.'.$secondExtension; //Create a eunique filename to store
            $secondPath = $request->file('second_image')->storeAs('public/assets/img/about', $secondFileNameToStore); //Upload feature image 
        }else{ $secondFileNameToStore = 'noSquareImage.jpg'; /* Save default image */ }

        //Handle Third Image Upload
        if($request->hasFile('third_image')){
            $thirdFileNameWithExtension = $request->file('third_image')->getClientOriginalName(); //Get file name with extension
            $thirdFilename = pathinfo($thirdFileNameWithExtension, PATHINFO_FILENAME); //Get file name witout extension
            $thirdExtension = $request->file('third_image')->getClientOriginalExtension(); //Get extension
            $thirdFileNameToStore = time().'_3'.'.'.$thirdExtension; //Create a eunique filename to store
            $thirdPath = $request->file('third_image')->storeAs('public/assets/img/about', $thirdFileNameToStore); //Upload feature image 
        }else{ $thirdFileNameToStore = 'noSquareImage.jpg'; /* Save default image */ }

        //Initialize a new Object
        $data = new HomePageAbout;

        //Assign Request values to database fields
        $data->title = $request->get('title');
        $data->first_image = $firstFileNameToStore;
        $data->third_image = $thirdFileNameToStore;
        $data->second_image = $secondFileNameToStore;
        $data->sub_title = $request->get('sub_title');
        $data->description = $request->get('description');

        //Save events data in the database
        $data->save();

        //Redirect User to events page
        return redirect()->route('home-page-about')->with('success', 'Record Successfully Saved!');
    }

    public function homePageAboutEdit($id){
        $data = HomePageAbout::find($id);
        return view('admin.about-section.home-page-about-edit', compact('data'));
    }

    public function homePageAboutUpdate(Request $request, $id){

        //Get Record
        $data = HomePageAbout::find($id);

        $this->validate(
            $request,
            [
                'title'=>'required',
                'sub_title'=>'required',
                'description'=>'required',
                'first_image'=>'image|nullable|max:1999',
                'third_image'=>'image|nullable|max:1999',
                'second_image'=>'image|nullable|max:1999'
            ]
        );

        //Handle First Image Upload
        if($request->hasFile('first_image')){
            $firstFileNameWithExtension = $request->file('first_image')->getClientOriginalName(); //Get file name with extension
            $firstFilename = pathinfo($firstFileNameWithExtension, PATHINFO_FILENAME); //Get file name witout extension
            $firstExtension = $request->file('first_image')->getClientOriginalExtension(); //Get extension
            $firstFileNameToStore = time().'_1'.'.'.$firstExtension; //Create a eunique filename to store
            $firstPath = $request->file('first_image')->storeAs('public/assets/img/about', $firstFileNameToStore); //Upload feature image

            //Save Image
            $data->first_image = $firstFileNameToStore; 
        }

        //Handle Second Image Upload
        if($request->hasFile('second_image')){
            $secondFileNameWithExtension = $request->file('second_image')->getClientOriginalName(); //Get file name with extension
            $secondFilename = pathinfo($secondFileNameWithExtension, PATHINFO_FILENAME); //Get file name witout extension
            $secondExtension = $request->file('second_image')->getClientOriginalExtension(); //Get extension
            $secondFileNameToStore = time().'_2'.'.'.$secondExtension; //Create a eunique filename to store
            $secondPath = $request->file('second_image')->storeAs('public/assets/img/about', $secondFileNameToStore); //Upload feature image 

            //Save Image
            $data->second_image = $secondFileNameToStore; 
        }

        //Handle Third Image Upload
        if($request->hasFile('third_image')){
            $thirdFileNameWithExtension = $request->file('third_image')->getClientOriginalName(); //Get file name with extension
            $thirdFilename = pathinfo($thirdFileNameWithExtension, PATHINFO_FILENAME); //Get file name witout extension
            $thirdExtension = $request->file('third_image')->getClientOriginalExtension(); //Get extension
            $thirdFileNameToStore = time().'_3'.'.'.$thirdExtension; //Create a eunique filename to store
            $thirdPath = $request->file('third_image')->storeAs('public/assets/img/about', $thirdFileNameToStore); //Upload feature image 

            //Save Image
            $data->third_image = $thirdFileNameToStore; 
        }

        //Assign Request values to database fields
        $data->title = $request->get('title');       
        $data->sub_title = $request->get('sub_title');
        $data->description = $request->get('description');

        $data->save();

        return redirect()->route('home-page-about')->with('success', 'Record Successfully Updated!');
    }

    public function homePageAboutDelete($id){
        $data = HomePageAbout::find($id);

        return view('admin.about-section.home-page-about-delete', compact('data'));
    }
}
