<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramadan 2025</title>
    <style>
        /* Islamic-inspired color palette */
        :root {
            --primary: #234E70;    /* Deep Blue */
            --secondary: #8EA7B7;  /* Soft Blue */
            --accent: #FBB13C;     /* Gold */
            --text: #2D3436;       /* Dark Grey */
            --background: #F7F7F7; /* Light Grey */
            --pattern: #E8F1F2;    /* Pattern Background */
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            color: var(--text);
            background-color: var(--background);
            line-height: 1.6;
        }

        /* Islamic Pattern Background */
        .pattern-bg {
            background-color: var(--pattern);
            background-image: radial-gradient(var(--secondary) 2px, transparent 2px);
            background-size: 30px 30px;
            opacity: 0.1;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        /* Minimal Navigation */
        .navbar {
            background: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            padding: 1rem 0;
        }

        .nav-container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            color: var(--primary);
            text-decoration: none;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .nav-links a {
            color: var(--text);
            text-decoration: none;
            margin-left: 2rem;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: var(--accent);
        }

        /* Hero Section with Pattern */
        .hero {
            text-align: center;
            padding: 6rem 2rem;
            background: var(--primary);
            color: white;
            position: relative;
            overflow: hidden;
        }

        .hero-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: repeating-linear-gradient(
                45deg,
                rgba(255,255,255,0.05) 0px,
                rgba(255,255,255,0.05) 2px,
                transparent 2px,
                transparent 8px
            );
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        /* Content Sections */
        .section {
            padding: 4rem 2rem;
            max-width: 1000px;
            margin: 0 auto;
        }

        .section-title {
            text-align: center;
            color: var(--primary);
            margin-bottom: 3rem;
            position: relative;
        }

        .section-title::after {
            content: "";
            display: block;
            width: 60px;
            height: 3px;
            background: var(--accent);
            margin: 1rem auto;
        }

        /* Minimal Cards */
        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-content {
            padding: 1.5rem;
        }

        .card h3 {
            color: var(--primary);
            margin-bottom: 0.5rem;
        }

        /* Prayer Times */
        .prayer-times {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            margin-top: 2rem;
            text-align: center;
        }

        .times-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 1rem;
            margin-top: 1rem;
        }

        .time-box {
            padding: 1rem;
            background: var(--pattern);
            border-radius: 4px;
        }

        /* Minimal Footer */
        .footer {
            background: var(--primary);
            color: white;
            padding: 3rem 2rem;
            margin-top: 4rem;
        }

        .footer-content {
            max-width: 1000px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
        }

        .footer a {
            color: white;
            text-decoration: none;
            opacity: 0.8;
            transition: opacity 0.3s;
        }

        .footer a:hover {
            opacity: 1;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .hero h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <div class="pattern-bg"></div>
    
    <nav class="navbar">
        <div class="nav-container">
            <a href="#" class="logo">Ramadan 2025</a>
            <div class="nav-links">
                <a href="#">Accueil</a>
                <a href="#">Prières</a>
                <a href="#">Recettes</a>
                <a href="#">Communauté</a>
            </div>
        </div>
    </nav>

    <section class="hero">
        <div class="hero-pattern"></div>
        <div class="hero-content">
            <h1>رمضان كريم</h1>
            <p>Bienvenue dans votre espace spirituel numérique</p>
        </div>
    </section>

    <section class="section">
        <h2 class="section-title">Horaires des Prières</h2>
        <div class="prayer-times">
            <div class="times-grid">
                <div class="time-box">
                    <h3>Fajr</h3>
                    <p>05:30</p>
                </div>
                <div class="time-box">
                    <h3>Dhuhr</h3>
                    <p>13:15</p>
                </div>
                <div class="time-box">
                    <h3>Asr</h3>
                    <p>16:45</p>
                </div>
                <div class="time-box">
                    <h3>Maghrib</h3>
                    <p>20:15</p>
                </div>
                <div class="time-box">
                    <h3>Isha</h3>
                    <p>21:45</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <h2 class="section-title">Recettes du Jour</h2>
        <div class="cards-grid">
            <div class="card">
                <img src="data:image/jpeg;base64,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" alt="Recette">
                <div class="card-content">
                    <h3>Chorba</h3>
                    <p>Soupe traditionnelle pour l'iftar</p>
                </div>
            </div>
            <div class="card">
                <img src="/api/placeholder/400/300" alt="Recette">
                <div class="card-content">
                    <h3>Dates Farcies</h3>
                    <p>Une entrée sucrée-salée</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="footer-content">
            <div>
                <h3>À Propos</h3>
                <p>Votre compagnon pour un Ramadan serein</p>
            </div>
            <div>
                <h3>Liens Rapides</h3>
                <p><a href="#">Horaires des Prières</a></p>
                <p><a href="#">Recettes</a></p>
                <p><a href="#">Communauté</a></p>
            </div>
            <div>
                <h3>Contact</h3>
                <p>contact@ramadan2025.fr</p>
                <p>+33 1 23 45 67 89</p>
            </div>
        </div>
    </footer>
</body>
</html>