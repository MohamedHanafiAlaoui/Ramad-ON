@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-6 py-12 fade-in">
        <!-- Page Title -->
        <h1 class="text-4xl font-bold text-[#FFD700] mb-8 text-center">Ajouter une nouvelle expérience 🌙</h1>

        <!-- Form Container -->
        <div class="bg-[#1A1A2E] rounded-xl shadow-2xl p-8">
            <form action="/recipes" method="POST">
                @csrf
                <!-- Title Field -->
                <div class="mb-6">
                    <label for="title" class="block text-lg font-semibold text-[#FFD700] mb-2">Titre</label>
                    <input type="text" id="title" name="title" class="w-full bg-[#2C3E50] text-white px-6 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FFD700]" required>
                </div>

                <!-- Ingredients Field -->
                <div class="mb-6">
                    <label for="ingredients" class="block text-lg font-semibold text-[#FFD700] mb-2">Ingrédients</label>
                    <textarea id="ingredients" name="ingredients" rows="3" class="w-full bg-[#2C3E50] text-white px-6 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FFD700]" required></textarea>
                </div>

                <!-- Image Field -->
                <div class="mb-6">
                    <label for="image" class="block text-lg font-semibold text-[#FFD700] mb-2">Image (URL - optionnel)</label>
                    <input type="text" id="image" name="image" class="w-full bg-[#2C3E50] text-white px-6 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FFD700]">
                </div>

                <!-- Instructions Field -->
                <div class="mb-6">
                    <label for="instructions" class="block text-lg font-semibold text-[#FFD700] mb-2">Instructions</label>
                    <textarea id="instructions" name="instructions" rows="5" class="w-full bg-[#2C3E50] text-white px-6 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FFD700]" required></textarea>
                </div>

                <!-- Category Field -->
                <div class="mb-6">
                    <label for="category" class="block text-lg font-semibold text-[#FFD700] mb-2">Catégorie</label>
                    <select id="category" name="category" class="w-full bg-[#2C3E50] text-white px-6 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FFD700]" required>
                        <option value="">Sélectionner une catégorie</option>
                        <option value="recette">Recette</option>
                        <option value="spirituel">Spirituel</option>
                        <option value="astuce">Astuce</option>
                        <option value="autre">Autre</option>
                    </select>
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="bg-[#4CAF50] text-white px-8 py-3 rounded-full font-semibold hover:bg-[#45a049] transition duration-300 hover-scale">
                        Sauvegarder
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
