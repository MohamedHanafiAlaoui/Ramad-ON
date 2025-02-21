@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-6 py-12 fade-in">
        <!-- Page Title -->
        <h1 class="text-4xl font-bold text-[#FFD700] mb-8 text-center">Ajouter une nouvelle expérience 🌙</h1>

        <!-- Form Container -->
        <div class="bg-[#1A1A2E] rounded-xl shadow-2xl p-8">
            <form action="/experiences" method="POST">
                @csrf

                <!-- Title Field -->
                <div class="mb-6">
                    <label for="title" class="block text-lg font-semibold text-[#FFD700] mb-2">Titre</label>
                    <input type="text" id="title" name="title" class="w-full bg-[#2C3E50] text-white px-6 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FFD700]" required>
                </div>

                <!-- Description Field -->
                <div class="mb-6">
                    <label for="description" class="block text-lg font-semibold text-[#FFD700] mb-2">Description</label>
                    <textarea id="description" name="description" rows="5" class="w-full bg-[#2C3E50] text-white px-6 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FFD700]" required></textarea>
                </div>

                <!-- Image Field -->
                <div class="mb-6">
                    <label for="image" class="block text-lg font-semibold text-[#FFD700] mb-2">Image (optionnel)</label>
                    <input type="text" id="image" name="image" class="w-full bg-[#2C3E50] text-white px-6 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FFD700]">
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
