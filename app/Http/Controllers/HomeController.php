<?php

use App\Models\Experience;
use App\Models\Recipe;

class HomeController{
public function statistics()
{
    $totalExperiences = Experience::count();
    $totalRecipes = Recipe::count();


    return view('/', compact('totalExperiences', 'totalRecipes'));
}
}
