@extends('layouts.app')

@section('content')
    <div class="text-center py-12 fade-in">
        <h1 class="text-4xl font-bold text-[#FFD700] mb-4">Bienvenue sur la Plateforme Ramadan 🌙</h1>
        <p class="text-xl text-gray-300 mb-8">Partagez vos expériences et vos recettes pendant le mois sacré de Ramadan.</p>
        <div class="space-x-4">
            <a href="/experiences" class="bg-[#FFD700] text-[#1A1A2E] px-6 py-3 rounded-full font-bold hover:bg-[#FFA500] transition duration-300 hover-scale">
                Voir les expériences
            </a>
            <a href="/recipes" class="bg-[#4CAF50] text-white px-6 py-3 rounded-full font-bold hover:bg-[#45a049] transition duration-300 hover-scale">
                Voir les recettes
            </a>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="container mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-3 gap-8 fade-in">
        <!-- Card 1 -->
        <div class="bg-[#1A1A2E] rounded-lg shadow-lg p-6 hover-scale transition-transform">
            <h5 class="text-xl font-semibold text-[#FFD700] mb-4">total Experiences</h5>
            <h2 class="text-5xl font-bold text-[#FFD700] mb-4">{{$totalExperiences}}</h2>
            <p class="text-gray-400">Users registered on the platform.</p>
        </div>
        <!-- Card 2 -->
        <div class="bg-[#1A1A2E] rounded-lg shadow-lg p-6 hover-scale transition-transform">
            <h5 class="text-xl font-semibold text-[#4CAF50] mb-4">Total Comments</h5>
            <h2 class="text-5xl font-bold text-[#4CAF50] mb-4">8,765</h2>
            <p class="text-gray-400">Comments shared on experiences.</p>
        </div>
        <!-- Card 3 -->
        <div class="bg-[#1A1A2E] rounded-lg shadow-lg p-6 hover-scale transition-transform">
            <h5 class="text-xl font-semibold text-[#FF6B6B] mb-4">total Recipes</h5>
            <h2 class="text-5xl font-bold text-[#FF6B6B] mb-4">{{$totalExperiences}}</h2>
            <p class="text-gray-400">Visits during the Ramadan campaign.</p>
        </div>
    </div>
@endsection
