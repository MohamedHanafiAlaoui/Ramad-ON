@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-6 py-12 fade-in">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <img src="/mnt/data/download.jpg" alt="Ramadan 2025" class="w-full h-64 object-cover rounded-xl shadow-lg mb-8">
            <h1 class="text-5xl font-bold text-[#FFD700] mb-4">🌙 Expériences Ramadan 2025</h1>
            <p class="text-xl text-gray-300 mb-8">Découvrez et partagez des moments inspirants et spirituels tout au long du mois sacré.</p>
            <a href="/experiences/create" class="bg-[#4CAF50] text-white px-8 py-3 rounded-full font-semibold hover:bg-[#45a049] transition duration-300 hover-scale">
                ➕ Ajouter une expérience
            </a>
        </div>

        <!-- Success Message -->
        @if (session('success'))
            <div class="bg-[#4CAF50] text-white px-6 py-3 rounded-lg mb-8 text-center">
                {{ session('success') }}
            </div>
        @endif

        <!-- Experiences Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($experiences as $experience)
                <div class="bg-[#1A1A2E] rounded-xl shadow-2xl overflow-hidden hover-scale transition-transform">
                    <!-- Experience Image -->
                    <div class="h-56 overflow-hidden">
                        <img src="{{ $experience->image }}" alt="{{ $experience->title }}" class="w-full h-full object-cover">
                    </div>

                    <!-- Experience Content -->
                    <div class="p-6">
                        <h5 class="text-2xl font-bold text-[#FFD700] mb-4">{{ $experience->title }}</h5>
                        <p class="text-gray-300">{{ Str::limit($experience->description, 100) }}</p>
                    </div>

                    <!-- Action Buttons -->
                    <div class="p-6 bg-[#2C3E50] flex justify-between items-center">
                        <a href="/experiences/{{ $experience->id }}" class="bg-[#3498db] text-white px-6 py-2 rounded-full font-semibold hover:bg-[#2980b9] transition duration-300 hover-scale">
                            🔍 Détails
                        </a>
                        <a href="/experiences/{{ $experience->id }}/edit" class="bg-[#FFD700] text-[#1A1A2E] px-6 py-2 rounded-full font-semibold hover:bg-[#FFA500] transition duration-300 hover-scale">
                            ✏️ Modifier
                        </a>
                        <form action="{{ url('experiences/'.$experience->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-[#FF6B6B] text-white px-6 py-2 rounded-full font-semibold hover:bg-[#FF5252] transition duration-300 hover-scale">
                                🗑️ Supprimer
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
