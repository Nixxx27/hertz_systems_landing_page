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

        .curved-bg-white {
            background: #f8f9fa;
            position: absolute;
            bottom: 0;
            right: 0;
            width: 100%;
            height: 50px; /* Adjusted for better visual */
            border-top-left-radius: 50%;
            transform: translateY(50%);
            z-index: 1;
        }


        .hero-section {
            background-color: #1a1a1a;
            height: 250px;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        @media (max-width: 768px) {
            .hero-section {
                height: 200px;
            }
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
            font-size: 2.5rem;
            font-weight: 700;
            margin: 1rem;
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

        .system-card {
            /* background: var(--white); */
            background: linear-gradient(135deg, rgba(255, 254, 0, 0.1), rgba(255, 228, 218, 0.1));
            border-radius: 15px;
            height: 100vh;
            padding: 1rem;
            border: none;
            margin-bottom: 2rem;
            box-shadow: 0 5px 25px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .system-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            /* height: 4px; */
            background: var(--primary-yellow);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }


        .system-card:hover{
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
            /* background: linear-gradient(135deg, rgba(255, 254, 0, 0.1), rgba(255, 228, 218, 0.1)); */
            opacity: 1;
            /* height: 100vh; */
             transition: all 0.3s ease;
             z-index: 1;
        }

        .blue-theme:hover .card-glow {
  
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
            font-size: 15px;
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
            height: 62px;
            width: 180px;
        }

        @media (max-width: 768px) {

            .icon{
            height: 35px;
            width: 100px;
        }
            .hero-section h2 {
                font-size: 20px;
                margin-bottom: 1rem;
            }

            .hero-section h3 {
                font-size: 40px;
                margin-bottom: 0.5rem;
            }

                .hero-section p {
                font-size: 0.5rem;
            }

            .system-title{
                font-size: 12px;
            }
        }

        @media (min-width: 992px) {
            .hero-section h1 {
                font-size: 4rem;
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
    <style>

.system-card .card-body {
  padding: 0; /* Remove default Bootstrap padding */
  width: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.system-card .card-header-content {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding-bottom: 1rem;
}


.icon-primary {
  color: var(--yellow);
  width: 40px;
  height: 40px;
  stroke-width: 2;
}

.card-title {
  font-weight: 600;
  margin-top: 0.5rem;
}

.portal-list {
  max-height: none;
  opacity: 1;
  visibility: visible;
  background-color: none;
  border-radius: 0.25rem;
  padding: 0.75rem; /* Show padding by default */
  display: flex;
  flex-direction: column;
  gap: 0.5rem;
  transform: none;
  z-index: 1;
}


.btn-portal {
  width: 75%;
  text-align: center;
  color: var(--black);
  border: none;
  transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
  font-size: 1rem;
  background: var(--white);
  border-radius: 15px;
            padding: 0.5rem;
            margin-bottom: 2rem;
            box-shadow: 0 5px 25px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            border-bottom: 5px solid #FFCC00;
            border-top: 2px solid transparent;
            border-right: 2px solid transparent;
            border-left: 2px solid transparent;
}

.btn-portal:hover {
    border-top: 5px solid rgba(255, 204, 0, 0.8);
    border-right: 2px solid rgba(255, 204, 0, 0.8);
    border-left: 2px solid rgba(255, 204, 0, 0.8);
}

.btn-portal:active {
  background-color: rgba(255, 204, 0, 0.8);
  color: var(--black);
  border-color: rgba(255, 204, 0, 0.8);
}
    </style>
</head>
<body>
    <!-- Navigation -->
    <!-- <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-server me-2" style="color: var(--primary-yellow);"></i>
                Systems Landing Page
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav> -->

    <!-- Hero Section -->
     <section id="home" class="hero-section">
        <div class="grid-overlay"></div>
        <div class="curved-bg-white"></div>

        <div class="container py-3 position-relative z-2">

            <div class="text-center">
            <img class="icon" src="/img/Hertz_Primary_logo_White_Yellow_Line_RGB.png" alt="Icon">
            <h2 class="hero-title fade-in" style="color: #FFCC00;">Systems Landing Page</h2>
            <p class="text-light fade-in">Explore and access all internal and partner systems in one place. 
               Use this page as a centralized dashboard to quickly navigate to the tools and platforms relevant to your role.</p>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="systems" class="features-section p-1">
        
        
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-6 col-lg-4">
                <div class="card system-card yellow-theme fade-in h-auto" id="category-internal">
                    <div class="card-glow"></div>
                    <div class="card-body d-flex flex-column align-items-center text-center">
                        <div class="card-header-content">
                            <h5 class="card-title text-black">Internal System</h5>
                        </div>
                        <div class="d-flex align-items-center portal-list mt-1 w-100">
                            <a href="https://admin360.exclusivecars.ph" role="button" class="text-decoration-none btn-portal">
                                <div class="d-flex align-items-center justify-content-between p-3">
                                    <h3 class="system-title mb-0">Admin System</h3>
                                    <span class="status-badge status-online">&rarr;</span>
                                </div>
                        </a>
                        
                            <a href="" role="button" class="text-decoration-none btn-portal">
                            <div class="d-flex align-items-center justify-content-between p-3">
                                <h3 class="system-title mb-0">Employee</h3>
                                <span class="status-badge status-online">&rarr;</span>
                            </div>
                        </a>

                        <a href="https://drivers.exclusivecars.ph" role="button" class="text-decoration-none btn-portal">
                            <div class="d-flex align-items-center justify-content-between p-3">
                                <h3 class="system-title mb-0">Drivers Portal App</h3>
                                <span class="status-badge status-online">&rarr;</span>
                            </div>
                        </a>


                        <a href="" role="button" class="text-decoration-none btn-portal">
                            <div class="d-flex align-items-center justify-content-between p-3">
                                <h3 class="system-title mb-0">Employee</h3>
                                <span class="status-badge status-online">&rarr;</span>
                            </div>
                        </a>

                        <a href="" role="button" class="text-decoration-none btn-portal">
                            <div class="d-flex align-items-center justify-content-between p-3">
                                <h3 class="system-title mb-0">HRIS</h3>
                                <span class="status-badge status-online">&rarr;</span>
                            </div>
                        </a>

                        <a href="https://fleetservice.exclusivecars.ph" role="button" class="text-decoration-none btn-portal">
                            <div class="d-flex align-items-center justify-content-between p-3">
                                <h3 class="system-title mb-0">Fleet Service</h3>
                                <span class="status-badge status-online">&rarr;</span>
                            </div>
                        </a>
                        
                        <a href="" role="button" class="text-decoration-none btn-portal">
                            <div class="d-flex align-items-center justify-content-between p-3">
                                <h3 class="system-title mb-0">MCKINSEY</h3>
                                <span class="status-badge status-online">&rarr;</span>
                            </div>
                        </a>


                        <a href="https://dsar-corporate.exclusivecars.ph" role="button" class="text-decoration-none btn-portal">
                            <div class="d-flex align-items-center justify-content-between p-3">
                                <h3 class="system-title mb-0">DSAR-Corporate</h3>
                                <span class="status-badge status-online">&rarr;</span>
                            </div>
                        </a>

                        <a href="https://support.exclusivecars.ph/" role="button" class="text-decoration-none btn-portal">
                            <div class="d-flex align-items-center justify-content-between p-3">
                                <h3 class="system-title mb-0">Ticketing System</h3>
                                <span class="status-badge status-online">&rarr;</span>
                            </div>
                        </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card system-card fade-in h-auto" id="category-partners">
                    <div class="card-body d-flex flex-column align-items-center text-center">
                        <div class="card-header-content">
                            <h5 class="card-title text-black">Client & Partners System</h5>
                        </div>
                        <div class="d-flex align-items-center portal-list mt-1 w-100">
                            <a href="https://dsar.exclusivecars.ph" role="button" class="text-decoration-none btn-portal">
                            <div class="d-flex align-items-center justify-content-between p-3">
                                <h3 class="system-title mb-0">DSAR</h3>
                                <span class="status-badge status-online">&rarr;</span>
                            </div>
                        </a>

                        <a href="https://ghd.exclusivecars.ph" role="button" class="text-decoration-none btn-portal">
                            <div class="d-flex align-items-center justify-content-between p-3">
                                <h3 class="system-title mb-0">GHD</h3>
                                <span class="status-badge status-online">&rarr;</span>
                            </div>
                        </a>
                        
                        <a href="https://partners.exclusivecars.ph" role="button" class="text-decoration-none btn-portal">
                            <div class="d-flex align-items-center justify-content-between p-3">
                                <h3 class="system-title mb-0">Partners System</h3>
                                <span class="status-badge status-online">&rarr;</span>
                            </div>
                        </a>

                        <a href="https://slmc.exclusivecars.ph" role="button" class="text-decoration-none btn-portal">
                            <div class="d-flex align-items-center justify-content-between p-3">
                                <h3 class="system-title mb-0">SLMC</h3>
                                <span class="status-badge status-online">&rarr;</span>
                            </div>
                        </a>

                         <a href="https://track.exclusivecars.ph" role="button" class="text-decoration-none btn-portal">
                            <div class="d-flex align-items-center justify-content-between p-3">
                                <h3 class="system-title mb-0">Track</h3>
                                <span class="status-badge status-online">&rarr;</span>
                            </div>
                        </a>
                        
                        <a href="" role="button" class="text-decoration-none btn-portal">
                            <div class="d-flex align-items-center justify-content-between p-3">
                                <h3 class="system-title mb-0">Hertz Collection</h3>
                                <span class="status-badge status-online">&rarr;</span>
                            </div>
                        </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card system-card fade-in h-auto" id="category-website">
                    <div class="card-body d-flex flex-column align-items-center text-center">
                        <div class="card-header-content">
                            <h5 class="card-title text-black">Website Platforms & API</h5>
                        </div>
                        <div class="d-flex align-items-center portal-list mt-1 w-100">
                            <a href="" role="button" class="text-decoration-none btn-portal">
                            <div class="d-flex align-items-center justify-content-between p-3">
                                <h3 class="system-title mb-0">Hertz Website</h3>
                                <span class="status-badge status-online">&rarr;</span>
                            </div>
                        </a>
                        
                        <a href="" role="button" class="text-decoration-none btn-portal">
                            <div class="d-flex align-items-center justify-content-between p-3">
                                <h3 class="system-title mb-0">Thrifty Website</h3>
                                <span class="status-badge status-online">&rarr;</span>
                            </div>
                        </a>


                        <a href="https://api.exclusivecars.ph" role="button" class="text-decoration-none btn-portal">
                            <div class="d-flex align-items-center justify-content-between p-3">
                                <h3 class="system-title mb-0">Hertz API</h3>
                                <span class="status-badge status-online">&rarr;</span>
                            </div>
                        </a>

                        <a href="" role="button" class="text-decoration-none btn-portal">
                            <div class="d-flex align-items-center justify-content-between p-3">
                                <h3 class="system-title mb-0">GO HERTZPHILIPPINES</h3>
                                <span class="status-badge status-online">&rarr;</span>
                            </div>
                        </a>

                        <a href="" role="button" class="text-decoration-none btn-portal">
                            <div class="d-flex align-items-center justify-content-between p-3">
                                <h3 class="system-title mb-0">HERTZPHILIPPINES PH</h3>
                                <span class="status-badge status-online">&rarr;</span>
                            </div>
                        </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>  
        </div>
    </section>

    <!-- Footer -->
    <footer class="pt-0 footer">
        <div class="footer-curve my-5" style="border-radius: 0px 0px 80px 80px; background-color: #FFFFFF; height: 120px;"></div>
        <div class="container">
            <!-- <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-center">
                    <img class="logo" src="/img/Hertz_Primary_Logo_White_Yellow_Line_RGB.png" alt="hertz-logo">
                    </div>
                    <h5 class="pt-3 d-flex justify-content-center" style="color: var(--primary-yellow);">Systems Landing Page</h5>
                </div>
            </div> -->
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
document.addEventListener("DOMContentLoaded", () => {
  const categoryCards = document.querySelectorAll(".system-card");
  const portalButtons = document.querySelectorAll(".btn-portal");

  categoryCards.forEach((card) => {
    // Handle hover animation
    card.addEventListener("mouseenter", function () {
      card.classList.add("hover");
      card.style.transform = "translateY(-10px) scale(1.02)";
    });

    card.addEventListener("mouseleave", function () {
      card.classList.remove("hover");
      card.style.transform = "translateY(0) scale(1)";
    });

    // Removed the click (pressed) state logic
  });

  // Handle hover animations for .btn-portal elements too
  portalButtons.forEach((btn) => {
    btn.addEventListener("mouseenter", function () {
      btn.style.transform = "translateY(-10px) scale(1.02)";
    });

    btn.addEventListener("mouseleave", function () {
      btn.style.transform = "translateY(0) scale(1)";
    });
  });
});
</script>
</body>
</html>