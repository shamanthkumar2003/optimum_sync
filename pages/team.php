<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #121212;
            color: #e0e0e0;
            margin: 0;
            padding: 0;
        } */

        .page-title {
            text-align: center;
            padding: 2rem 0;
            margin: 0;
            font-size: 2.5rem;
            font-weight: 700;
            color: #4169e1;
            letter-spacing: 1px;
            text-transform: uppercase;
            position: relative;
            background: linear-gradient(to right, #7829ff, #13f1fc); /* Gradient from purple to blue */
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;/* Make the text color transparent so the gradient shows */
        }
        
        .page-title:after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: #4169e1;
            margin: 15px auto 0;
            border-radius: 2px;
        }

        /* Container for the grid layout */
        .team-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            padding: 1rem 2rem 3rem;
            max-width: 1200px;
            margin: 0 auto;
            justify-content: center;
        }

        /* Card container */
        .our-team {
            position: relative;
            background: #1e1e1e;
            border-radius: 16px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.4);
            overflow: hidden;
            transition: all 0.3s ease;
            min-height: 350px;
            width: 100%;
            max-width: 320px;
            display: flex;
            flex-direction: column;
            margin: 0 auto;
        }

        .our-team:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4);
        }

        /* Image inside each card */
        .team-img {
            position: relative;
            overflow: hidden;
            height: 240px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .team-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            transition: transform 0.5s ease;
        }

        .our-team:hover .team-img img {
            transform: scale(1.05);
        }

        /* Social links */
        .social {
            width: 100%;
            height: 100%;
            background: rgba(65, 105, 225, 0.8);
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: all 0.4s ease;
        }

        .our-team:hover .social {
            opacity: 1;
        }

        .social ul {
            padding: 0;
            margin: 0;
            list-style: none;
            display: flex;
            gap: 15px;
        }

        .social ul li {
            transform: translateY(50px);
            opacity: 0;
            transition: all 0.3s ease;
            transition-delay: calc(0.1s * var(--i));
        }

        .our-team:hover .social ul li {
            transform: translateY(0);
            opacity: 1;
        }

        .social ul li a {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            font-size: 18px;
            color: #e0e0e0;
            background: rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease;
        }

        .social ul li a:hover {
            background: #e0e0e0;
            color: #4169e1;
            transform: scale(1.1);
        }

        /* Team content */
        .team-content {
            padding: 1.5rem;
            background: #252525;
            color: #e0e0e0;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            border-top: 2px solid #4169e1;
            text-align: center;
        }

        .title {
            font-size: 2rem;
            font-weight: 600;
            margin: 0;
            color: #4169e1;
        }

        .post {
            font-size: 1.1rem;
            color: #a0a0a0;
            font-weight: 500;
        }

        /* Glowing effect on hover */
        .our-team::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            box-shadow: 0 0 25px #4169e1;
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: -1;
            border-radius: 16px;
        }

        .our-team:hover::after {
            opacity: 0.2;
        }

        /* Responsive design adjustments */
        @media (max-width: 768px) {
            .team-container {
                padding: 1rem;
                gap: 1.5rem;
            }
            
            .page-title {
                font-size: 2rem;
                padding: 1.5rem 0;
            }
        }

        @media (max-width: 480px) {
            .our-team {
                min-height: 320px;
                max-width: 100%;
            }
            
            .team-img {
                height: 200px;
            }
            
            .page-title {
                font-size: 1.75rem;
                padding: 1rem 0;
            }
        }
    </style>
</head>
<body>

<h1 class="page-title">Our Team</h1>

<div class="team-container">
    <div class="our-team">
        <div class="team-img">
        <img src="../assets/founder2.jpg" alt="Founder">
        <div class="social">
                <ul>
                    <li style="--i:1"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li style="--i:3"><a href="#"><i class="far fa-envelope"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="team-content">
            <h3 class="title">Nithin U J</h3>
            <span class="post">CTO</span>
        </div>
    </div>

    <div class="our-team">
        <div class="team-img">
            <img src="../assets/founder.jpg" alt="Founder">
            <div class="social">
                <ul>
                    <li style="--i:1"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li style="--i:3"><a href="#"><i class="far fa-envelope"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="team-content">
            <h3 class="title">Nithish Kumar J</h3>
            <span class="post">Managing Director</span>
        </div>
    </div>

    <div class="our-team">
        <div class="team-img">
        <img src="../assets/founder3.jpg" alt="Founder">
        <div class="social">
                <ul>
                    <li style="--i:1"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li style="--i:3"><a href="#"><i class="far fa-envelope"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="team-content">
            <h3 class="title">Rajat Ghanate</h3>
            <span class="post">Engineering Director</span>
        </div>
    </div>
</div>

</body>
</html>