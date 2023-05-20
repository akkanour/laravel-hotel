<?php

namespace App\Http\Controllers;

use App\Models\Personnel;
use Illuminate\Http\Request;

class PersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personnel = Personnel::all();
        //return response()->json($personnel);
        return view('gestion-personnel')->with('personnels',$personnel);
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
        $personnel = new Personnel();
        $personnel->nom = $request->input('nom');
        $personnel->prenom = $request->input('prenom');
        $personnel->adresse = $request->input('adresse');
        $personnel->numTel = $request->input('numTel');
        $personnel->typePoste = $request->input('typePoste');
        $personnel->save();
        return redirect()->back()->with('success', 'Data added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $personnel = Personnel::find($id);
        return response()->json($personnel);
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
        $personnel = Personnel::find($id);
        $personnel->nom = $request->input('nom');
        $personnel->prenom = $request->input('prenom');
        $personnel->adresse = $request->input('adresse');
        $personnel->numTel = $request->input('numTel');
        $personnel->typePoste = $request->input('typePoste');
        $personnel->save();
        return redirect()->back()->with('success', 'Data updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $personnel = Personnel::find($id);
        if($personnel){
        $personnel->delete();
        return redirect()->back()->with('success', 'Data deleted successfully');
    }
    return response()->json(['error' => 'Data not found']);
    }
}
