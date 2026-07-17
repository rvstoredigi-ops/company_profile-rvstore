<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RVHome - Real Estate</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --font-serif: 'Playfair Display', serif;
            --font-sans: 'Inter', sans-serif;
            --dark: #121212;
            --light: #F9F9F9;
            --gray: #666666;
            --bg-color: #FAFAFA; /* Bright, clean background */
        }
        
        html {
            scroll-behavior: smooth;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: var(--font-sans);
            background-color: var(--bg-color);
            color: var(--dark);
            -webkit-font-smoothing: antialiased;
        }

        .container {
            max-width: 1300px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* Nav & Hero */
        .hero-container {
            margin: 1.5rem;
            position: relative;
            border-radius: 1.5rem;
            overflow: hidden;
            height: 90vh;
            min-height: 700px;
            background: url('https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?auto=format&fit=crop&w=2000&q=80') center/cover;
        }
        
        .hero-overlay {
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: linear-gradient(to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.1) 40%, rgba(0,0,0,0.4) 100%);
        }

        nav {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            padding: 2rem 3rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 10;
            color: white;
        }

        .logo {
            font-family: var(--font-serif);
            font-size: 1.5rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .nav-links {
            display: flex;
            gap: 0.5rem;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            padding: 0.5rem;
            border-radius: 2rem;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            padding: 0.5rem 1.5rem;
            border-radius: 1.5rem;
            font-size: 0.9rem;
            transition: all 0.3s;
        }

        .nav-links a.active, .nav-links a:hover {
            background: white;
            color: var(--dark);
        }

        .nav-right {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .social-icons {
            display: flex;
            gap: 0.5rem;
        }

        .social-icons a {
            color: white;
            width: 35px;
            height: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            backdrop-filter: blur(10px);
            text-decoration: none;
            transition: background 0.3s;
        }
        .social-icons a:hover {
            background: rgba(255,255,255,0.4);
        }

        .contact-btn {
            background: white;
            color: var(--dark);
            padding: 0.7rem 1.5rem;
            border-radius: 2rem;
            text-decoration: none;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.9rem;
        }

        /* Hero Content */
        .hero-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            text-align: center;
            z-index: 5;
            color: white;
            padding: 0 2rem;
        }

        .hero-subtitle {
            font-size: 1rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1.5rem;
        }

        .hero-title {
            font-family: var(--font-serif);
            font-size: clamp(4rem, 12vw, 9rem);
            line-height: 1;
            font-weight: 400;
            letter-spacing: 2px;
            text-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .hero-stats {
            position: absolute;
            top: 50%;
            right: 15%;
            z-index: 6;
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .stat-card {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            padding: 1.5rem;
            border-radius: 1rem;
            color: white;
            width: 220px;
        }

        .stat-card h3 {
            font-size: 2.2rem;
            font-weight: 400;
            margin-bottom: 0.5rem;
        }

        .stat-card p {
            font-size: 0.8rem;
            opacity: 0.9;
            line-height: 1.4;
        }

        .discover-btn {
            position: absolute;
            bottom: 3rem;
            left: 50%;
            transform: translateX(-50%);
            background: white;
            color: var(--dark);
            padding: 0.8rem 2rem;
            border-radius: 2rem;
            text-decoration: none;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 1rem;
            z-index: 10;
            transition: transform 0.3s;
        }
        .discover-btn:hover {
            transform: translateX(-50%) scale(1.05);
        }
        .discover-btn i {
            background: var(--dark);
            color: white;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.7rem;
        }

        /* Section 2 */
        .section-2 {
            padding: 6rem 0;
        }
        
        .section-title-center {
            text-align: center;
            font-family: var(--font-serif);
            font-size: 2.8rem;
            font-weight: 500;
            max-width: 600px;
            margin: 0 auto 4rem auto;
            line-height: 1.2;
        }

        .s2-grid {
            display: grid;
            grid-template-columns: 1fr 1.2fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .s2-left h3 {
            font-size: 1.6rem;
            margin-bottom: 1rem;
            font-weight: 600;
            line-height: 1.3;
        }
        .s2-left p {
            color: var(--gray);
            line-height: 1.6;
            margin-bottom: 2rem;
            font-size: 0.95rem;
        }
        .btn-dark {
            background: var(--dark);
            color: white;
            padding: 0.7rem 1.8rem;
            border-radius: 2rem;
            text-decoration: none;
            display: inline-block;
            font-size: 0.9rem;
            transition: background 0.3s;
        }
        .btn-dark:hover { background: #333; }

        .partners {
            margin-top: 3rem;
        }
        .partners p {
            font-size: 0.9rem;
            color: var(--gray);
            margin-bottom: 0.8rem;
        }
        .partner-logos {
            display: flex;
            gap: 1.2rem;
            align-items: center;
            opacity: 0.7;
            font-weight: 600;
            font-size: 0.9rem;
        }

        .s2-center img {
            width: 100%;
            height: 550px;
            object-fit: cover;
            border-radius: 1.5rem;
            box-shadow: 0 20px 40px rgba(0,0,0,0.08);
        }

        .s2-right {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }
        .feature-box {
            border-bottom: 1px solid #E5E5E5;
            padding-bottom: 1.5rem;
        }
        .feature-box:last-child {
            border-bottom: none;
        }
        .feature-box h4 {
            font-size: 1rem;
            margin-bottom: 0.5rem;
        }
        .feature-box p {
            color: var(--gray);
            font-size: 0.85rem;
            line-height: 1.5;
        }

        .reviews {
            margin-top: 0.5rem;
        }
        .reviews h4 {
            font-size: 1rem;
            margin-bottom: 1rem;
        }
        .avatars {
            display: flex;
            align-items: center;
        }
        .avatars img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 2px solid white;
            margin-left: -12px;
            object-fit: cover;
        }
        .avatars img:first-child { margin-left: 0; }
        .rating {
            margin-left: 1rem;
            display: flex;
            flex-direction: column;
        }
        .rating strong { font-size: 1.1rem; }
        .rating span { font-size: 0.75rem; color: var(--gray); }

        /* Section 3: Team */
        .team-section {
            background: var(--dark);
            color: white;
            margin: 0 1.5rem;
            border-radius: 1.5rem;
            padding: 5rem 4rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 4rem;
        }

        .team-photos {
            display: flex;
            gap: 1.5rem;
            flex: 1.2;
        }
        
        .team-member {
            flex: 1;
            text-align: center;
        }

        .team-member img {
            width: 100%;
            height: 280px;
            object-fit: cover;
            border-radius: 1rem;
            background: #2A2A2A;
            transition: transform 0.3s;
            margin-bottom: 1rem;
        }
        
        .team-member:hover img {
            transform: translateY(-5px);
        }

        .team-member h5 {
            font-size: 0.95rem;
            font-weight: 500;
        }
        .team-member span {
            color: #999;
            font-size: 0.8rem;
        }

        .team-text {
            flex: 0.8;
        }
        .team-text h2 {
            font-family: var(--font-serif);
            font-size: 2.8rem;
            line-height: 1.2;
            margin-bottom: 1.5rem;
            font-weight: 400;
        }
        .team-text p {
            color: #AAA;
            line-height: 1.6;
            margin-bottom: 2rem;
            font-size: 0.95rem;
        }
        .btn-light {
            background: white;
            color: var(--dark);
            padding: 0.7rem 1.8rem;
            border-radius: 2rem;
            text-decoration: none;
            display: inline-block;
            font-size: 0.9rem;
            font-weight: 500;
            transition: background 0.3s;
        }
        .btn-light:hover {
            background: #EEE;
        }

        /* Section 4: Collection */
        .collection {
            padding: 6rem 2rem;
        }
        .collection-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-bottom: 3rem;
        }
        .collection-header h2 {
            font-family: var(--font-serif);
            font-size: 2.5rem;
            max-width: 300px;
            line-height: 1.2;
            font-weight: 500;
        }
        .collection-header p {
            color: var(--gray);
            max-width: 350px;
            line-height: 1.6;
            font-size: 0.95rem;
        }

        .properties-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
            align-items: end;
        }

        .property-card img {
            width: 100%;
            border-radius: 1rem;
            object-fit: cover;
            margin-bottom: 1rem;
        }
        
        .property-card:nth-child(1) img { height: 200px; }
        .property-card:nth-child(2) img { height: 350px; }
        .property-card:nth-child(3) img { height: 250px; }

        .property-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .property-info h4 {
            font-size: 1rem;
            font-weight: 600;
        }
        .property-info span {
            font-weight: 600;
            color: var(--dark);
        }

        @media (max-width: 1024px) {
            .s2-grid { grid-template-columns: 1fr; gap: 3rem; }
            .team-section { flex-direction: column; padding: 4rem 2rem; }
            .team-photos { flex-direction: column; width: 100%; }
            .team-member img { height: auto; aspect-ratio: 4/3; }
            .properties-grid { grid-template-columns: 1fr; }
            .property-card img { height: auto !important; aspect-ratio: 16/10; }
            .hero-stats { position: absolute; top: auto; bottom: 7rem; left: 0; right: 0; width: 100%; flex-direction: row; justify-content: center; flex-wrap: wrap; margin-top: 0; gap: 1rem; padding: 0 1rem; }
            .hero-content { top: 38%; }
            .hero-title { font-size: clamp(3.5rem, 15vw, 6rem); }
            nav { padding: 1.5rem; }
            .nav-links { display: none; }
            .hero-subtitle { flex-wrap: wrap; gap: 0.5rem; font-size: 0.85rem; }
            .collection-header { flex-direction: column; align-items: flex-start; gap: 1rem; }
            .collection-header h2 { max-width: 100%; }
            .hero-container { min-height: auto; padding-bottom: 0; }
            .discover-btn { bottom: 2rem; }
        }

        @media (max-width: 600px) {
            .hero-container { margin: 0; border-radius: 0; height: 100vh; }
            .social-icons { display: none; }
            nav { justify-content: space-between; padding: 1.5rem; }
            .contact-btn span { display: none; }
            .contact-btn { padding: 0; width: 45px; height: 45px; justify-content: center; border-radius: 50%; }
            .stat-card { width: 45%; padding: 1rem; }
            .stat-card h3 { font-size: 1.8rem; }
            .team-section { border-radius: 0; margin: 0; }
            .section-2 { padding: 4rem 0; }
            .collection { padding: 4rem 1.5rem; }
            .section-title-center { font-size: 2.2rem; }
        }
    </style>
</head>
<body>

    <!-- Hero Section -->
    <div class="hero-container" id="home">
        <div class="hero-overlay"></div>
        
        <nav>
            <div class="logo">
                <i class="fa-solid fa-leaf"></i> RVHome
            </div>
            <div class="nav-links">
                <a href="#home" class="active">Home</a>
                <a href="#agents">Agents</a>
                <a href="#about">Work in Progress</a>
                <a href="#collection">Collection</a>
                <a href="#about">About Us</a>
            </div>
            <div class="nav-right">
                <div class="social-icons">
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-solid fa-x"></i></a>
                </div>
                <a href="#" class="contact-btn"><i class="fa-solid fa-phone"></i> <span>+62 812 3456 7890</span></a>
            </div>
        </nav>

        <div class="hero-content">
            <div class="hero-subtitle">
                <span>Innovation</span>
                <span>Upgrade your life with smart home technology</span>
            </div>
            <h1 class="hero-title">RV HOME</h1>
        </div>

        <div class="hero-stats">
            <div class="stat-card">
                <h3>5.9K+</h3>
                <p>Successfully delivering innovative projects around the world</p>
            </div>
            <div class="stat-card">
                <h3>10K+</h3>
                <p>Award-winning innovative projects delivered globally</p>
            </div>
        </div>

        <a href="#" class="discover-btn">
            DISCOVER MORE <i class="fa-solid fa-arrow-right"></i>
        </a>
    </div>

    <!-- Section 2 -->
    <section class="section-2" id="about">
        <div class="container">
            <h2 class="section-title-center">Experience Excellence<br>In Real Estate</h2>
            
            <div class="s2-grid">
                <div class="s2-left">
                    <h3>Your Trusted Partner in Finding the Perfect Home</h3>
                    <p>At RVHome Real Estate, we believe that buying or selling a home should be an exciting and stress-free experience.</p>
                    <a href="#" class="btn-dark">About Us</a>
                    
                    <div class="partners">
                        <p>Our Partner:</p>
                        <div class="partner-logos">
                            <span><i class="fa-brands fa-figma"></i> Polymath</span>
                            <span><i class="fa-brands fa-google"></i> Quotient</span>
                        </div>
                    </div>
                </div>
                
                <div class="s2-center">
                    <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?auto=format&fit=crop&w=1000&q=80" alt="Modern House at Sunset">
                </div>
                
                <div class="s2-right">
                    <div class="feature-box">
                        <h4>Expert Guidance</h4>
                        <p>Our experienced agents provide professional advice and personalized support.</p>
                    </div>
                    <div class="feature-box">
                        <h4>Wide Property Selection</h4>
                        <p>From luxury homes to budget-friendly apartments, we have something for everyone.</p>
                    </div>
                    <div class="feature-box" style="border: none;">
                        <div class="reviews">
                            <h4>Reviews:</h4>
                            <div class="avatars">
                                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=100&q=80" alt="Avatar">
                                <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?auto=format&fit=crop&w=100&q=80" alt="Avatar">
                                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=100&q=80" alt="Avatar">
                                <div style="background: var(--dark); color: white; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-left: -12px; font-size: 0.75rem; z-index: 2; position: relative;">10k+</div>
                                <div class="rating">
                                    <strong>4.9</strong>
                                    <span>Customer Ratings</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3: Team -->
    <section class="team-section" id="agents">
        <div class="team-photos">
            <div class="team-member">
                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=600&q=80" alt="Luka Dias">
                <h5>Luka Dias</h5>
                <span>Project Manager</span>
            </div>
            <div class="team-member">
                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=600&q=80" alt="Tiana Korsgaard">
                <h5>Tiana Korsgaard</h5>
                <span>Sales Marketing</span>
            </div>
            <div class="team-member">
                <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&w=600&q=80" alt="Tiana Donin">
                <h5>Tiana Donin</h5>
                <span>Property Agent</span>
            </div>
        </div>
        <div class="team-text">
            <h2>Meet Our Expert Team</h2>
            <p>Our team of experienced professionals is committed to helping you find the perfect home or investment property.</p>
            <a href="#" class="btn-light">View All</a>
        </div>
    </section>

    <!-- Section 4: Collection -->
    <section class="collection container" id="collection">
        <div class="collection-header">
            <h2>Find Your Dream Home Today</h2>
            <p>Explore our latest listings in the most sought-after locations, we have the perfect home for you.</p>
        </div>
        
        <div class="properties-grid">
            <div class="property-card">
                <img src="https://images.unsplash.com/photo-1580587771525-78b9dba3b914?auto=format&fit=crop&w=800&q=80" alt="Property">
                <div class="property-info">
                    <h4>Luxury Beachfront Villa</h4>
                    <span>Rp 24.300.000.000</span>
                </div>
            </div>
            <div class="property-card">
                <div style="position: relative;">
                    <span style="position: absolute; top: 1rem; left: 1rem; background: rgba(255,255,255,0.9); padding: 0.4rem 1rem; border-radius: 2rem; font-size: 0.8rem; font-weight: 600; color: var(--dark);"><i class="fa-solid fa-check"></i> Available Property</span>
                    <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&w=800&q=80" alt="Property">
                </div>
                <div class="property-info">
                    <h4>Modern Family Home</h4>
                    <span>Rp 67.500.000.000</span>
                </div>
            </div>
            <div class="property-card">
                <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=800&q=80" alt="Property">
                <div class="property-info">
                    <h4>Modern Townhouse</h4>
                    <span>Rp 13.350.000.000</span>
                </div>
            </div>
        </div>
    </section>

    <footer style="background: var(--dark); color: #AAA; text-align: center; padding: 2.5rem 2rem; font-size: 0.9rem;">
        <p>&copy; 2026 RVHome Real Estate. Template by <span style="color: white; font-weight: 600;">RVStore</span>. All rights reserved.</p>
    </footer>

</body>
</html>
