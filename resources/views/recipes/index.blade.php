@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-6 py-12 fade-in">
        <!-- Page Title -->
        <h1 class="text-3xl font-bold text-[#FFD700] mb-6">Liste des recettes 🌙</h1>

        <!-- Add New Recipe Button -->
        <a href="/recipes/create" class="bg-[#FFD700] text-[#1A1A2E] px-6 py-3 rounded-full font-bold hover:bg-[#FFA500] transition duration-300 hover-scale mb-6 inline-block">
            Ajouter une nouvelle recette
        </a>

        <!-- Success Message -->
        @if (session('success'))
            <div class="bg-[#4CAF50] text-white px-6 py-3 rounded-lg mb-6">
                {{ session('success') }}
            </div>
        @endif

        <!-- Recipe List -->
        <div class="space-y-4">
            @foreach ($recipes as $recipe)
                <div class="bg-[#1A1A2E] rounded-lg shadow-lg p-6 hover-scale transition-transform">
                    <h5 class="text-xl font-semibold text-[#FFD700] mb-2">{{ $recipe->title }}</h5>
                    <!-- Recipe Description (Optional) -->
                    <!-- <p class="text-gray-400 mb-4">{{ Str::limit($recipe->description, 100) }}</p> -->

                    <!-- Action Buttons -->
                    <div class="flex space-x-4">
                        <a href="/recipes/{{ $recipe->id }}" class="bg-[#4CAF50] text-white px-4 py-2 rounded-full font-semibold hover:bg-[#45a049] transition duration-300 hover-scale">
                            Afficher les détails
                        </a>
                        <a href="/recipes/{{ $recipe->id }}/edit" class="bg-[#FFD700] text-[#1A1A2E] px-4 py-2 rounded-full font-semibold hover:bg-[#FFA500] transition duration-300 hover-scale">
                            Amendement
                        </a>
                        <form action="/recipes/{{ $recipe->id }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-[#FF6B6B] text-white px-4 py-2 rounded-full font-semibold hover:bg-[#FF5252] transition duration-300 hover-scale">
                                Retirer
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
