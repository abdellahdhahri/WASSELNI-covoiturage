<?php

namespace App\Http\Controllers;

use App\Models\Conducteur;
use Illuminate\Http\Request;

class ConducteurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cond=Conducteur::all()->toArray();
        return $cond;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cond=new Conducteur ([
            'nom'=> $request->input('nom'),
            'prenom'=>$request->input('prenom'),
            'age'=>$request->input('age'),
            'profession'=>$request->input('profession'),
            'telephone'=>$request->input('telephone'),
            'vehicule'=>$request->input('vehicule'),
            'matricule'=>$request->input('matricule')
    
        ]);
        $cond->save();
        return response()->json($cond,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Conducteur $conducteur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Conducteur $conducteur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Conducteur $conducteur)
    {
        //
    }
}
