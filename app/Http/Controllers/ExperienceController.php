<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;

class ExperienceController extends Controller
{

    public function index()
    {
        // Récupérer toutes les expériences depuis la base de données
        $experiences = Experience::all();

        // Passer les données à la vue
        return view('experiences.index', compact('experiences'));
    }


    public function create()
    {
        return view('experiences.create');
    }

    public function store(Request $request)
    {
        // Valider les données envoyées
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|string',
        ]);

        // Créer une nouvelle expérience
        Experience::create($request->all());

        // Rediriger avec un message de succès
        return redirect()->route('experiences.index')->with('success', 'L\'expérience a été ajoutée avec succès.');
    }


    public function show(string $id)
    {
        // Trouver l'expérience en utilisant l'ID
        $experience = Experience::findOrFail($id);

        // Passer les données à la vue
        return view('experiences.show', compact('experience'));
    }


    public function edit(string $id)
    {
        // Trouver l'expérience en utilisant l'ID
        $experience = Experience::findOrFail($id);

        // Passer les données à la vue
        return view('experiences.edit', compact('experience'));
    }


    public function update(Request $request, string $id)
    {
        // Valider les données envoyées
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|string',
        ]);

        // Trouver l'expérience en utilisant l'ID
        $experience = Experience::findOrFail($id);

        // Mettre à jour les données
        $experience->update($request->all());

        // Rediriger avec un message de succès
        return redirect()->route('experiences.index')->with('success', 'L\'expérience a été mise à jour avec succès.');
    }


    public function destroy(string $id)
    {
        $experience = Experience::findOrFail($id);

        $experience->delete();

        return redirect()->route('experiences.index')->with('success', 'L\'expérience a été supprimée avec succès.');
    }
}
