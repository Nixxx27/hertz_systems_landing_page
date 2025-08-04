<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Systems Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        :root {
            --primary-yellow: #FFCC00;
            --dark-gray: #434244;
            --medium-gray: #808285;
            --black: #000000;
            --white: #FFFFFF;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--white);
            color: var(--dark-gray);
            line-height: 1.6;
            overflow-x: hidden;
        }

        .hero-section {
            background-color: #1a1a1a;
            height: 450px;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        @media (min-width: 768px) {
            .hero-section {
                height: 500px;
            }
        }

        .grid-overlay {
            position: absolute;
            inset: 0;
            opacity: 0.1;
            background-image: linear-gradient(to right, #333 1px, transparent 1px), linear-gradient(to bottom, #333 1px, transparent 1px);
            background-size: 20px 20px;
        }

        .curved-bg-white {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 100%;
            height: 150px; /* Adjusted for better visual */
            background-color: white;
            border-top-left-radius: 50%;
            transform: translateY(50%);
            z-index: 1;
        }

        .hero-section .container {
            position: relative;
            z-index: 2;
            padding-top: 4rem;
            padding-bottom: 4rem;
        }

        .hero-section h3 {
            margin-bottom: 1rem;
            font-size: 65px;
        }

        .hero-section h1 {
            font-size: 80px;
            line-height: 1.2;
            margin-bottom: 2rem;
        }

        .form-dropdown:hover {
            background-color: #FFCC00;
        }

        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 30px;
                margin-bottom: 1rem;
            }

            .hero-section h3 {
                font-size: 40px;
                margin-bottom: 0.5rem;
            }

                .hero-section p {
                font-size: 0.5rem;
            }
        }

        @media (min-width: 992px) {
            .hero-section h1 {
                font-size: 4rem;
            }
        }

        .hero-section .btn {
            padding: 0.75rem 2rem;
            border-radius: 9999px; /* Full pill shape */
            font-weight: 600;
        }

        .navbar {
            background-color: var(--white) !important;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 1rem 0;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: var(--black) !important;
        }

        .nav-link {
            color: var(--dark-gray) !important;
            font-weight: 500;
            margin: 0 1rem;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: var(--primary-yellow) !important;
        }

        .hero-section {
            background: linear-gradient(135deg, var(--black) 0%, var(--dark-gray) 100%);
            color: var(--white);
            padding: 8rem 0 6rem;
            position: relative;
            overflow: hidden;
            height: 50vh;
            border-botton-right-radius: 50%;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="%23FFCC00" stroke-width="0.5" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
            opacity: 0.3;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        .hero-subtitle {
            font-size: 1.3rem;
            color: var(--medium-gray);
            margin-bottom: 2rem;
            max-width: 600px;
        }

        .btn-primary-custom {
            background-color: var(--primary-yellow);
            border: none;
            color: var(--black);
            font-weight: 600;
            padding: 1rem 2rem;
            border-radius: 50px;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-primary-custom:hover {
            background-color: #e6b800;
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(255, 204, 0, 0.3);
        }

        .features-section {
            padding: 6rem 0;
            background-color: #f8f9fa;
        }

        .section-title {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-title h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--black);
            margin-bottom: 1rem;
        }

        .section-title p {
            font-size: 1.1rem;
            color: var(--medium-gray);
            max-width: 600px;
            margin: 0 auto;
        }

        .btn-add::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--primary-yellow);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .btn-add {
            border-radius: 15px;
            padding: 1rem;
            margin-bottom: 2rem;
            box-shadow: 0 5px 25px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            border: 2px solid transparent;
            position: relative;
            overflow: hidden;
        }


        .system-card {
            background: var(--white);
            border-radius: 15px;
            padding: 1rem;
            margin-bottom: 2rem;
            box-shadow: 0 5px 25px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            border-bottom: 5px solid #FFCC00;
            border-top: 2px solid transparent;
            border-right: 2px solid transparent;
            border-left: 2px solid transparent;
            position: relative;
            overflow: hidden;
        }

        .system-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--primary-yellow);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .system-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
            border-color: var(--primary-yellow);
        }

        .system-card:hover::before {
            transform: scaleX(1);
        }

        .system-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--primary-yellow), #e6b800);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            font-size: 2rem;
            color: var(--black);
        }

        .system-title {
            font-size: 13px;
            font-weight: 600;
            color: var(--black);
            margin-bottom: 1rem;
        }

        .system-description {
            color: var(--medium-gray);
            margin-bottom: 1.5rem;
            line-height: 1.7;
        }

        .system-stats {
            display: flex;
            gap: 2rem;
            margin-top: 1.5rem;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary-yellow);
            display: block;
        }

        .stat-label {
            font-size: 0.9rem;
            color: var(--medium-gray);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .status-badge {
            display: inline-block;
            padding: 0.3rem 1rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .status-online {
            background-color: #d4edda;
            color: #155724;
        }

        .status-maintenance {
            background-color: #fff3cd;
            color: #856404;
        }

        .status-offline {
            background-color: #f8d7da;
            color: #721c24;
        }

        .cta-section {
            background: var(--black);
            color: var(--white);
            padding: 5rem 0;
            text-align: center;
        }

        .cta-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .cta-subtitle {
            font-size: 1.2rem;
            color: var(--medium-gray);
            margin-bottom: 2rem;
        }

        .footer {
            background-color: var(--dark-gray);
            color: var(--white);
            padding: 3rem 0 1rem;
        }

        .footer-links {
            list-style: none;
            padding: 0;
        }

        .footer-links li {
            margin-bottom: 0.5rem;
        }

        .footer-links a {
            color: var(--medium-gray);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: var(--primary-yellow);
        }

        .logo {
            height: 62px;
            width: 180px;
        }

        .icon{
            height: 30px;
            width: 90px;
        }

        @media (max-width: 768px) {

            .navbar-brand {
            font-size: 1rem;
        }
            
            .hero-subtitle {
                font-size: 1.1rem;
            }
            
            .system-stats {
                flex-direction: column;
                gap: 1rem;
            }

            .section-title h2 {
            font-size: 1.5rem;
        }

        }

        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img class="icon" src="/img/Hertz_Primary_logo_Black_Yellow_Line_RGB.png" alt="Icon">
                Systems Landing Page
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

<section id="home" class="hero-section">
        <div class="grid-overlay"></div>
        <div class="curved-bg-white"></div>

        <div class="container py-5 position-relative z-2">

            <div class="text-center">
            <h1 class="hero-title fade-in" style="color: #FFCC00;">Explore Systems</h1>
            <p>Explore and access all internal and partner systems in one place. 
               Use this page as a centralized dashboard to quickly navigate to the tools and platforms relevant to your role.</p>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="systems" class="features-section">
        
        
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-end mb-5">
                    <button class="btn btn-primary-custom fade-in w-auto h-100" type="button" style="border-radius: 15px;" data-bs-toggle="modal" data-bs-target="#addSystemModal" aria-label="Add System">
                        <div class="d-flex align-items-center">
                        <span style="font-size: 12px;">Add System</span>                        
                        <i class='bx bx-plus pl-3' style='color:#434244'  ></i></div>
                        </button>
                </div>

                @include('modal/add_system_modal')

                <div class="col-12 mb-5">
                    <div class="section-title fade-in position-sticky">
                        <h2>Internal Systems</h2>
                    </div>
                </div>
                
                <div class="col-12 col-sm-6 col-md-12 mx-md-5 mb-5">
                    <div class="row">
                        <a href="https://admin360.exclusivecars.ph" role="button" class="col-lg-3 col-md-6 mb-4 text-decoration-none">
                                <div class="system-card fade-in d-flex align-items-center justify-content-between p-3">
                                    <h3 class="system-title mb-0">Admin System</h3>
                                    <span class="status-badge"></span>
                                </div>
                        </a>
                        
                        <a href="https://drivers.exclusivecars.ph" role="button" class="col-lg-3 col-md-6 mb-4 text-decoration-none">
                            <div class="system-card fade-in d-flex align-items-center justify-content-between p-3">
                                <h3 class="system-title mb-0">Drivers Portal App</h3>
                                <span class="status-badge"></span>
                            </div>
                        </a>


                        <a href="" role="button" class="col-lg-3 col-md-6 mb-4 text-decoration-none">
                            <div class="system-card fade-in d-flex align-items-center justify-content-between p-3">
                                <h3 class="system-title mb-0">Employee</h3>
                                <span class="status-badge"></span>
                            </div>
                        </a>

                        <a href="" role="button" class="col-lg-3 col-md-6 mb-4 text-decoration-none">
                            <div class="system-card fade-in d-flex align-items-center justify-content-between p-3">
                                <h3 class="system-title mb-0">HRIS</h3>
                                <span class="status-badge"></span>
                            </div>
                        </a>

                    </div>
                    
                    <div class="row">
                        <a href="https://fleetservice.exclusivecars.ph" role="button" class="col-lg-3 col-md-6 mb-4 text-decoration-none">
                            <div class="system-card fade-in d-flex align-items-center justify-content-between p-3">
                                <h3 class="system-title mb-0">Fleet Service</h3>
                                <span class="status-badge status-online"><i class='bx bx-right-arrow-alt'></i></span>
                            </div>
                        </a>
                        
                        <a href="" role="button" class="col-lg-3 col-md-6 mb-4 text-decoration-none">
                            <div class="system-card fade-in d-flex align-items-center justify-content-between p-3">
                                <h3 class="system-title mb-0">MCKINSEY</h3>
                                <span class="status-badge status-online"><i class='bx bx-right-arrow-alt'></i></span>
                            </div>
                        </a>


                        <a href="https://dsar-corporate.exclusivecars.ph" role="button" class="col-lg-3 col-md-6 mb-4 text-decoration-none">
                            <div class="system-card fade-in d-flex align-items-center justify-content-between p-3">
                                <h3 class="system-title mb-0">DSAR-Corporate</h3>
                                <span class="status-badge status-online"><i class='bx bx-right-arrow-alt'></i></span>
                            </div>
                        </a>

                        <a href="https://support.exclusivecars.ph/" role="button" class="col-lg-3 col-md-6 mb-4 text-decoration-none">
                            <div class="system-card fade-in d-flex align-items-center justify-content-between p-3">
                                <h3 class="system-title mb-0">Ticketing System</h3>
                                <span class="status-badge status-online"><i class='bx bx-right-arrow-alt'></i></span>
                            </div>
                        </a>

                    </div>
                </div>
                    
                    <div class="row">
                        <div class="col-12 col-lg-12 mb-5">
                            <div class="section-title fade-in position-sticky">
                                <h2>Third-Party Systems</h2>
                            </div>
                        </div>
                
                <div class="col-12 col-sm-6 col-md-12 mx-md-5 mb-5">
                    <div class="row">
                        <a href="https://dsar.exclusivecars.ph" role="button" class="col-lg-3 col-md-6 mb-4 text-decoration-none">
                            <div class="system-card fade-in d-flex align-items-center justify-content-between p-3">
                                <h3 class="system-title mb-0">DSAR</h3>
                                <span class="status-badge status-online"><i class='bx bx-right-arrow-alt'></i></span>
                            </div>
                        </a>

                        <a href="https://ghd.exclusivecars.ph" role="button" class="col-lg-3 col-md-6 mb-4 text-decoration-none">
                            <div class="system-card fade-in d-flex align-items-center justify-content-between p-3">
                                <h3 class="system-title mb-0">GHD</h3>
                                <span class="status-badge status-online"><i class='bx bx-right-arrow-alt'></i></span>
                            </div>
                        </a>
                        
                        <a href="https://partners.exclusivecars.ph" role="button" class="col-lg-3 col-md-6 mb-4 text-decoration-none">
                            <div class="system-card fade-in d-flex align-items-center justify-content-between p-3">
                                <h3 class="system-title mb-0">Partners System</h3>
                                <span class="status-badge status-online"><i class='bx bx-right-arrow-alt'></i></span>
                            </div>
                        </a>


                        <a href="https://slmc.exclusivecars.ph" role="button" class="col-lg-3 col-md-6 mb-4 text-decoration-none">
                            <div class="system-card fade-in d-flex align-items-center justify-content-between p-3">
                                <h3 class="system-title mb-0">SLMC</h3>
                                <span class="status-badge status-online"><i class='bx bx-right-arrow-alt'></i></span>
                            </div>
                        </a>

                    </div>

                    <div class="row">
                        <a href="https://track.exclusivecars.ph" role="button" class="col-lg-3 col-md-6 mb-4 text-decoration-none">
                            <div class="system-card fade-in d-flex align-items-center justify-content-between p-3">
                                <h3 class="system-title mb-0">Track</h3>
                                <span class="status-badge status-online"><i class='bx bx-right-arrow-alt'></i></span>
                            </div>
                        </a>
                        
                        <a href="" role="button" class="col-lg-3 col-md-6 mb-4 text-decoration-none">
                            <div class="system-card fade-in d-flex align-items-center justify-content-between p-3">
                                <h3 class="system-title mb-0">Hertz Collection</h3>
                                <span class="status-badge status-online"><i class='bx bx-right-arrow-alt'></i></span>
                            </div>
                        </a>

                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="section-title fade-in position-sticky">
                            <h2>Website Platforms & API</h2>
                        </div>
                    </div>
                
                <div class="col-12 col-sm-6 col-md-12 mx-md-5">
                    <div class="row">
                        <a href="" role="button" class="col-lg-3 col-md-6 mb-4 text-decoration-none">
                            <div class="system-card fade-in d-flex align-items-center justify-content-between p-3">
                                <h3 class="system-title mb-0">Hertz Website</h3>
                                <span class="status-badge status-online"><i class='bx bx-right-arrow-alt'></i></span>
                            </div>
                        </a>
                        
                        <a href="" role="button" class="col-lg-3 col-md-6 mb-4 text-decoration-none">
                            <div class="system-card fade-in d-flex align-items-center justify-content-between p-3">
                                <h3 class="system-title mb-0">Thrifty Website</h3>
                                <span class="status-badge status-online"><i class='bx bx-right-arrow-alt'></i></span>
                            </div>
                        </a>


                        <a href="https://api.exclusivecars.ph" role="button" class="col-lg-3 col-md-6 mb-4 text-decoration-none">
                            <div class="system-card fade-in d-flex align-items-center justify-content-between p-3">
                                <h3 class="system-title mb-0">Hertz API</h3>
                                <span class="status-badge status-online"><i class='bx bx-right-arrow-alt'></i></span>
                            </div>
                        </a>

                        <a href="" role="button" class="col-lg-3 col-md-6 mb-4 text-decoration-none">
                            <div class="system-card fade-in d-flex align-items-center justify-content-between p-3">
                                <h3 class="system-title mb-0">GO HERTZPHILIPPINES</h3>
                                <span class="status-badge status-online"><i class='bx bx-right-arrow-alt'></i></span>
                            </div>
                        </a>

                    </div>

                    <div class="row">
                        <a href="" role="button" class="col-lg-3 col-md-6 mb-4 text-decoration-none">
                            <div class="system-card fade-in d-flex align-items-center justify-content-between p-3">
                                <h3 class="system-title mb-0">HERTZPHILIPPINES PH</h3>
                                <span class="status-badge status-online"><i class='bx bx-right-arrow-alt'></i></span>
                            </div>
                        </a>

                    </div>
                </div>
                    
        </div>
    </section>

    <!-- Footer -->
    <footer class="pt-0 footer">
        <div class="footer-curve my-5" style="border-radius: 0px 0px 80px 80px; background-color: #FFFFFF; height: 120px;"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-center">
                    <img class="logo" src="/img/Hertz_Primary_Logo_White_Yellow_Line_RGB.png" alt="hertz-logo">
                    </div>
                    <h5 class="pt-3 d-flex justify-content-center" style="color: var(--primary-yellow);">Systems Landing Page</h5>
                </div>
            </div>
            <hr style="border-color: var(--medium-gray); margin: 2rem 0 1rem;">
            <div class="text-center">
                <p class="text-light">Copyright © 2025 Hertz Philippines. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Smooth scrolling
        function scrollToSection(sectionId) {
            document.getElementById(sectionId).scrollIntoView({
                behavior: 'smooth'
            });
        }

        // Fade in animation on scroll
        function handleScrollAnimations() {
            const elements = document.querySelectorAll('.fade-in');
            
            elements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const elementVisible = 150;
                
                if (elementTop < window.innerHeight - elementVisible) {
                    element.classList.add('visible');
                }
            });
        }

        // Initialize animations on page load
        document.addEventListener('DOMContentLoaded', function() {
            // Trigger initial animations
            setTimeout(() => {
                const heroElements = document.querySelectorAll('.hero-section .fade-in');
                heroElements.forEach((element, index) => {
                    setTimeout(() => {
                        element.classList.add('visible');
                    }, index * 200);
                });
            }, 300);
            
            // Handle scroll animations
            window.addEventListener('scroll', handleScrollAnimations);
            handleScrollAnimations(); // Check initial state
        });

        // Interactive alert function
        function showAlert() {
            alert('Welcome to SystemHub! This demo showcases our server management platform. Contact us to learn more about our enterprise solutions.');
        }

        // Add hover effects to system cards
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.system-card');
            
            cards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-10px) scale(1.02)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                });
            });
        });

        // Dynamic stats counter animation
        function animateCounters() {
            const counters = document.querySelectorAll('.stat-number');
            
            counters.forEach(counter => {
                const target = counter.textContent;
                const isNumber = !isNaN(parseFloat(target));
                
                if (isNumber) {
                    const finalValue = parseFloat(target);
                    let currentValue = 0;
                    const increment = finalValue / 50;
                    
                    const timer = setInterval(() => {
                        currentValue += increment;
                        if (currentValue >= finalValue) {
                            counter.textContent = target;
                            clearInterval(timer);
                        } else {
                            counter.textContent = Math.floor(currentValue).toString();
                        }
                    }, 30);
                }
            });
        }

        // Trigger counter animation when section is visible
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    observer.unobserve(entry.target);
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const featuresSection = document.getElementById('systems');
            if (featuresSection) {
                observer.observe(featuresSection);
            }
        });
    </script>
    <script>
    function showStatusBadge(status, containerId) {
        const badge = document.createElement('span');
        badge.classList.add('status-badge');

        switch (status.toLowerCase()) {
            case 'online':
                badge.classList.add('status-online');
                badge.textContent = 'Online';
                break;
            case 'maintenance':
                badge.classList.add('status-maintenance');
                badge.textContent = 'Maintenance';
                break;
            case 'offline':
                badge.classList.add('status-offline');
                badge.textContent = 'Offline';
                break;
            default:
                badge.textContent = 'Unknown';
        }

        const container = document.getElementById(containerId);
        if (container) {
            container.appendChild(badge);
        } else {
            console.warn(`Container with ID "${containerId}" not found.`);
        }
    }
</script>
</body>
</html>