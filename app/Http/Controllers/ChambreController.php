<?php

namespace App\Http\Controllers;

use App\Models\Chambre;
use Illuminate\Http\Request;
class ChambreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chambre = Chambre::all();
        //return response()->json($chambre);
        return view('gestion-chambre')->with('chambres',$chambre);
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
        $chambre = new Chambre();

        $chambre->prix = $request->input('prix');
        $chambre->numChambre = $request->input('numChambre');
        $chambre->dispo = $request->input('dispo');
        $chambre->save();
        return redirect()->back()->with('success', 'Data added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $chambre = Chambre::find($id);
        return response()->json($chambre);
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
        $chambre = Chambre::find($id);

        $chambre->prix = $request->input('prix');
        $chambre->numChambre = $request->input('numChambre');
        $chambre->dispo = $request->input('dispo');

        $chambre->save();
        return redirect()->back()->with('success', 'Data droped successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $chambre = Chambre::find($id);

        if($chambre){
            $chambre->delete();
            return redirect()->back()->with('success', 'Data droped successfully');
        }
        return response()->json(['message' => 'Impossible de trouver la catégorie'], 404);
    }
}
