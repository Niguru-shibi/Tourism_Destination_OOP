<!DOCTYPE html>
<html lang="en" class="h-100" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Astro v5.9.2">
    <title>Cover Page</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/cover/">
    <script src="assets/js/color-modes.js"></script>
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="theme-color" content="#712cf9">
    <link href="../cover.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="../assets/modals.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../images/logo.jpg">

    <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          user-select: none;
        }

        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }

        .b-example-divider {
          width: 100%;
          height: 3rem;
          background-color: #0000001a;
          border: solid rgba(0, 0, 0, .15);
          border-width: 1px 0;
          box-shadow: inset 0 .5em 1.5em #0000001a, inset 0 .125em .5em #00000026;
        }

        .b-example-vr {
          flex-shrink: 0;
          width: 1.5rem;
          height: 100vh;
        }

        .bi {
          vertical-align: -.125em;
          fill: currentColor;
        }

        .nav-scroller {
          position: relative;
          z-index: 2;
          height: 2.75rem;
          overflow-y: hidden;
        }

        .nav-scroller .nav {
          display: flex;
          flex-wrap: nowrap;
          padding-bottom: 1rem;
          margin-top: -1px;
          overflow-x: auto;
          text-align: center;
          white-space: nowrap;
          -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
          --bd-violet-bg: #712cf9;
          --bd-violet-rgb: 112.520718, 44.062154, 249.437846;
          --bs-btn-font-weight: 600;
          --bs-btn-color: var(--bs-white);
          --bs-btn-bg: var(--bd-violet-bg);
          --bs-btn-border-color: var(--bd-violet-bg);
          --bs-btn-hover-color: var(--bs-white);
          --bs-btn-hover-bg: #6528e0;
          --bs-btn-hover-border-color: #6528e0;
          --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
          --bs-btn-active-color: var(--bs-btn-hover-color);
          --bs-btn-active-bg: #5a23c8;
          --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
          z-index: 1500;
        }

        .bd-mode-toggle .bi {
          width: 1em;
          height: 1em;
        }

          .bd-mode-toggle .dropdown-menu .active .bi {
            display: block !important;
          }
          
        body {
        background-image: url('../images/philippines.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        font-family: 'Poppins', sans-serif;
        
        }
        body::before {
        content: "";
        position: fixed; 
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.4); 
        pointer-events: none; 
        z-index: 0;
      }

      .cover-container {
        position: relative;
        z-index: 1;
      }
      
      .logo-container {
        position: absolute;
        top: 0;
        left: 0; 
        display: flex;
        padding: 10px;
        gap: 10px; 
      }

      .logo{
        height: 75px; 
        width: auto;
        border-radius:50%;
      }
      .funbanner{
        filter:brightness(100%);
        border-radius:8px;
        border: 5px solid darkblue;
        width: 300px;
        height: 100px;

      }
      .px-3{
        margin-top:20rem
      }
    </style>
</head>
<body class="d-flex h-100 text-center text-bg-dark">
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"></path>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"></path>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"></path>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"></path>
      </symbol>
    </svg>

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="mb-auto">
        <div class="logo-container"> 
          <img class="logo" src="../images/logo.jpg" alt="logo">
        </div>
     
        <main class="px-3">
            <img class="funbanner" src="../images/funbanner1.jpg" alt="fun">
            <h1>It's more fun in the PHILIPPINES!</h1>
            <p class="lead">Discover the Philippines — where every island tells a story, every smile feels like home, and every adventure leads to unforgettable memories. Explore culture, nature, and paradise. Ready for your journey? Click the button below to start your adventure!</p>
            <p class="lead">
              <a href="home_page.php"><button type="button" class="btn btn-primary">Visit Website</button></a>
              <!-- Trigger button -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal"> Login </button>
            </p>
        </main>
       
      </header> 
    </div>

    <!-- Login Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display:none;">
      <div class="modal-dialog">
        <div class="modal-content">
          <?php
            if(isset($_GET['msg'])){
              echo ($_GET['msg']);
            }
          
          ?>
          <form action="../views/process_data.php" method="POST">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">LOGIN</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="p-4 p-md-5 border rounded-3 bg-light"
                  style="background-image: url('../images/philippines.jpg');
                          background-repeat: no-repeat;
                          background-position: center;
                          background-size: cover;">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="username" name="admin_username" placeholder="Username" />
                  <label for="username">Username</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control" id="password" name="admin_password" placeholder="Password" />
                  <label for="password">Password</label>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-warning btn-sm" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary btn-sm" name="login_btn">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!--empty footer-->
    <footer class="mt-auto text-white-50">

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/" class="astro-vvvwv3sm"></script>
</body>
</html>



    
          