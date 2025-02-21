@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-6 py-12 fade-in">
        <!-- Form Container -->
        <div class="bg-[#1A1A2E] rounded-xl shadow-2xl p-8">
            <h1 class="text-4xl font-bold text-[#FFD700] mb-8 text-center">Modifier la recette 🌙</h1>

            <form action="{{ url('recipes/'.$recipe->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Title Field -->
                <div class="mb-6">
                    <label for="title" class="block text-lg font-semibold text-[#FFD700] mb-2">Titre</label>
                    <input type="text" name="title" id="title" value="{{ old('title', $recipe->title) }}" class="w-full bg-[#2C3E50] text-white px-6 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FFD700]" required>
                </div>

                <!-- Category Field -->
                <div class="mb-6">
                    <label for="category" class="block text-lg font-semibold text-[#FFD700] mb-2">Catégorie</label>
                    <input type="text" name="category" id="category" value="{{ old('category', $recipe->category) }}" class="w-full bg-[#2C3E50] text-white px-6 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FFD700]" required>
                </div>

                <!-- Ingredients Field -->
                <div class="mb-6">
                    <label for="ingredients" class="block text-lg font-semibold text-[#FFD700] mb-2">Ingrédients</label>
                    <textarea name="ingredients" id="ingredients" class="w-full bg-[#2C3E50] text-white px-6 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FFD700]" rows="5" required>{{ old('ingredients', $recipe->ingredients) }}</textarea>
                </div>

                <!-- Instructions Field -->
                <div class="mb-6">
                    <label for="instructions" class="block text-lg font-semibold text-[#FFD700] mb-2">Instructions</label>
                    <textarea name="instructions" id="instructions" class="w-full bg-[#2C3E50] text-white px-6 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FFD700]" rows="5" required>{{ old('instructions', $recipe->instructions) }}</textarea>
                </div>

                <!-- Image Field -->
                <div class="mb-6">
                    <label for="image" class="block text-lg font-semibold text-[#FFD700] mb-2">Image (optionnelle)</label>
                    <input type="file" name="image" id="image" class="w-full bg-[#2C3E50] text-white px-6 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FFD700]">
                    @if ($recipe->image)
                        <img src="{{ $recipe->image }}" alt="{{ $recipe->title }}" class="w-full h-auto rounded-lg shadow-lg mt-4">
                    @endif
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="bg-[#4CAF50] text-white px-8 py-3 rounded-full font-semibold hover:bg-[#45a049] transition duration-300 hover-scale">
                        Enregistrer les modifications
                    </button>
                </div>
            </form>

            <!-- Cancel Button -->
            <div class="text-center mt-6">
                <a href="{{ url('recipes/'.$recipe->id) }}" class="bg-[#3498db] text-white px-8 py-3 rounded-full font-semibold hover:bg-[#2980b9] transition duration-300 hover-scale">
                    Annuler
                </a>
            </div>
        </div>
    </div>
@endsection
