<?php

namespace App\Http\Controllers;

use App\Models\Trajet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrajetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trajets = Trajet::all()->toArray();
        return $trajets;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valider les données d'entrée
        $validatedData = $request->validate([
            'lieu_depart' => 'required|string|max:255',
            'lieu_arrive' => 'required|string|max:255',
            'temps_depart' => 'required|date',
            'temps_arrive' => 'required|date',
            'heure' => 'required|string|max:255',
            'prix' => 'required|numeric',
            'nbplace' => 'required|integer',
            'vehicule' => 'required|string|max:255',
        ]);

        // Récupère l'utilisateur connecté
        $user = Auth::user();

        if (!$user) {
            return response()->json(['message' => 'Non autorisé'], 401);
        }

        // Crée un nouveau trajet et associe l'utilisateur connecté
        $trajet = new Trajet([
            'userId' => $user->id,
            'lieu_depart' => $request->input('lieu_depart'),
            'lieu_arrive' => $request->input('lieu_arrive'),
            'temps_depart' => $request->input('temps_depart'),
            'temps_arrive' => $request->input('temps_arrive'),
            'heure' => $request->input('heure'),
            'prix' => $request->input('prix'),
            'nbplace' => $request->input('nbplace'),
            'vehicule' => $request->input('vehicule')
        ]);

        $trajet->save();

        return response()->json($trajet, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $trajet = Trajet::find($id);
        return response()->json($trajet);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $trajet = Trajet::find($id);
        $trajet->update($request->all());
        return response()->json($trajet);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $trajet = Trajet::find($id);
        $trajet->delete();
        return response()->json("Le trajet " . $trajet->id . " a été supprimé avec succès.");
    }

    public function Rechercher(Request $request)
    {
        $lieuDepart = $request->input('lieu_depart');
        $lieuArrivee = $request->input('lieu_arrive');
        //$nbplace = $request->input('nb_place');

        //$date_dep = $request->input('temps_depart');

        $trajetres = Trajet::where('lieu_depart', $lieuDepart)
            ->where('lieu_arrive', $lieuArrivee)//->where('temps_depart',$date_dep)
            ->get();

        return response()->json($trajetres);
    }
}
