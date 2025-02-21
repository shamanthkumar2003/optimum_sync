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

        .timeline-container {
    position: relative;
    max-width: 1200px; /* Adjusted for better responsiveness */
    z-index: -4; /* Changed from -4 to avoid stacking issues */
    margin: 0 auto;
    padding: 50px 20px; /* Added horizontal padding for better spacing */
    min-height: 100vh;
}
.heading{
z-index: 40;
}

        .content-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 60px 0;
            position: relative;
        }

        .progress-container {
            position: fixed;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 4px;
            height: 100vh;
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

        .rocket {
            position: fixed;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 50px;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2009/svg" viewBox="0 0 24 24" fill="%23C850C0"><path d="M13.13 22.19L11.5 18.36C13.07 17.78 14.54 17 15.9 16.09L13.13 22.19M5.64 12.5L1.81 10.87L7.91 8.1C7 9.46 6.22 10.93 5.64 12.5M21.61 2.39C21.61 2.39 16.66 .269 11 5.93C8.81 8.12 7.5 10.53 6.65 12.64C6.37 13.39 6.56 14.21 7.11 14.77L9.24 16.89C9.79 17.45 10.61 17.63 11.36 17.35C13.5 16.53 15.88 15.19 18.07 13C23.73 7.34 21.61 2.39 21.61 2.39M14.54 9.46C13.76 8.68 13.76 7.41 14.54 6.63S16.59 5.85 17.37 6.63C18.14 7.41 18.15 8.68 17.37 9.46C16.59 10.24 15.32 10.24 14.54 9.46M8.88 16.53L7.47 15.12L8.88 16.53M6.24 22L7.88 18.88L5.12 16.12L2 17.76L2.71 18.47L4.59 17.78L5.81 19L5.12 20.88L5.83 21.59L7.71 20.9L8.93 22.12L8.24 24L8.95 24.71L12.07 21.59L9.31 18.83L6.24 22Z"/></svg>') center/contain no-repeat;
            z-index: 100;
            transition: top 0.3s ease;
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
            color:rgb(29, 86, 230);
            font-weight: bold;
            position: absolute;
            left: -15px;
        }

        @media (max-width: 768px) {
            .timeline-container {
                padding-left: 80px; /* Space for the fixed rocket and line */
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

            .rocket {
                left: 40px;
                transform: none;
            }

            .left-item, .right-item {
                margin-left: 20px;
            }
        }
    </style>
</head>
<div>      <div class="timeline-container">
    <div class="heading">
    <h1 style="
        text-align: center;
        font-size: 36px;
        margin-bottom: 40px;
        background: linear-gradient(45deg, #4158D0, #C850C0);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        z-index : 50">
        Our Services
    </h1>
    </div>
        <div class="progress-container">
            <div class="base-line"></div>
            <div class="progress-line"></div>
        </div>
        <div class="rocket"></div>

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
            const rocket = document.querySelector('.rocket');
            const progressLine = document.querySelector('.progress-line');
            const contentWrappers = document.querySelectorAll('.content-wrapper');
            
            function updatePositions() {
                const scrollPosition = window.scrollY;
                const windowHeight = window.innerHeight;
                const documentHeight = document.documentElement.scrollHeight;
                
                // Calculate progress percentage
                const scrollPercentage = (scrollPosition / (documentHeight - windowHeight)) * 100;
                
                // Update progress line height based on scroll position
                progressLine.style.height = `${scrollPercentage}%`;
                
                contentWrappers.forEach((wrapper) => {
                    const rect = wrapper.getBoundingClientRect();
                    const leftItem = wrapper.querySelector('.left-item');
                    const rightItem = wrapper.querySelector('.right-item');
                    
                    if (rect.top <= windowHeight/2 && rect.bottom >= windowHeight/2) {
                        // Update rocket position to stay in middle of viewport
                        rocket.style.top = `${windowHeight/2}px`;
                        
                        // Activate items
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
</div>
</html>