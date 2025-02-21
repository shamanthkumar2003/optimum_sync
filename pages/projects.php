<?php
// Projects.php
?><section>
    <style>
        :root {
            --color: #3c3163;
            --transition-time: 0.5s;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: 'Open Sans', sans-serif;
            background: #020313;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .info {
            font-size: 2.2em;
            display: flex;
            padding: 1em 3em;
            height: 3em;
            color: #ccc;
        }

        .info img {
            height: 3em;
            margin-right: 0.5em;
        }

        .info h1 {
            font-size: 1em;
            font-weight: bold;
        }

        .cards-wrapper {
            display: grid;
            justify-content: center;
            align-items: center;
            grid-template-columns: 1fr 1fr 1fr;
            grid-gap: 8rem;
            padding: 4rem;
            margin: 0 auto;
            width: max-content;
        }

        .card {
            font-family: 'Heebo', sans-serif;
            --bg-filter-opacity: 0.5;
            background-image: linear-gradient(rgba(0, 0, 0, var(--bg-filter-opacity)), rgba(0, 0, 0, var(--bg-filter-opacity))), var(--bg-img);
            height: 15em;
            width: 12em;
            font-size: 1.5em;
            color: white;
            border-radius: 1em;
            padding: 1em;
            display: flex;
            align-items: flex-end;
            background-size: cover;
            background-position: center;
            box-shadow: 0 0 5em -1em rgb(15, 94, 179);
            transition: all var(--transition-time);
            position: relative;
            overflow: hidden;
            border: 10px solid #232222;
        }

        .card h1 {
            margin: 0;
            font-size: 1.5em;
            line-height: 1.2em;
        }

        .card p {
            font-size: 0.6em;
            margin-top: 0.5em;
            line-height: 2em;
        }

        .card .tags {
            display: flex;
        }

        .card .tags .tag {
            font-size: 0.75em;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 0.3rem;
            padding: 0 0.5em;
            margin-right: 0.5em;
            line-height: 1.5em;
            transition: all var(--transition-time);
        }

        .card:hover .tags .tag {
            background: var(--color);
            color: white;
        }

        .card .date {
            position: absolute;
            top: 0;
            right: 0;
            font-size: 0.75em;
            padding: 1em;
            line-height: 1em;
            opacity: .8;
        }

        .card:before, .card:after {
            content: '';
            transform: scale(0);
            transform-origin: top left;
            border-radius: 50%;
            position: absolute;
            left: -50%;
            top: -50%;
            z-index: -5;
            transition: all var(--transition-time);
            transition-timing-function: ease-in-out;
        }

        .card:before {
            background: #575454;
            width: 250%;
            height: 250%;
        }

        .card:after {
            background: white;
            width: 200%;
            height: 200%;
        }

        .card:hover {
            color: var(--color);
        }

        .card:hover:before, .card:hover:after {
            transform: scale(1);
        }

        .card-grid-space .num {
            font-size: 2.2em;
            margin-bottom: 1.2rem;
            margin-left: 1rem;
            color: #f8f3f3;
        }

        /* MEDIA QUERIES */
        @media screen and (max-width: 1285px) {
            .cards-wrapper {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media screen and (max-width: 900px) {
            .cards-wrapper {
                grid-template-columns: 1fr;
            }
            .info {
                justify-content: center;
            }
        }

        @media screen and (max-width: 500px) {
            .cards-wrapper {
                padding: 4rem 2rem;
            }
            .card {
                max-width: calc(100vw - 4rem);
            }
        }

        @media screen and (max-width: 450px) {
            .info {
                display: block;
                text-align: center;
            }
            .info h1 {
                margin: 0;
            }
        }
    </style>
</head>
<body>

<section class="info">
    <h1>Our Projects </h1>
</section>

<section class="cards-wrapper">
    <div class="card-grid-space">
        <div class="num">01</div>
        <a class="card" href="https://icstnie2025.com/" style="--bg-img: url(https://codetheweb.blog/assets/img/posts/html-syntax/cover.jpg)">
            <div>
                <h1>ICST NIE 2025</h1>
                <p>2nd International conclave on Sustainable Technologies for MSME sector
                </p>
                <div class="date">6 Oct 2017</div>
                <div class="tags"><div class="tag">Completed</div></div>
            </div>
        </a>
    </div>
    <div class="card-grid-space">
        <div class="num">02</div>
        <a class="card" href="https://codetheweb.blog/2017/10/09/basic-types-of-html-tags/" style="--bg-img: url(https://codetheweb.blog/assets/img/posts/basic-types-of-html-tags/cover.jpg)">
            <div>
                <h1>Sarayu Enclave</h1>
                <p>Discover Most Suitable Properties in Ballari
                </p>
                <div class="date">9 Oct 2017</div>
                <div class="tags"><div class="tag">Completed</div></div>
            </div>
        </a>
    </div>
    <div class="card-grid-space">
        <div class="num">03</div>
        <a class="card" href="https://codetheweb.blog/2017/10/14/links-images-about-file-paths/" style="--bg-img: url(https://codetheweb.blog/assets/img/posts/links-images-about-file-paths/cover.jpg)">
            <div>
                <h1>Invest Club </h1>
                <p>A new era of investing is here!!!</p>
                <!-- <div class="date">14 Oct 2017</div> -->
                <div class="tags"><div class="tag">Ongoing</div></div>
            </div>
        </a>
    </div>
    <div class="card-grid-space">
        <div class="num">04</div>
        <a class="card" href="https://codetheweb.blog/2017/10/14/links-images-about-file-paths/" style="--bg-img: url(https://codetheweb.blog/assets/img/posts/links-images-about-file-paths/cover.jpg)">
            <div>
                <h1>The Rooff </h1>
                <p>Building Dreams, Designing Elegance</p>
                <!-- <div class="date">14 Oct 2017</div> -->
                <div class="tags"><div class="tag">Ongoing</div></div>
            </div>
        </a>
    </div>
    <div class="card-grid-space">
        <div class="num">05</div>
        <a class="card" href="https://codetheweb.blog/2017/10/14/links-images-about-file-paths/" style="--bg-img: url(https://codetheweb.blog/assets/img/posts/links-images-about-file-paths/cover.jpg)">
            <div>
                <h1>Sri Samhitha Enterprises </h1>
                <p>A new era of investing is here!!!</p>
                <!-- <div class="date">14 Oct 2017</div> -->
                <div class="tags"><div class="tag">Ongoing</div></div>
            </div>
        </a>
    </div>
</section>
</section>
