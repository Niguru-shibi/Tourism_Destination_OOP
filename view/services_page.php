<?php /*
include 'connect_db.php';
//album query
$services_sql = "SELECT * FROM services_tb";
$services_query = mysqli_query($conn, $services_sql);
$services = mysqli_fetch_all($services_query);
//print_r($services); */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Services</title>
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Astro v5.9.2">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbars/">
    <script src="../assets/js/color-modes.js"></script>
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="theme-color" content="#712cf9">
    <link href="../assets/navbars.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="pricing.css" rel="stylesheet">
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

    .navbar .nav-link {
        color: white !important;
        font-family: Arial, sans-serif;
        font-size: 24px;
    }

    .navbar .nav-link:hover {
        background-color: rgba(255, 255, 255, 0.2);
        border-radius: 8px;
       
    }
    .active{
        background-color:  rgba(255, 255, 255, 0.3);
        border-radius: 8px;
        color:black !important;

    }
    .logo{
        height: 50px; 
        width: auto;
        border-radius:50%;
    }
    .team-hero {
        min-height: 30vh;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 40px 20px;
        color:white;
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
     .funbanner{
        filter:brightness(100%);
        border-radius:8px;
        border: 5px solid darkblue;
        width:300px;
        height:100px;
    }
    .container{
        text-align: center;
        align-items: center;
    }
    </style>
</head>
<body>
    <!--navigation-->
    <nav class="navbar navbar-expand-md navbar-dark">
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
                        <a class="nav-link" href="?subpage=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="?subpage=services">Services</a>
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
    <!--services-->
    <div class="container py-3">
        <header>
            <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
                <a href="cover_page.php" class="d-flex align-items-center link-body-emphasis text-decoration-none">
                    <img class="logo "src="../images/logo.jpg" alt="logo">
                    <span class="fs-4">Services</span>
                </a>
            </div>
            <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
            <img class="funbanner" src="../images/funbanner1.jpg" alt="fun" >
            <p class="fs-5 text-body-white" >At Tourism Philippines Guide, we provide hassle-free travel services to help you explore the beauty and culture of the Philippines. From custom tour packages and hotel bookings to flights, transport, and local experiences, we take care of every detail. We also offer visa assistance, travel insurance, and 24/7 support—so you can relax and enjoy your journey.</p>
            </div>
        </header>
        <main>
            <div class="container-fluid px-5 py-5">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                    <?php foreach ($services as $serv) { ?>
                        <div class="col">
                            <div class="card h-100 shadow-sm basic-card" style="background-color:  #4169E1"> <!-- light blue background -->
                                <div class="card-header py-3 basic-header">
                                    <h4 class="my-0 fw-normal"><?= $serv['serv_serve'] ?></h4>
                                </div>
                                <div class="card-body">
                                    <h1 class="card-title pricing-card-title"><?= $serv['serv_price'] ?></h1>
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <?= $serv['serv_detail'] ?>
                                    </ul>
                                    <button type="button" class="w-100 btn btn-lg btn-outline-secondary" style="background-color:  #5BC0EB; color: white;">
                                        Contact us
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </main>
    </div>
    <hr class="featurette-divider">
 <?php include '../nav/footer.php'?>
