<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramadan Platform 2025</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom CSS for animations and additional styling */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .fade-in {
            animation: fadeIn 1s ease-out;
        }
        .hover-scale {
            transition: transform 0.3s ease;
        }
        .hover-scale:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body class="bg-gradient-to-br from-[#0F2027] via-[#203A43] to-[#2C5364] text-white font-sans">

    <!-- Navbar -->
    <nav class="bg-[#1A1A2E] shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="/" class="text-2xl font-bold text-[#FFD700] hover:text-[#FFA500] transition duration-300">
                🌙 Ramadan Mubarak
            </a>
            <ul class="flex space-x-8">
                <li><a href="/recipes" class="text-lg font-semibold hover:text-[#FFD700] transition duration-300 border-b-2 border-transparent hover:border-[#FFD700]">🍽️ Recettes</a></li>
                <li><a href="/experiences" class="text-lg font-semibold hover:text-[#FFD700] transition duration-300 border-b-2 border-transparent hover:border-[#FFD700]">📿 Expériences</a></li>
            </ul>
        </div>
    </nav>

    <!-- Header -->
    <header class="bg-[url('https://via.placeholder.com/1500x500')] bg-cover bg-center h-[500px] flex items-center justify-center text-center fade-in">
        <div class="bg-black bg-opacity-50 p-8 rounded-lg">
            <h1 class="text-5xl font-bold mb-4">Bienvenue sur la Plateforme Ramadan 2025 🌙</h1>
            <p class="text-xl mb-6">Partagez vos expériences et vos recettes pour un Ramadan inspirant.</p>
            <a href="/recipes" class="bg-[#FFD700] text-[#1A1A2E] px-6 py-3 rounded-full font-bold hover:bg-[#FFA500] transition duration-300 hover-scale">
                Découvrir les Recettes
            </a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-6 py-12">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-[#1A1A2E] py-6 text-center">
        <p class="text-lg">&copy; 2025 Ramadan Inspiration Platform 🌙✨ - Tous droits réservés.</p>
    </footer>

    <!-- JavaScript for interactivity -->
    <script>
        // Add smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>
