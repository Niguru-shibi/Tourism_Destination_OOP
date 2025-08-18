<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Astro v5.9.2">
	<title>Login Page</title>
	<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
	<script src="../assets_5/js/color-modes.js"></script>
	<link href="../assets_5/dist/css/bootstrap.min.css" rel="stylesheet">
	<meta name="theme-color" content="#712cf9">
	<link href="../assets/dist/css/sign-in.css" rel="stylesheet">
	<link rel="icon" type="image/x-icon" href="../images/logo.jpg">
	
	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			user-select: none
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

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem
			}
		}

		.b-example-divider {
			width: 100%;
			height: 3rem;
			background-color: #0000001a;
			border: solid rgba(0, 0, 0, .15);
			border-width: 1px 0;
			box-shadow: inset 0 .5em 1.5em #0000001a, inset 0 .125em .5em #00000026
		}

		.b-example-vr {
			flex-shrink: 0;
			width: 1.5rem;
			height: 100vh
		}

		.bi {
			vertical-align: -.125em;
			fill: currentColor
		}

		.nav-scroller {
			position: relative;
			z-index: 2;
			height: 2.75rem;
			overflow-y: hidden
		}

		.nav-scroller .nav {
			display: flex;
			flex-wrap: nowrap;
			padding-bottom: 1rem;
			margin-top: -1px;
			overflow-x: auto;
			text-align: center;
			white-space: nowrap;
			-webkit-overflow-scrolling: touch
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
			--bs-btn-active-border-color: #5a23c8
		}

		.bd-mode-toggle {
			z-index: 1500
		}

		.bd-mode-toggle .bi {
			width: 1em;
			height: 1em
		}

		.bd-mode-toggle .dropdown-menu .active .bi {
			display: block !important
		}
		
	</style>
</head>

<body class="d-flex align-items-center justify-content-center" style="min-height: 100vh;">
	<main class="form-signin" style="max-width: 400px; width: 100%;">
		<div class="container">
			<form action="../page/authenticate.php?function=login" method="post">
				<img class="mb-4" src="../images/logo.jpg" alt="" width="100px" height="100px" style="border-radius:50px;">
				<h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>

				<div class="form-floating mb-3">
					<input type="text" class="form-control" id="floatingInput" name="username" placeholder="name@example.com">
					<label for="floatingInput">Username</label>
				</div>

				<div class="form-floating mb-3">
					<input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
					<label for="floatingPassword">Password</label>
				</div>

				<div class="form-check text-start my-3">
					<input class="form-check-input" type="checkbox" value="remember-me" id="checkDefault">
					<label class="form-check-label" for="checkDefault">Remember me</label>
				</div>

				<button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>

				<p class="mt-5 mb-3 text-body-secondary text-center">&copy; 2017–2025</p>
			</form>
		</div>
	</main>
	<script src="../assets_5/dist/js/bootstrap.bundle.min.js" class="astro-vvvwv3sm"></script>
</body>

	
</html>                                                                             