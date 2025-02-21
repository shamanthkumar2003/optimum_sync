<?php
// services.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Services</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #0a0a0a;
            min-height: 100vh;
            color: #fff;
        }

        /* Services Section Styles */
        #services-section {
            padding: 40px 0;
            background-color: #121212; /* Example background color */
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        #services-section h2 {
            color: #fff;
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        .timeline-container {
            position: relative;
            max-width: 1400px;
            margin: 0 auto;
            padding: 40px 0;
            min-height: 500px; /* Adjust as needed */
        }

        .content-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 60px 0;
            position: relative;
        }

        .progress-container {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 4px;
            height: 100%;
            z-index: 1;
        }

        .base-line {
            position: absolute;
            width: 100%;
            height: 100%;
            background: #1a1a1a;
        }

        .progress-line {
            position: absolute;
            width: 100%;
            background: linear-gradient(to bottom, #4158D0, #C850C0, #FFCC70);
            top: 0;
            transition: height 0.3s ease;
        }

        .service-item {
            width: 45%;
            padding: 30px;
            background: #1a1a1a;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease;
            opacity: 0.5;
        }

        .service-item.active {
            opacity: 1;
            background: #242424;
            box-shadow: 0 4px 20px rgba(200, 80, 192, 0.2);
        }

        .left-item {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .service-item img {
            width: 80px;
            height: 80px;
            border-radius: 10px;
            object-fit: cover;
        }

        .service-item h3 {
            color: #fff;
            font-size: 24px;
            background: linear-gradient(45deg, #4158D0, #C850C0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .service-item p {
            color: #ccc;
            line-height: 1.8;
            font-size: 16px;
            margin-bottom: 15px;
        }

        .service-item ul {
            margin-top: 15px;
            padding-left: 20px;
            color: #ccc;
        }

        .service-item ul li {
            margin: 8px 0;
            position: relative;
        }

        .service-item ul li::before {
            content: "•";
            color: rgb(29, 86, 230);
            font-weight: bold;
            position: absolute;
            left: -15px;
        }

        @media (max-width: 768px) {
            .timeline-container {
                padding-left: 80px; /* Space for the fixed line */
            }

            .content-wrapper {
                flex-direction: column;
                align-items: flex-start;
                margin: 30px 0;
            }

            .service-item {
                width: 100%;
            }

            .progress-container {
                left: 40px;
                transform: none;
            }

            .left-item, .right-item {
                margin-left: 20px;
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
                    'image' => 'cloud.png',
                    'description' => 'Scale your business with secure and reliable cloud infrastructure solutions.',
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
                    'image' => 'web.png',
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
                    'image' => 'ai.png',
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
                    'image' => 'digital.png',
                    'description' => 'Enhance your brand’s online presence and reach the right audience with data-driven digital marketing strategies. From SEO to social media advertising, we help businesses grow and maximize their ROI.',
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

                // Left side
                echo '<div class="service-item left-item" data-index="' . $index . '">';
                echo '<img src="' . $service['image'] . '" alt="' . $service['title'] . '">';
                echo '<h3>' . $service['title'] . '</h3>';
                echo '</div>';

                // Right side
                echo '<div class="service-item right-item" data-index="' . $index . '">';
                echo '<p>' . $service['description'] . '</p>';
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

                function updatePositions() {
                    const sectionTop = servicesSection.offsetTop;
                    const sectionHeight = servicesSection.offsetHeight;
                    const scrollPosition = window.scrollY;
                    const windowHeight = window.innerHeight;

                    let scrollPercentage = 0;

                    // Check if the services section is in view
                    if (scrollPosition > sectionTop && scrollPosition < (sectionTop + sectionHeight - windowHeight)) {
                        scrollPercentage = ((scrollPosition - sectionTop) / (sectionHeight - windowHeight)) * 100;
                        scrollPercentage = Math.max(0, Math.min(100, scrollPercentage));
                    } else if (scrollPosition >= (sectionTop + sectionHeight - windowHeight)) {
                        scrollPercentage = 100; // Set to 100% when at the bottom of the section
                    } else {
                        scrollPercentage = 5; // Set to 0% if above the section
                    }

                    progressLine.style.height = `${scrollPercentage}%`;

                    contentWrappers.forEach((wrapper) => {
                        const rect = wrapper.getBoundingClientRect();
                        const leftItem = wrapper.querySelector('.left-item');
                        const rightItem = wrapper.querySelector('.right-item');

                        // Check if wrapper is in the middle of screen
                        if (rect.top <= windowHeight/2 && rect.bottom >= windowHeight/2) {
                            leftItem.classList.add('active');
                            rightItem.classList.add('active');
                        } else {
                            leftItem.classList.remove('active');
                            rightItem.classList.remove('active');
                        }
                    });
                }

                // Update on scroll
                window.addEventListener('scroll', updatePositions);

                // Initial update
                updatePositions();
            });
        </script>
    </section>
</body>
</html>
