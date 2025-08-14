<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Astro v5.9.2">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbars/">
    <script src="../assets/js/color-modes.js"></script>
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="theme-color" content="#712cf9">
    <link href="../assets/navbars.css" rel="stylesheet">
    <link href="carousel.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="blog.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../images/logo.jpg">

    <style>
        .navbar {
            border: none !important;
            box-shadow: none !important;
            background-image: url('../images/philippines.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .carousel-container {
            max-width: 1820px; 
            margin: 0 auto;   
            width: 100%;  
            border-radius: 16px;        
            overflow: hidden;            
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .navbar .nav-link {
            color: white !important;
            font-family: Arial, sans-serif;
            font-size: 24px;
        }

        .navbar .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 8px;

        }

        .active {
            background-color: rgba(255, 255, 255, 0.3);
            border-radius: 8px;
            color: black !important;

        }

        .logo {
            height: 50px;
            width: auto;
            border-radius: 50%;
        }

        .carousel-img {
            width: 90%;
            height: 400px;
            object-fit: cover;
            filter: brightness(70%);
        }

        .carousel-caption h1,
        .carousel-caption p {
            color: white;
            text-shadow: 1px 1px 4px black;
        }

        body {
            background-image: url('../images/backgroundimg1.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
            position: relative;

        }

        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: inherit;
            background-size: cover;
            background-position: center;
            filter: blur(10px);
            z-index: -1;
            pointer-events: none;
        }


        #myCarousel {
            height: 500px;
        }

        .carousel-inner,
        .carousel-item,
        .carousel-item img {
            height: 100%;
        }

        .carousel-item img {
            object-fit: cover;
        }

        .marquee-container {
            width: 100%;
            overflow: hidden;
            white-space: nowrap;
            box-sizing: border-box;
        }

        .marquee-track {
            display: flex;
            width: fit-content;
            animation: scroll-marquee 40s linear infinite;
        }

        .marquee-content {
            display: flex;
        }

        .marquee-content img {
            height: 120px;
            margin: 0 20px;
            border-radius: 10px;
            transition: transform 0.3s;
            border: 2px solid white
        }

        @keyframes scroll-marquee {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .marquee-content img {
            width: 300px;
            height: 200px;
            object-fit: cover;
            margin: 0 20px;
            border-radius: 10px;
            transition: transform 0.3s;
        }

        .marquee-content img:hover {
            transform: scale(1.1);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            opacity: 0.9;
        }

        .imgalbum {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .card-text {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 15px;
            font-size: 200;
            color: white;
            text-align: justify;
        }

        .tourist-highlight {
            width: 100%;
            align-items: center;
            text-align: center;
            color: white
        }

        .team-hero {
            min-height: 30vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 40px 20px;
            color: white;
        }

        .imgblog {
            width: 180px;
            height: 120px;
            object-fit: cover;
            border: 1px solid white;
            border-radius: 5px;
        }

        .imgblog:hover {
            height: 150px;
            width: 200px;
            transition: 1s ease;
            border: 2px solid white;
            border-radius: 10px;
            transform: scale(1.1);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            opacity: 0.9;
        }

        .funbanner {
            filter: brightness(100%);
            border-radius: 8px;
            border: 5px solid darkblue;
            width: 300px;
            height: 100px;
        }

        .container {
            text-align: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <!--navigation-->
    <nav class="navbar navbar-expand-md navbar-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="../view/landing_page.php">
                <img class="logo" src="../images/logo.jpg" alt="logo">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="?subpage=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?subpage=services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?subpage=contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?subpage=login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <br>

    <!-- CAROUSEL -->
    <div class="carousel-container">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4"></button>
            </div>

            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="../images/philcarouselmain.jpg" class="d-block w-100 carousel-img" alt="Slide 2" />
                    <div class="carousel-caption">
                        <h1>Welcome to the Phillipines!</h1>
                        <p>Explore the rich culture, destinations, and traditions of the Filipinos here in the Philippines!</p>
                        <a class="btn btn-primary btn-lg" href="https://www.google.com/search?q=welcome+to+the+philippines&sca_esv=571e9f62cdadf4fd&rlz=1C1CHBF_enPH1145PH1145&biw=1920&bih=893&sxsrf=AE3TifNpbsIgHIUsSuj2OyOYxyriWuy31A%3A1753171362023&ei=okV_aNmaAYjh2roPiJyviQk&oq=Welcome+to+&gs_lp=Egxnd3Mtd2l6LXNlcnAiC1dlbGNvbWUgdG8gKgIIADILEAAYgAQYkQIYigUyChAAGIAEGEMYigUyChAuGIAEGEMYigUyCxAAGIAEGJECGIoFMgoQABiABBhDGIoFMgoQABiABBhDGIoFMg0QLhiABBixAxhDGIoFMhAQLhiABBhDGMcBGIoFGK8BMgUQABiABDIIEC4YgAQYsQNI-jhQ_whYuixwAngBkAECmAGZAaABkCCqAQQ3LjMyuAEByAEA-AEBmAIOoAL6CqgCEcICChAAGLADGNYEGEfCAg0QABiABBiwAxhDGIoFwgIOEAAYsAMY5AIY1gTYAQHCAhMQLhiABBiwAxhDGMgDGIoF2AEBwgIKECMYgAQYJxiKBcICBhAAGBYYHsICBxAjGCcY6gLCAg0QIxjwBRgnGMkCGOoCwgIWEC4YgAQYQxi0AhjIAxiKBRjqAtgBAcICChAjGPAFGCcYyQLCAgQQIxgnwgIQEAAYgAQYsQMYQxiDARiKBcICFBAuGIAEGLEDGIMBGMcBGIoFGK8BwgILEC4YgAQYkQIYigXCAgsQABiABBiSAxiKBcICDRAAGIAEGEMYyQMYigXCAhYQLhiABBixAxjRAxhDGIMBGMcBGIoFwgIIEAAYgAQYsQPCAg0QABiABBixAxhDGIoFmAMF8QUPgO75QRCnyIgGAZAGE7oGBggBEAEYCZIHBDIuMTKgB4OTBLIHBDAuMTK4B_AKwgcGMC4xLjEzyAdL&sclient=gws-wiz-serp">Explore for more!</a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="../images/carousel5.jpg" class="d-block w-100 carousel-img" alt="Slide 1" />
                    <div class="carousel-caption text-start">
                        <h1>Savoring Filipino Cuisine!</h1>
                        <p>Dive into flavorful Filipino cuisine, from sizzling street food to fresh seafood feasts, and experience the islands through every bite.</p>
                        <a class="btn btn-primary btn-lg" href="https://www.google.com/search?q=filipino+cuisine&sca_esv=571e9f62cdadf4fd&rlz=1C1CHBF_enPH1145PH1145&biw=1920&bih=893&sxsrf=AE3TifOMOYUyoMP0NwJ_qUOA7QRXiSJIIg%3A1753173935299&ei=r09_aOqJEtOE2roPzfeEwQg&oq=filipino+&gs_lp=Egxnd3Mtd2l6LXNlcnAiCWZpbGlwaW5vICoCCAAyChAjGIAEGCcYigUyEBAjGPAFGIAEGCcYyQIYigUyERAAGIAEGJECGLEDGIMBGIoFMgsQABiABBiRAhiKBTILEAAYgAQYkQIYigUyCxAAGIAEGJECGIoFMgsQABiABBixAxiDATIKEC4YgAQYQxiKBTINEAAYgAQYsQMYQxiKBTINEAAYgAQYsQMYFBiHAkidMVCeEFirH3ABeAGQAQCYAZwBoAGlCKoBAzEuOLgBAcgBAPgBAZgCCqAC1gioAhTCAgcQIxgnGOoCwgINECMY8AUYJxjJAhjqAsICExAAGIAEGEMYtAIYigUY6gLYAQHCAgoQIxjwBRgnGMkCwgIREC4YgAQYsQMY0QMYgwEYxwHCAgoQABiABBhDGIoFwgILEC4YgAQYsQMY1ALCAggQABiABBixA8ICDhAAGIAEGLEDGIMBGIoFwgIQEAAYgAQYsQMYQxiDARiKBcICChAAGIAEGBQYhwLCAhAQABiABBixAxhDGMkDGIoFwgILEAAYgAQYkgMYigWYAwTxBToy0KUN5-fYugYGCAEQARgBkgcDMS45oAfNcrIHAzAuObgH0gjCBwUwLjEuOcgHKw&sclient=gws-wiz-serp">Explore for more!</a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="../images/carousel2.jpg" class="d-block w-100 carousel-img" alt="Slide 3" />
                    <div class="carousel-caption text-end">
                        <h1>Meet and make friends with Filipino people.</h1>
                        <p>Warm smiles, heartfelt hospitality, and a culture that treats guests like family—Filipinos make every visit feel like coming home!</p>
                        <a class="btn btn-primary btn-lg" href="https://www.google.com/search?q=filipino+people&sca_esv=571e9f62cdadf4fd&rlz=1C1CHBF_enPH1145PH1145&biw=1920&bih=893&sxsrf=AE3TifMFl2EIrwfAR3lhlGRdymY9Xgimow%3A1753174092868&ei=TFB_aKXVNP3I0-kPh4WxyAY&ved=0ahUKEwilq6O4itCOAxV95DQHHYdCDGkQ4dUDCBA&uact=5&oq=filipino+people&gs_lp=Egxnd3Mtd2l6LXNlcnAiD2ZpbGlwaW5vIHBlb3BsZTIQECMY8AUYgAQYJxjJAhiKBTILEAAYgAQYkQIYigUyBRAAGIAEMgUQABiABDIFEAAYgAQyBRAAGIAEMgUQABiABDIFEAAYgAQyBRAAGIAEMgUQABiABEjsJVC_B1idHnABeACQAQCYAZgBoAHeC6oBAzUuObgBA8gBAPgBAZgCDqAC0wvCAgoQABiwAxjWBBhHwgINEAAYgAQYsAMYQxiKBcICDhAAGLADGOQCGNYE2AEBwgITEC4YgAQYsAMYQxjIAxiKBdgBAcICChAAGIAEGBQYhwLCAgoQABiABBhDGIoFwgILEAAYgAQYsQMYgwHCAg0QABiABBhDGMkDGIoFwgILEAAYgAQYkgMYigXCAg0QLhiABBixAxgUGIcCwgIIEAAYgAQYsQPCAgcQABiABBgKmAMAiAYBkAYTugYGCAEQARgJkgcEMy4xMaAHkHiyBwQyLjExuAfOC8IHBjAuMi4xMsgHRQ&sclient=gws-wiz-serp">Explore for more!</a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="../images/carousel3.jpg" class="d-block w-100 carousel-img" alt="Slide 4" />
                    <div class="carousel-caption text-start">
                        <h1>Your Island Escape Awaits!</h1>
                        <p>Escape to a tropical paradise where every sunrise brings new adventures, from island hopping and diving to cultural festivals and warm, unforgettable encounters with the locals.</p>
                        <a class="btn btn-primary btn-lg" href="https://www.google.com/search?q=islands+in+the+philippines&sca_esv=571e9f62cdadf4fd&rlz=1C1CHBF_enPH1145PH1145&biw=1920&bih=893&sxsrf=AE3TifOG7Xr1N3y5Fr8Ta7ALjx4fmBanaw%3A1753174126908&ei=blB_aLCZN4Gt0-kPi7Kt0QI&oq=islands+&gs_lp=Egxnd3Mtd2l6LXNlcnAiCGlzbGFuZHMgKgIIADILEAAYgAQYkQIYigUyBRAAGIAEMgUQLhiABDIFEAAYgAQyBRAAGIAEMgUQABiABDIFEC4YgAQyBRAAGIAEMgUQABiABDIFEAAYgARIvZQBUJcIWLN_cAJ4AZABA5gBnwGgAd8SqgEEOS4xM7gBAcgBAPgBAZgCC6ACvwmoAhTCAgoQABiwAxjWBBhHwgINEAAYgAQYsAMYQxiKBcICDRAuGIAEGLADGEMYigXCAgoQIxiABBgnGIoFwgIHECMYJxjqAsICDRAjGPAFGCcYyQIY6gLCAhMQLhiABBhDGLQCGIoFGOoC2AEBwgITEAAYgAQYQxi0AhiKBRjqAtgBAcICEBAjGPAFGIAEGCcYyQIYigXCAgoQABiABBhDGIoFwgIKEC4YgAQYQxiKBcICCxAAGIAEGLEDGIMBwgIEECMYJ8ICCBAAGIAEGLEDwgILEC4YgAQYsQMYxwPCAhAQABiABBixAxhDGIMBGIoFwgIWEC4YgAQYFBiHAhjHARiYBRiZBRivAcICEBAuGIAEGLEDGEMYgwEYigXCAhAQLhiABBgUGIcCGMcBGK8BwgINEC4YgAQYsQMYQxiKBcICFhAuGIAEGLEDGNEDGEMYgwEYxwEYigWYAwfxBfSQevbVWu94iAYBkAYKugYGCAEQARgBkgcDMi45oAeM3QGyBwMwLjm4B7MJwgcFMC4yLjnIBzc&sclient=gws-wiz-serp">Explore for more!</a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="../images/carousel4.jpg" class="d-block w-100 carousel-img" alt="Slide 5" />
                    <div class="carousel-caption">
                        <h1>Now, visit Philippines!</h1>
                        <p>What are you waiting for? Discover a land of warm smiles, vibrant cultures, breathtaking islands, and unforgettable adventures waiting to turn your dream getaway into a stunning reality!</p>
                        <a class="btn btn-primary btn-lg" href="https://www.google.com/search?q=visit+philippines&sca_esv=571e9f62cdadf4fd&rlz=1C1CHBF_enPH1145PH1145&biw=1920&bih=893&sxsrf=AE3TifNmopRIuxIGalNyfOvfLI0LoIWTGw%3A1753174162149&ei=klB_aL3vCKHi2roPvdni8Q0&oq=visit+&gs_lp=Egxnd3Mtd2l6LXNlcnAiBnZpc2l0ICoCCAAyCxAAGIAEGJECGIoFMgsQABiABBiRAhiKBTIKEAAYgAQYQxiKBTIIEAAYgAQYsQMyChAAGIAEGEMYigUyBRAAGIAEMggQABiABBixAzILEAAYgAQYsQMYgwEyBRAAGIAEMgUQABiABEjyM1C2CVjqJXACeAGQAQOYAYIBoAHqF6oBBTEzLjE2uAEByAEA-AEBmAIJoALXBqgCEsICChAAGLADGNYEGEfCAg0QABiABBiwAxhDGIoFwgIOEAAYsAMY5AIY1gTYAQHCAhMQLhiABBiwAxhDGMgDGIoF2AEBwgIKECMYgAQYJxiKBcICBxAjGCcY6gLCAg0QIxjwBRgnGMkCGOoCwgITEAAYgAQYQxi0AhiKBRjqAtgBAcICFhAuGIAEGEMYtAIYyAMYigUY6gLYAQHCAgoQIxjwBRgnGMkCwgIKEC4YgAQYQxiKBcICDhAAGIAEGLEDGIMBGIoFwgILEC4YgAQYsQMYgwHCAgsQLhiABBiRAhiKBcICDhAuGIAEGJECGLEDGIoFwgIdEC4YgAQYkQIYsQMYigUYlwUY3AQY3gQY4ATYAQHCAg0QABiABBixAxhDGIoFwgIQEAAYgAQYsQMYQxjJAxiKBcICCxAAGIAEGJIDGIoFmAMG8QXWaK2oJt5ITIgGAZAGE7oGBggBEAEYCZIHAzIuN6AHkaACsgcDMC43uAfNBsIHBTAuMS44yAcp&sclient=gws-wiz-serp">Explore for more!</a>
                    </div>
                </div>


            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <br>

    <!--marquee-->
    <div class="marquee-container">
        <div class="marquee-track">
            <div class="marquee-content">
                <img src="../images/m1.jpg" alt="m1" />
                <img src="../images/m2.jpg" alt="m2" />
                <img src="../images/m3.jpg" alt="m3" />
                <img src="../images/m4.jpg" alt="m4" />
                <img src="../images/m5.jpg" alt="m5" />
                <img src="../images/m6.jpg" alt="m6" />
                <img src="../images/m7.jpg" alt="m7" />
                <img src="../images/m8.jpg" alt="m8" />
                <img src="../images/m9.jpg" alt="m9" />
                <img src="../images/m10.jpg" alt="m10" />
            </div>
            <div class="marquee-content">
                <img src="../images/m1.jpg" alt="m1" />
                <img src="../images/m2.jpg" alt="m2" />
                <img src="../images/m3.jpg" alt="m3" />
                <img src="../images/m4.jpg" alt="m4" />
                <img src="../images/m5.jpg" alt="m5" />
                <img src="../images/m6.jpg" alt="m6" />
                <img src="../images/m7.jpg" alt="m7" />
                <img src="../images/m8.jpg" alt="m8" />
                <img src="../images/m9.jpg" alt="m9" />
                <img src="../images/m10.jpg" alt="m10" />
            </div>
        </div>
    </div>
    <div class="tourist-highlight text-center py-4">
        <h1>Tourist Highlights!</h1>
    </div>


    <!-- Full-width album and sidebar -->
    <div class="container-fluid">
        <div class="row">
            <!-- Album Column (left) -->
            <div class="col-lg-9">
                <div class="album py-5 album-bg">
                    <div class="container">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                            <?php foreach ($album as $alb){ ?>
                                    <div class="col">
                                        <div class="card shadow-sm">
                                            <img class="imgalbum" src="<?=  $alb['alb_img'] ?>" alt="<?=  $alb['alb_title'] ?>">
                                            <div class="card-body">
                                                <h2><?= $alb['alb_title'] ?></h2>
                                                <h5><?= $alb['alb_subTitle'] ?></h5>
                                                <p class="card-text"><?= $alb['alb_description'] ?></p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-sm btn-outline-secondary"><a href="<?=  $alb['alb_view'] ?>">View</a></button>
                                                    </div>
                                                    <small class="text-body-secondary">11 mins</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!--things you can do-->
            <div class="col-lg-3">
                <div class="position-sticky" style="top: 2rem;">
                    <div class="p-4 mb-3 bg-body-tertiary rounded">
                        <h4 class="fst-italic">About Philippines</h4>
                        <p class="mb-0">The Philippines is a tropical paradise known for its breathtaking natural beauty, from white-sand beaches and emerald rice terraces to vibrant coral reefs and majestic mountains. Filipino people are renowned for their hospitality, resilience, and warmth, making visitors feel instantly at home.</p>
                    </div>

                    <div>
                        <h4 class="fst-italic">Here are some Tourists Choices!</h4>
                        <ul class="list-unstyled">
                            <li>
                                <?php
                                foreach ($feature as $ft){
						        ?>
                                    <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                                        <svg aria-hidden="true" class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice">
                                            <rect width="100%" height="100%" fill="#777"></rect>
                                        </svg>
                                        <img class="imgblog" src="<?= $ft['ft_img'] ?>" alt="<?= $ft['ft_title'] ?>">
                                        <div class="col-lg-8">
                                            <h3><?= $ft['ft_title'] ?></h3>
                                            <h6 class="mb-0"><?= $ft['ft_subTitle'] ?></h6>
                                            <p style="text-align:justify"><?= $ft['ft_description'] ?></p>
                                        </div>
                                    </a>
                                <?php
                                }
                                ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="featurette-divider">
    
<?php include '../nav/footer.php'?>

