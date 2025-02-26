<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Services</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', 'Segoe UI', sans-serif;
            background-color: #0a0a1a;
            min-height: 100vh;
            color: #f0f0ff;
            line-height: 1.6;
        }

        /* Services Section Styles */
        #services-section {
            padding: 60px 20px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        #services-section h2 {
            font-size: 4rem;
            margin-bottom: 30px;
            background: linear-gradient(to right, #7829ff, #13f1fc);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            letter-spacing: 1px;
            font-weight: 700;
        }

        .timeline-container {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
            padding: 60px 0;
            min-height: 600px;
        }

        .content-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 80px 0;
            position: relative;
            gap: 40px;
        }

        .progress-container {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 6px;
            height: 100%;
            z-index: 1;
            border-radius: 3px;
            overflow: hidden;
        }

        .base-line {
            position: absolute;
            width: 100%;
            height: 100%;
            background: #1f1f3f;
        }

        .progress-line {
            position: absolute;
            width: 100%;
            background: linear-gradient(to bottom, #4158D0, #C850C0, #8E6BF1);
            top: 0;
            transition: height 0.5s ease;
            box-shadow: 0 0 15px rgba(99, 89, 233, 0.6);
        }

        .service-item {
            width: 45%;
            padding: 30px;
            background: rgba(15, 15, 40, 0.7);
            border-radius: 16px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
            transition: all 0.5s cubic-bezier(0.25, 1, 0.5, 1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(99, 89, 233, 0.1);
            opacity: 0.6;
            transform: translateY(20px);
        }

        .service-item.active {
            opacity: 1;
            background: rgba(25, 25, 55, 0.8);
            border: 1px solid rgba(99, 89, 233, 0.3);
            box-shadow: 0 10px 30px rgba(65, 88, 208, 0.25);
            transform: translateY(0);
        }

        .left-item {
            display: flex;
            align-items: center;
            gap: 25px;
        }

        .service-icon {
            width: 80px;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 14px;
            background-color: #151530;
            padding: 10px;
            box-shadow: 0 4px 15px rgba(65, 88, 208, 0.2);
            font-size: 36px;
            background: linear-gradient(135deg, #151530, #1a1a40);
            color: transparent;
            -webkit-background-clip: text;
            background-clip: text;
            text-shadow: 0 0 15px rgba(65, 88, 208, 0.4);
        }

        .service-icon i {
            background: linear-gradient(135deg, #4158D0, #C850C0);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .service-item h3 {
            font-size: 24px;
            background: linear-gradient(135deg, #4158D0, #8E6BF1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .service-item p {
            color: #c5c5e0;
            line-height: 1.8;
            font-size: 16px;
            margin-bottom: 15px;
            text-align: left;
        }

        .service-item ul {
            margin-top: 20px;
            padding-left: 10px;
            color: #c5c5e0;
            list-style: none;
            text-align: left;
        }

        .service-item ul li {
            margin: 12px 0;
            position: relative;
            padding-left: 22px;
            font-size: 15px;
        }

        .service-item ul li::before {
            content: "";
            position: absolute;
            left: 0;
            top: 7px;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: linear-gradient(135deg, #4158D0, #8E6BF1);
        }

        /* Circle markers for timeline */
        .timeline-marker {
            position: absolute;
            width: 20px;
            height: 20px;
            background: linear-gradient(135deg, #4158D0, #C850C0);
            border-radius: 50%;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            box-shadow: 0 0 10px rgba(65, 88, 208, 0.6);
            transition: all 0.3s ease;
        }

        .timeline-marker::before {
            content: '';
            position: absolute;
            width: 10px;
            height: 10px;
            background: #0a0a1a;
            border-radius: 50%;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        .timeline-marker.active {
            background: #fff;
            box-shadow: 0 0 15px rgba(200, 80, 192, 0.8);
        }

        /* Improved responsive design */
        @media (max-width: 991px) {
            .timeline-container {
                padding-left: 40px;
                padding-right: 40px;
            }
            
            .content-wrapper {
                gap: 30px;
            }
            
            .service-item {
                padding: 25px;
            }
        }

        @media (max-width: 768px) {
            .timeline-container {
                padding-left: 20px;
                padding-right: 20px;
            }
            
            .content-wrapper {
                flex-direction: column;
                margin: 60px 0;
                gap: 20px;
            }
            
            .service-item {
                width: 100%;
                max-width: 500px;
                margin: 0 auto;
            }
            
            .progress-container {
                left: 30px;
                transform: none;
            }
            
            /* Hide timeline markers on mobile */
            .timeline-marker {
                display: none;
            }
            
            .left-item {
                margin-left: 30px;
            }
            
            .right-item {
                margin-left: 30px;
            }
            
            #services-section h2 {
                font-size: 2.3rem;
            }
        }

        @media (max-width: 480px) {
            #services-section {
                padding: 40px 15px;
            }
            
            #services-section h2 {
                font-size: 2rem;
            }
            
            .service-item {
                padding: 20px;
            }
            
            .left-item {
                gap: 15px;
            }
            
            .service-icon {
                width: 60px;
                height: 60px;
                font-size: 28px;
            }
            
            .service-item h3 {
                font-size: 20px;
            }
            
            .service-item p, .service-item ul li {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <section id="services-section">
        <h2>Our Services</h2>
        <div class="timeline-container">
            <div class="progress-container">
                <div class="base-line"></div>
                <div class="progress-line"></div>
            </div>

            <?php
            $services = [
                [
                    'title' => 'Cloud Computing',
                    'icon' => 'fa-solid fa-cloud',
                    'features' => [
                        'Cloud Migration',
                        'DevOps Services',
                        'Cloud Security',
                        'Serverless Architecture',
                        'Multi-Cloud Strategy'
                    ]
                ],
                [
                    'title' => 'Web and Mobile Development',
                    'icon' => 'fa-solid fa-code',
                    'description' => 'Web and mobile development focus on creating seamless, user-friendly applications that enhance engagement and improve user experience. ',
                    'features' => [
                        'Frontend Development',
                        'Backend Development',
                        'Mobile App Development',
                        'Progressive Web Apps',
                        'Web Performance Optimization'
                    ]
                ],
                [
                    'title' => 'AI and Data Science',
                    'icon' => 'fa-solid fa-brain',
                    'description' => 'Transform your raw data into actionable insights with our comprehensive data science services.',
                    'features' => [
                        'Advanced Data Analytics',
                        'Predictive Modeling',
                        'Statistical Analysis',
                        'Data Visualization',
                        'Business Intelligence'
                    ]
                ],
                [
                    'title' => 'Digital Marketing',
                    'icon' => 'fa-solid fa-bullhorn',
                    'description' => 'Enhance your brands online presence and reach the right audience with data-driven digital marketing strategies. From SEO to social media advertising, we help businesses grow and maximize their ROI.',
                    'features' => [
                        'SEO and SEM',
                        'Social Media Marketing',
                        'Content Marketing',
                        'Email Marketing',
                        'Influencer Marketing'
                    ]
                ],
            ];

            foreach ($services as $index => $service) {
                echo '<div class="content-wrapper">';
                echo '<div class="timeline-marker" data-index="' . $index . '"></div>';

                // Left side
                echo '<div class="service-item left-item" data-index="' . $index . '">';
                echo '<div class="service-icon"><i class="' . $service['icon'] . '"></i></div>';
                echo '<h3>' . $service['title'] . '</h3>';
                echo '</div>';

                // Right side
                echo '<div class="service-item right-item" data-index="' . $index . '">';
                // echo '<p>' . $service['description'] . '</p>';
                echo '<ul>';
                foreach ($service['features'] as $feature) {
                    echo '<li>' . $feature . '</li>';
                }
                echo '</ul>';
                echo '</div>';

                echo '</div>';
            }
            ?>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const servicesSection = document.getElementById('services-section');
                const progressLine = servicesSection.querySelector('.progress-line');
                const contentWrappers = servicesSection.querySelectorAll('.content-wrapper');
                const timelineMarkers = servicesSection.querySelectorAll('.timeline-marker');

                function isElementInViewport(el) {
                    const rect = el.getBoundingClientRect();
                    return (
                        rect.top <= (window.innerHeight || document.documentElement.clientHeight) * 0.7 &&
                        rect.bottom >= (window.innerHeight || document.documentElement.clientHeight) * 0.3
                    );
                }

                function updatePositions() {
                    const sectionRect = servicesSection.getBoundingClientRect();
                    const sectionTop = sectionRect.top;
                    const sectionHeight = sectionRect.height;
                    const scrollPosition = window.scrollY;
                    const windowHeight = window.innerHeight;
                    const documentHeight = document.documentElement.scrollHeight;

                    // Calculate how far down the section we've scrolled
                    let sectionProgress = 0;
                    if (sectionTop <= 0) {
                        // Section is at top of viewport or above
                        sectionProgress = Math.abs(sectionTop) / (sectionHeight - windowHeight);
                    }
                    
                    // Clamp between 0 and 1
                    sectionProgress = Math.max(0, Math.min(1, sectionProgress));
                    
                    // Update progress line
                    progressLine.style.height = `${sectionProgress * 100}%`;

                    // Update each content wrapper
                    contentWrappers.forEach((wrapper, index) => {
                        const leftItem = wrapper.querySelector('.left-item');
                        const rightItem = wrapper.querySelector('.right-item');
                        const marker = timelineMarkers[index];

                        if (isElementInViewport(wrapper)) {
                            leftItem.classList.add('active');
                            rightItem.classList.add('active');
                            if (marker) marker.classList.add('active');
                        } else {
                            leftItem.classList.remove('active');
                            rightItem.classList.remove('active');
                            if (marker) marker.classList.remove('active');
                        }
                    });
                }

                // Update on scroll
                window.addEventListener('scroll', updatePositions);
                
                // Also update on resize for responsive adjustments
                window.addEventListener('resize', updatePositions);

                // Initial update
                setTimeout(updatePositions, 100);
            });
        </script>
    </section>
</body>
</html>