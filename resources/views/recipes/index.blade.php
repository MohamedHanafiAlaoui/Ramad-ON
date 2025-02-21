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

        <!-- Category Filter (server-side) -->
        <div class="bg-[#1A1A2E] rounded-xl shadow-lg p-6 mb-6">
            <h2 class="text-xl font-semibold text-[#FFD700] mb-4">Filtrer par catégorie</h2>
            <form method="GET" action="{{ route('recipes.index') }}">
                <select
                    name="category"
                    id="category"
                    class="w-full bg-[#2C3E50] text-white px-6 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FFD700]"
                    onchange="this.form.submit()"
                >
                    <option value="">Toutes les catégories</option>
                    <option value="Soupes" {{ request('category') == 'Soupes' ? 'selected' : '' }}>Soupes</option>
                    <option value="Boissons" {{ request('category') == 'Boissons' ? 'selected' : '' }}>Boissons</option>
                    <option value="Recettes" {{ request('category') == 'Recettes' ? 'selected' : '' }}>Recettes</option>
                </select>
            </form>
        </div>

        <!-- Recipe List -->
        <div class="space-y-4" id="recipe-list">
            @forelse ($recipes as $recipe)
                <div class="bg-[#1A1A2E] rounded-lg shadow-lg p-6 hover-scale transition-transform">
                    <h5 class="text-xl font-semibold text-[#FFD700] mb-2">{{ $recipe->title }}</h5>
                    <p class="text-gray-400 mb-4">{{ $recipe->category }}</p> <!-- Display category -->

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
            @empty
                <p class="text-gray-400">Aucune recette trouvée pour cette catégorie.</p>
            @endforelse
        </div>
    </div>
@endsection
