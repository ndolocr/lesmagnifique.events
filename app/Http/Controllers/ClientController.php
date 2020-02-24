<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::orderBy('created_at')->paginate(6);
        return view('admin.clients-all', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.client-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //Validation
        $this->validate(
            $request,
            [
                'name' => 'required',
                'town' => 'required',
                'email' => 'required',
                'address' => 'required',
                'telephone' => 'required'
            ]
        );

        $client = new Client;

        $client->event_id = 1;
        $client->name = $request->get('name');
        $client->town = $request->get('town');
        $client->email = $request->get('email');
        $client->address = $request->get('address');
        $client->area_code = $request->get('area_code');
        $client->telephone = $request->get('telephone');

        $client->save();

        return redirect()->route('clients-all')->with('success', 'Record Successfully Saved!');

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
        $clients = Client::find($id);
        return view('admin.client-edit', compact('clients'));
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
        $client = Client::find($id);

        //Validation
        $this->validate(
            $request,
            [
                'name' => 'required',
                'town' => 'required',
                'email' => 'required',
                'address' => 'required',
                'telephone' => 'required'
            ]
        );

        $client->event_id = 1;
        $client->name = $request->get('name');
        $client->town = $request->get('town');
        $client->email = $request->get('email');
        $client->address = $request->get('address');
        $client->area_code = $request->get('area_code');
        $client->telephone = $request->get('telephone');

        $client->save();

        return redirect()->route('clients-all')->with('success', 'Record Successfully Saved!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
