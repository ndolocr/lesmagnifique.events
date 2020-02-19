<?php


namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::orderBy('created_at')->paginate(6);
        return view('admin.events-all', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.events-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        //Perform Validations
        $this->validate(
            $request,
            [
            'title'=>'required',
            'end_date'=>'required',
            'start_date'=>'required',
            'description'=>'required',
            'feature_image'=>'image|nullable|max:1999'
            ]
        );

        //Handle Feature Image Upload
        if($request->hasFile('feature_image')){
            //Get file name with extension
            $fileNameWithExtension = $request->file('feature_image')->getClientOriginalName();

            //Get file name witout extension
            $filename = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);

            //get extension
            $extension = $request->file('feature_image')->getClientOriginalExtension();

            //Create a eunique filename to store
            $fileNameToStore = time().'.'.$extension;

            //Upload feature image
            $path = $request->file('feature_image')->storeAs('public/assets/img/events', $fileNameToStore); 
        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        //Initialize a new Event
        $event = new Event;

        //Assign Request values to database fields
        $event->title = $request->get('title');
        $event->feature_image = $fileNameToStore;
        $event->end_date = $request->get('end_date');
        $event->delegates = $request->get('delegates');
        $event->start_date = $request->get('start_date');
        $event->description = $request->get('description');
        $event->nationalities = $request->get('nationality');

        //Save events data in the database
        $event->save();

        //Redirect User to events page
        return redirect()->route('events-all')->with('success', 'Record Successfully Saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $events = Event::find($id);
        return view('admin.events-edit', compact('events'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Initialize a new Event
        $event =  Event::find($id);

        //Perform Validations
        $this->validate(
            $request,
            [
            'title'=>'required',
            'end_date'=>'required',
            'start_date'=>'required',
            'description'=>'required',
            'feature_image'=>'image|nullable|max:1999'
            ]
        );

        //Handle Feature Image Upload
        if($request->hasFile('feature_image')){
            //Get file name with extension
            $fileNameWithExtension = $request->file('feature_image')->getClientOriginalName();

            //Get file name witout extension
            $filename = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);

            //get extension
            $extension = $request->file('feature_image')->getClientOriginalExtension();

            //Create a eunique filename to store
            $fileNameToStore = time().'.'.$extension;

            //Upload feature image
            $path = $request->file('feature_image')->storeAs('public/assets/img/events', $fileNameToStore); 

            //Assign Featured image to uploaded image
            $event->feature_image = $fileNameToStore;
        }        

        //Assign Request values to database fields
        $event->title = $request->get('title');
        $event->end_date = $request->get('end_date');
        $event->delegates = $request->get('delegates');
        $event->start_date = $request->get('start_date');
        $event->description = $request->get('description');
        $event->nationalities = $request->get('nationality');

        //Save events data in the database
        $event->save();

        //Redirect User to events page
        return redirect()->route('events-all')->with('success', 'Record Successfully Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $events = Event::find($id);

        return view('admin.events-delete', compact('events'));
    }

    public function destroy($id)
    {
        //
    }
}
