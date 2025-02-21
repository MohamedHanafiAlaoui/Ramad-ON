<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;


class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $category = $request->query('category');

        if ($category) {
            $recipes = Recipe::where('category', $category)->get();
        } else {
            $recipes = Recipe::all();
        }

        // Passer les données à la vue
        return view('recipes.index', compact('recipes', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'ingredients' => 'required|string',
            'instructions' => 'required|string',
            'image' => 'nullable|string',
        ]);

        // Créer une nouvelle expérience
        Recipe::create($request->all());

        // Rediriger avec un message de succès
        return redirect()->route('recipes.index')->with('success', 'L\'expérience a été ajoutée avec succès.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $recipe = Recipe::findOrFail($id);

        // Passer les données à la vue
        return view('recipes.show', compact('recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

                $recipe = Recipe::findOrFail($id);

                // Passer les données à la vue
                return view('recipes.edit', compact('recipe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'ingredients' => 'required|string',
            'instructions' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $recipe = Recipe::findOrFail($id);


        $recipe->update($request->all());
        return redirect()->route('recipes.index')->with('success', 'La recette a été mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $recipe = Recipe::findOrFail($id);

        $recipe->delete();

        return redirect()->route('recipes.index')->with('success', 'L\'recipes a été supprimée avec succès.');
    }
}
