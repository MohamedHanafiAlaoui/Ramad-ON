<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\CommentController;

// الصفحة الرئيسية
Route::get('/', function () {
    return view('welcome');
});

// عرض قائمة التجارب
Route::get('/experiences', [ExperienceController::class, 'index'])->name('experiences.index');

// عرض نموذج إنشاء تجربة جديدة
Route::get('/experiences/create', [ExperienceController::class, 'create'])->name('experiences.create');

// تخزين تجربة جديدة (POST)
Route::post('/experiences', [ExperienceController::class, 'store'])->name('experiences.store');

// عرض تجربة واحدة
Route::get('/experiences/{experience}', [ExperienceController::class, 'show'])->name('experiences.show');

// عرض نموذج تعديل تجربة
Route::get('/experiences/{experience}/edit', [ExperienceController::class, 'edit'])->name('experiences.edit');

// تحديث تجربة (POST مع `_method=PUT`)
Route::post('/experiences/{experience}/update', [ExperienceController::class, 'update'])->name('experiences.update');

// حذف تجربة (POST مع `_method=DELETE`)
Route::post('/experiences/{experience}/delete', [ExperienceController::class, 'destroy'])->name('experiences.destroy');

// قائمة الوصفات
Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes.index');

// عرض وصفة واحدة
Route::get('/recipes/{recipe}', [RecipeController::class, 'show'])->name('recipes.show');

// إنشاء وصفة جديدة
Route::get('/recipes/create', [RecipeController::class, 'create'])->name('recipes.create');
Route::post('/recipes', [RecipeController::class, 'store'])->name('recipes.store');

// تعديل وصفة
Route::get('/recipes/{recipe}/edit', [RecipeController::class, 'edit'])->name('recipes.edit');
Route::post('/recipes/{recipe}/update', [RecipeController::class, 'update'])->name('recipes.update');

// حذف وصفة
Route::post('/recipes/{recipe}/delete', [RecipeController::class, 'destroy'])->name('recipes.destroy');

// قائمة التعليقات لتجربة معينة
Route::get('/experiences/{experience}/comments', [CommentController::class, 'index'])->name('comments.index');

// إضافة تعليق جديد
Route::post('/experiences/{experience}/comments', [CommentController::class, 'store'])->name('comments.store');

// حذف تعليق
Route::post('/comments/{comment}/delete', [CommentController::class, 'destroy'])->name('comments.destroy');
