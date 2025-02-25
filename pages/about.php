<?php
// about.php
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Optimum Sync</title>
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', 'Segoe UI', sans-serif;
        }

        body {
            background-color: #0f0f19;
            color: #e0e0e0;
            overflow-x: hidden;
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
            background-color: #0f0f19;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 50% 50%, rgba(120, 41, 255, 0.03) 0%, rgba(0, 0, 0, 0) 70%);
        }

        .hero-content {
            position: relative;
            z-index: 2;
            width: 100%;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .hero-text {
            animation: fadeIn 1s ease-out;
        }

        .hero-text h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            background: linear-gradient(to right, #7829ff, #13f1fc);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            line-height: 1.2;
        }

        .hero-text p {
            font-size: 1.1rem;
            margin-bottom: 2rem;
            color: #b0b0b0;
            max-width: 90%;
        }

        .hero-graphic {
            position: relative;
            height: 450px;
        }

        .circle {
            position: absolute;
            border-radius: 50%;
            opacity: 0.8;
        }

        .circle-1 {
            width: 300px;
            height: 300px;
            background: linear-gradient(135deg, #7829ff 0%, #13f1fc 100%);
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0.15;
            filter: blur(40px);
            animation: pulse 5s infinite alternate;
        }

        .circle-2 {
            width: 220px;
            height: 220px;
            border: 2px solid rgba(120, 41, 255, 0.3);
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            animation: rotate 20s linear infinite;
        }

        .circle-3 {
            width: 320px;
            height: 320px;
            border: 1px solid rgba(19, 241, 252, 0.2);
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            animation: rotate 25s linear infinite reverse;
        }

        .dot {
            position: absolute;
            background-color: #13f1fc;
            border-radius: 50%;
            filter: blur(1px);
        }

        .dot-1 {
            width: 10px;
            height: 10px;
            top: 40px;
            left: 50%;
            animation: float 5s ease-in-out infinite;
        }

        .dot-2 {
            width: 7px;
            height: 7px;
            bottom: 60px;
            right: 100px;
            background-color: #7829ff;
            animation: float 7s ease-in-out infinite;
        }

        .dot-3 {
            width: 5px;
            height: 5px;
            top: 100px;
            left: 100px;
            animation: float 6s ease-in-out infinite 1s;
        }

        /* About Section */
        .about {
            padding: 120px 0;
            position: relative;
            background-color: #13131f;
        }

        .about::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url("data:image/svg+xml,%3Csvg width='20' height='20' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%239C92AC' fill-opacity='0.04' fill-rule='evenodd'%3E%3Ccircle cx='3' cy='3' r='3'/%3E%3Ccircle cx='13' cy='13' r='3'/%3E%3C/g%3E%3C/svg%3E");
            opacity: 0.5;
        }

        .section-title {
            position: relative;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-size: 2.5rem;
            color: #ffffff;
            display: inline-block;
            background: linear-gradient(to right, #ffffff, #b0b0b0);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .section-title::after {
            content: '';
            position: absolute;
            width: 60px;
            height: 4px;
            background: linear-gradient(to right, #7829ff, #13f1fc);
            bottom: -15px;
            left: 0;
            border-radius: 2px;
        }

        .about-cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-bottom: 60px;
        }

        .about-card {
            background-color: rgba(25, 25, 35, 0.6);
            backdrop-filter: blur(10px);
            border-radius: 16px;
            padding: 30px;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.05);
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .about-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 0;
            background: linear-gradient(to bottom, #7829ff, #13f1fc);
            transition: height 0.5s ease;
            z-index: -1;
        }

        .about-card:hover::before {
            height: 100%;
        }

        .about-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        .about-card span {
            font-size: 3rem;
            margin-bottom: 20px;
            display: block;
            background: linear-gradient(to right, #7829ff, #13f1fc);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            font-weight: 700;
        }

        .about-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #ffffff;
        }

        .about-card p {
            color: #b0b0b0;
            font-size: 0.95rem;
        }

        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .about-image {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        .about-image img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.5s ease;
        }

        .about-image:hover img {
            transform: scale(1.05);
        }

        .about-image::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top, rgba(15, 15, 25, 0.8), transparent);
        }

        .about-text h3 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: #ffffff;
        }

        .about-text p {
            margin-bottom: 20px;
            color: #b0b0b0;
        }

        /* Vision & Mission Section */
        .vision-mission {
            padding: 120px 0;
            background-color: #0f0f19;
            position: relative;
        }

        .vision-mission-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
        }

        .vm-card {
            background-color: rgba(25, 25, 35, 0.6);
            border-radius: 16px;
            padding: 40px;
            position: relative;
            overflow: hidden;
            z-index: 1;
            border: 1px solid rgba(255, 255, 255, 0.05);
            transition: all 0.3s ease;
        }

        .vm-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        .vm-card::before {
            content: '';
            position: absolute;
            width: 120px;
            height: 120px;
            background: linear-gradient(135deg, #7829ff, #13f1fc);
            filter: blur(80px);
            opacity: 0.1;
            top: -20px;
            right: -20px;
            z-index: -1;
            transition: all 0.5s ease;
        }

        .vm-card:hover::before {
            width: 100%;
            height: 100%;
            top: 0;
            right: 0;
            opacity: 0.15;
        }

        .vm-card h3 {
            display: flex;
            align-items: center;
            font-size: 1.8rem;
            margin-bottom: 25px;
            color: #ffffff;
        }

        .vm-card h3 svg {
            margin-right: 15px;
            color: #13f1fc;
        }

        .vm-card p {
            color: #b0b0b0;
            margin-bottom: 15px;
        }

        /* Target Market Section */
        .target-market {
            padding: 120px 0;
            position: relative;
            background-color: #13131f;
        }

        .market-slider {
            display: flex;
            gap: 30px;
            padding: 20px 0;
            position: relative;
            overflow-x: auto;
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .market-slider::-webkit-scrollbar {
            display: none;
        }

        .market-card {
            flex: 0 0 320px;
            background-color: rgba(25, 25, 35, 0.6);
            border-radius: 16px;
            padding: 30px;
            border: 1px solid rgba(255, 255, 255, 0.05);
            position: relative;
            transition: all 0.3s ease;
        }

        .market-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            border-color: rgba(120, 41, 255, 0.3);
        }

        .market-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, rgba(120, 41, 255, 0.1), rgba(19, 241, 252, 0.1));
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .market-icon svg {
            color: #13f1fc;
        }

        .market-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #ffffff;
        }

        .market-card p {
            color: #b0b0b0;
            font-size: 0.95rem;
        }

        .market-card-number {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 4rem;
            font-weight: 700;
            opacity: 0.1;
            background: linear-gradient(135deg, #7829ff, #13f1fc);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        /* Animations */
        @keyframes pulse {
            0% {
                transform: translate(-50%, -50%) scale(1);
                opacity: 0.15;
            }
            100% {
                transform: translate(-50%, -50%) scale(1.2);
                opacity: 0.1;
            }
        }

        @keyframes rotate {
            from {
                transform: translate(-50%, -50%) rotate(0deg);
            }
            to {
                transform: translate(-50%, -50%) rotate(360deg);
            }
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        .fade-in.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .hero-grid, .about-content, .vision-mission-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .hero {
                padding: 80px 0;
                min-height: auto;
            }

            .about-cards {
                grid-template-columns: repeat(2, 1fr);
            }

            .hero-graphic {
                height: 350px;
                margin: 0 auto;
                max-width: 400px;
            }
        }

        @media (max-width: 768px) {
            .about-cards {
                grid-template-columns: 1fr;
            }

            .hero-text h1 {
                font-size: 2.5rem;
            }

            .section-title h2 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-grid">
                <div class="hero-text">
                    <h1>Synchronizing Success in the Digital Era</h1>
                    <p>At Optimum Sync, we empower businesses to reach their maximum potential through cutting-edge technology solutions that optimize operations, enhance productivity, and drive sustainable growth.</p>
                </div>
                <div class="hero-graphic">
                    <div class="circle circle-1"></div>
                    <div class="circle circle-2"></div>
                    <div class="circle circle-3"></div>
                    <div class="dot dot-1"></div>
                    <div class="dot dot-2"></div>
                    <div class="dot dot-3"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about">
        <div class="container">
            <div class="section-title fade-in">
                <h2>About Optimum Sync</h2>
            </div>
            <div class="about-cards">
                <div class="about-card fade-in">
                    <span>2018</span>
                    <h3>Founded</h3>
                    <p>Established with a vision to transform how businesses leverage technology for growth and efficiency.</p>
                </div>
                <div class="about-card fade-in">
                    <span>500+</span>
                    <h3>Clients</h3>
                    <p>Trusted by industry leaders and innovative startups across multiple sectors worldwide.</p>
                </div>
                <div class="about-card fade-in">
                    <span>98%</span>
                    <h3>Client Retention</h3>
                    <p>Our commitment to excellence and results has built lasting partnerships with our clients.</p>
                </div>
            </div>
            <div class="about-content">
                <div class="about-image fade-in">
                    <img src="/api/placeholder/540/360" alt="Optimum Sync Team">
                </div>
                <div class="about-text fade-in">
                    <h3>Pioneering Technology Solutions</h3>
                    <p>Optimum Sync has rapidly established itself as a leader in business technology solutions. Our team of experienced professionals combines deep industry knowledge with cutting-edge technical expertise to deliver solutions that truly transform businesses.</p>
                    <p>We take pride in our ability to understand the unique challenges of each client and develop tailored strategies that drive measurable results. Our approach is collaborative, innovative, and focused on long-term success.</p>
                    <p>At Optimum Sync, we believe that the right technology, implemented correctly, can be a powerful catalyst for growth. That's why we're committed to staying at the forefront of technological advancements and bringing those benefits directly to your business.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision & Mission Section -->
    <section class="vision-mission">
        <div class="container">
            <div class="section-title fade-in">
                <h2>Vision & Mission</h2>
            </div>
            <div class="vision-mission-grid">
                <div class="vm-card fade-in">
                    <h3>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="2"></circle>
                            <path d="M12 19c-4.3 0-7.8-3.5-7.8-7.8 0-2 .8-3.9 2.1-5.4"></path>
                            <path d="M12 5c4.3 0 7.8 3.5 7.8 7.8 0 2-.8 3.9-2.1 5.4"></path>
                            <path d="M14.5 2H12a10 10 0 0 0 0 20h2.5"></path>
                            <path d="M9.5 2H12a10 10 0 0 1 0 20H9.5"></path>
                        </svg>
                        Our Vision
                    </h3>
                    <p>To be the global leader in business optimization solutions, recognized for innovation, excellence, and transformative impact. We envision a world where every business, regardless of size or industry, has access to the tools and strategies they need to thrive in an increasingly digital landscape.</p>
                    <p>We strive to create a future where technology seamlessly integrates with business processes, enabling unprecedented levels of efficiency, productivity, and growth for our clients worldwide.</p>
                </div>
                <div class="vm-card fade-in">
                    <h3>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m22 17-9.3-6.2a1 1 0 0 0-1.4 0L2 17"></path>
                            <path d="M20 8h2v9"></path>
                            <path d="M2 8h2v9"></path>
                            <path d="M4 8a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2"></path>
                        </svg>
                        Our Mission
                    </h3>
                    <p>To empower businesses through innovative technology solutions that optimize operations, enhance productivity, and accelerate growth. We are committed to delivering exceptional value to our clients by understanding their unique needs and developing customized strategies that address their specific challenges.</p>
                    <p>Through collaboration, expertise, and unwavering dedication to excellence, we aim to build lasting partnerships that drive meaningful results and contribute to the long-term success of the businesses we serve.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Target Market Section -->
    <section class="target-market">
        <div class="container">
            <div class="section-title fade-in">
                <h2>Target Market</h2>
            </div>
            <div class="market-slider">
                <div class="market-card fade-in">
                    <div class="market-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 14a5 5 0 0 0 0-4"></path>
                            <path d="M13 7V5c0-1.1-.9-2-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h6c1.1 0 2-.9 2-2v-2"></path>
                            <path d="M21 12h-6"></path>
                        </svg>
                    </div>
                    <span class="market-card-number">01</span>
                    <h3>Small to Medium Enterprises</h3>
                    <p>We provide scalable solutions for growing businesses that need robust systems without enterprise-level complexity. Our offerings help SMEs compete effectively by streamlining operations and reducing overhead costs.</p>
                </div>
                <div class="market-card fade-in">
                    <div class="market-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                            <polyline points="2 17 12 22 22 17"></polyline>
                            <polyline points="2 12 12 17 22 12"></polyline>
                        </svg>
                    </div>
                    <span class="market-card-number">02</span>
                    <h3>Enterprise Organizations</h3>
                    <p>For larger companies with complex needs, we deliver comprehensive solutions that integrate with existing infrastructure while providing the advanced capabilities needed to maintain competitive advantage in demanding markets.</p>
                </div>
                <div class="market-card fade-in">
                    <div class="market-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                            <polyline points="10 17 15 12 10 7"></polyline>
                            <line x1="15" y1="12" x2="3" y2="12"></line>
                        </svg>
                    </div>
                    <span class="market-card-number">03</span>
                    <h3>Finance Sector</h3>
                    <p>Our specialized solutions for financial institutions address complex regulatory requirements while enhancing security, efficiency, and customer experience in an increasingly competitive market.</p>
                </div>
                <div class="market-card fade-in">
                    <div class="market-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1 0-5H20"></path>
                        </svg>
                    </div>
                    <span class="market-card-number">04</span>
                    <h3>Healthcare Industry</h3>
                    <p>We deliver secure, compliant technology solutions that help healthcare providers improve patient care, streamline administrative processes, and manage health data with the highest standards of privacy and security.</p>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const fadeElements = document.querySelectorAll('.fade-in');
            
            function checkFade() {
                fadeElements.forEach(element => {
                    const elementPosition = element.getBoundingClientRect().top;
                    const screenPosition = window.innerHeight - 100;
                    
                    if (elementPosition < screenPosition) {
                        element.classList.add('active');
                    }
                });
            }
            
            // Initial check
            checkFade();
            
            // Check on scroll
            window.addEventListener('scroll', checkFade);
        });
    </script>
</body>
</html>