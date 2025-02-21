<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Recipe;

class HomeController extends Controller {
    public function statistics() {
        $totalExperiences = Experience::count();
        $totalRecipes = Recipe::count();

        return view('welcome', compact('totalExperiences', 'totalRecipes'));
    }
}

