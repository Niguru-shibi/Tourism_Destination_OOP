<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact</title>
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Astro v5.9.2">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbars/">
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
    .container{
        text-align: center;
        align-items: center;
    }
     .funbanner{
        filter:brightness(100%);
        border-radius:8px;
        border: 5px solid darkblue;
        width:300px;
        height:100px;
    }
    .contact-section {
        color: white;
    }
    input::placeholder {
        color: black !important; /* light gray placeholder text */
        opacity: 1;  /* make sure it's fully visible */
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
                        <a class="nav-link" href="?subpage=services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="?subpage=contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?subpage=login">Login</a>
                    </li>
                </ul>
        </div>
    </div>
    </nav>
<!--contact-->
        <div class="contact-section">
             <div class="container col-xl-10 col-xxl-8 px-4 py-5">
				<div class="row align-items-center g-lg-5 py-5">
					<div class="col-lg-7 text-center text-lg-start">
						<h1 class="display-4 fw-bold lh-1 mb-3"><b>Contact Us!!!</b></h1>
						<p class="col-lg-10 fs-4">Send us an enquiry, or rate us! By sending with us your feedback we can improve our services talored with your needs.</p>
					</div>
					<div class="col-md-10 mx-auto col-lg-5">
                        <?php
                          if(isset($_GET['msg'])){
                          echo ($_GET['msg']);
                         }
                        ?>
						<form action="process_data.php" class="p-4 p-md-5 border rounded-3  text-white" method="post">
                            <div class="form-floating mb-3">
								<input type="text" class="form-control" name="client_name" placeholder="Name (optional):">
							</div>
							<div class="form-floating mb-3">
								<input type="email" class="form-control" name="client_email" placeholder="Email">
							</div>
							<div class="form-floating mb-3">
								<input type="number" class="form-control" name="client_contact" placeholder="Contact Number">
							</div>
                            <div class="form-floating mb-3">
								<input type="text" class="form-control" name="client_message" placeholder="Message/Feedback"></input>
							</div>
							<button class="w-100 btn btn-lg btn-primary" type="submit" name="send_message_btn">Send</button>
							<hr class="my-4">
							<small style="color:white">By clicking Send, you agree to the terms of use.</small>
						</form>
					</div>
				</div>
	        </div>
        </div>
    <hr class="featurette-divider">

 <?php include '../nav/footer.php'?>

    
