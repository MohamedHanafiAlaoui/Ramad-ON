@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-6 py-12 fade-in">
        <!-- Recipe Header -->
        <div class="bg-[#1A1A2E] rounded-xl shadow-2xl p-8 mb-8 relative overflow-hidden">
            <!-- Decorative Ramadan-themed pattern -->
            <div class="absolute inset-0 bg-[url('https://i.ibb.co/5KqyZzL/ramadan-pattern.png')] opacity-10"></div>
            <h1 class="text-5xl font-bold text-[#FFD700] text-center mb-6 relative z-10">{{ $recipe->title }}</h1>
            @if ($recipe->image)
                <img src="{{ $recipe->image }}" alt="{{ $recipe->title }}" class="w-full h-96 object-cover rounded-xl shadow-lg mb-6 relative z-10">
            @endif
            <p class="text-lg text-gray-300 text-center"><strong>Catégorie:</strong> {{ $recipe->category }}</p>
        </div>

        <!-- Recipe Content -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
            <!-- Ingredients Section -->
            <div class="bg-[#1A1A2E] rounded-xl shadow-2xl p-8">
                <h2 class="text-3xl font-bold text-[#FFD700] mb-6">📜 Ingrédients</h2>
                <ul class="space-y-3">
                    @foreach (explode("\n", $recipe->ingredients) as $ingredient)
                        <li class="flex items-center text-gray-300">
                            <span class="w-2 h-2 bg-[#FFD700] rounded-full mr-3"></span>
                            {{ $ingredient }}
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Instructions Section -->
            <div class="bg-[#1A1A2E] rounded-xl shadow-2xl p-8">
                <h2 class="text-3xl font-bold text-[#FFD700] mb-6">📝 Instructions</h2>
                <p class="text-gray-300 whitespace-pre-line">{{ $recipe->instructions }}</p>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="flex justify-center space-x-6 mb-12">
            <form action="{{ url('recipes/'.$recipe->id) }}" method="POST">
                @csrf @method('DELETE')
                <button type="submit" class="bg-[#FF6B6B] text-white px-8 py-3 rounded-full font-semibold hover:bg-[#FF5252] transition duration-300 hover-scale flex items-center">
                    🗑️ Supprimer la recette
                </button>
            </form>
            <a href="{{ url('recipes') }}" class="bg-[#3498db] text-white px-8 py-3 rounded-full font-semibold hover:bg-[#2980b9] transition duration-300 hover-scale flex items-center">
                🔙 Retour aux recettes
            </a>
        </div>

        <!-- Comments Section -->
        <div class="bg-[#1A1A2E] rounded-xl shadow-2xl p-8">
            <h3 class="text-3xl font-bold text-[#FFD700] mb-8">💬 Commentaires</h3>

            <!-- Comment List -->
            <div class="space-y-6">
                @foreach ($recipe->comments as $comment)
                    <div class="bg-[#2C3E50] rounded-xl p-6 relative">
                        <!-- User Avatar -->
                        <div class="absolute -top-4 -left-4 w-10 h-10 bg-[#FFD700] rounded-full flex items-center justify-center text-[#1A1A2E] font-bold">
                            {{ strtoupper(substr($comment->name, 0, 1)) }}
                        </div>
                        <h5 class="text-xl font-semibold text-[#FFD700] mb-2">{{ $comment->name }}</h5>
                        <p class="text-gray-300">{{ $comment->content }}</p>
                        <form action="{{ url('recipes/'.$recipe->id.'/comments/'.$comment->id) }}" method="POST" class="mt-4">
                            @csrf @method('DELETE')
                            <button type="submit" class="bg-[#FF6B6B] text-white px-4 py-2 rounded-full font-semibold hover:bg-[#FF5252] transition duration-300 hover-scale">
                                🗑️ Supprimer
                            </button>
                        </form>
                    </div>
                @endforeach
            </div>

            <!-- Comment Form -->
            <form action="/{{$recipe->id}}/comments" method="POST" class="mt-8">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <input type="text" name="name" placeholder="Votre nom..." class="w-full bg-[#2C3E50] text-white px-6 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FFD700]" required>
                    <textarea name="content" rows="4" placeholder="Votre commentaire..." class="w-full bg-[#2C3E50] text-white px-6 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FFD700]" required></textarea>
                </div>
                <button type="submit" class="bg-[#4CAF50] text-white px-8 py-3 rounded-full font-semibold hover:bg-[#45a049] transition duration-300 hover-scale mt-6">
                    ➕ Ajouter un commentaire
                </button>
            </form>
        </div>
    </div>
@endsection
