<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublierController extends Controller
{
    public function index()
    {
        return view('publier');
    }

    public function publier(Request $request)
    {
        $validatedData = $request->validate([
            'lieu' => 'required|string|max:255',
            'categorie' => 'required|string|max:255',
            'heure_arrivee' => 'required|string|max:255',
            'titre_de_publication' => 'required|string|max:255',
            'kilos_disponible' => 'required|string|max:255',
            'disponibilite' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'nationalite' => 'required|string|max:255',
            'ville_destination' => 'required|string|max:255',
            'heure_depart' => 'required|string|max:255',
            'ville_depart' => 'required|string|max:255',
        ]);

        Publication::create($validatedData);

        return redirect()->back()->with('success', 'Publication enregistrée avec succès.');
    }
}
