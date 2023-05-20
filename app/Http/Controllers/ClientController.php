<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $client = Client::all();
        //return response()->json($client);
        return view('gestion-client')->with('clients',$client);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

            $client = new Client();
            $client->nomClient = $request->input('nomClient');
            $client->prenomClient = $request->input('prenomClient');
            $client->gsm = $request->input('gsm');
            $client->nationnalite = $request->input('nationnalite');
            $client->cin = $request->input('cin');
            $client->numPasseport = $request->input('numPasseport');
            $client->save();
            return redirect()->back()->with('success', 'Data added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $client = Client::find($id);
        return response()->json($client);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $client = Client::find($id);
        $client->nomClient = $request->input('nomClient');
        $client->prenomClient = $request->input('prenomClient');
        $client->gsm = $request->input('gsm');
        $client->nationnalite = $request->input('nationnalite');
        $client->cin = $request->input('cin');
        $client->numPasseport = $request->input('numPasseport');
        $client->save();
        return redirect()->back()->with('success', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $client = Client::find($id);
        if($client){
            $client->delete();
            return redirect()->back()->with('success', 'Data deleted successfully');
        }
        return redirect()->back()->with('error', 'Data not found');
    }
}
