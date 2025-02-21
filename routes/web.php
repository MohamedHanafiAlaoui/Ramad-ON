<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;



Route::get('/', [App\Http\Controllers\HomeController::class, 'statistics'])->name('');




Route::get('/experiences', [ExperienceController::class, 'index'])->name('experiences.index');

Route::get('/experiences/create', [ExperienceController::class, 'create'])->name('experiences.create');

Route::post('/experiences', [ExperienceController::class, 'store'])->name('experiences.store');

Route::get('/experiences/{experience}', [ExperienceController::class, 'show'])->name('experiences.show');

Route::get('/experiences/{experience}/edit', [ExperienceController::class, 'edit'])->name('experiences.edit');

Route::put('/experiences/{experience}', [ExperienceController::class, 'update'])->name('experiences.update');

Route::delete('/experiences/{experience}', [ExperienceController::class, 'destroy'])->name('experiences.destroy');



Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes.index');
Route::get('/recipes/create', [RecipeController::class, 'create'])->name('recipes.create');
Route::get('/recipes/{recipe}', [RecipeController::class, 'show'])->name('recipes.show');
Route::post('/recipes', [RecipeController::class, 'store'])->name('recipes.store');
Route::get('/recipes/{recipe}/edit', [RecipeController::class, 'edit'])->name('recipes.edit');
Route::put('/recipes/{recipe}', [RecipeController::class, 'update'])->name('recipes.update');
Route::delete('/recipes/{recipe}', [RecipeController::class, 'destroy'])->name('recipes.destroy');






Route::post('/{id}/comments', [CommentController::class, 'store'])->name('comments.store');
// Route::post('/{id}/comments', [CommentController::class, 'store'])->name('comments.store');

Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');
