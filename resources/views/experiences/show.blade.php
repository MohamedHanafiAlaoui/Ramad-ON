@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-6 py-12 fade-in">
        <!-- Experience Header -->
        <div class="bg-[#1A1A2E] rounded-xl shadow-2xl p-8 mb-8 text-center relative overflow-hidden">
            <!-- Decorative Ramadan-themed pattern -->
            <div class="absolute inset-0 bg-[url('https://i.ibb.co/5KqyZzL/ramadan-pattern.png')] opacity-10"></div>
            <h1 class="text-5xl font-bold text-[#FFD700] mb-4 relative z-10">{{ $experience->title }}</h1>
            <p class="text-xl text-gray-300 mb-6 relative z-10">{{ $experience->description }}</p>
            @if ($experience->image)
                <img src="{{ $experience->image }}" alt="{{ $experience->title }}" class="w-full h-96 object-cover rounded-xl shadow-lg relative z-10">
            @endif
        </div>

        <!-- Experience Details -->
        <div class="bg-[#1A1A2E] rounded-xl shadow-2xl p-8 mb-8">
            <h2 class="text-3xl font-bold text-[#FFD700] mb-6 text-center">Détails de l'expérience</h2>
            <p class="text-gray-300 text-lg leading-relaxed">{{ $experience->description }}</p>
        </div>

        <!-- Action Buttons -->
        <div class="flex justify-center space-x-6 mb-12">
            <form action="{{ url('experiences/'.$experience->id) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-[#FF6B6B] text-white px-8 py-3 rounded-full font-semibold hover:bg-[#FF5252] transition duration-300 hover-scale">
                    🗑️ Supprimer
                </button>
            </form>
            <a href="{{ url('experiences') }}" class="bg-[#3498db] text-white px-8 py-3 rounded-full font-semibold hover:bg-[#2980b9] transition duration-300 hover-scale">
                🔙 Retour aux expériences
            </a>
        </div>


    </div>
@endsection
