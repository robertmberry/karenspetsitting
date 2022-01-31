<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Karen's Pet Sitting</title>
<meta name="Description" content="karen berry"/>
<meta name="Keywords" content="karen berry, karen berry petsitting, petsitter, suffolk county"/>
<meta name="author" content="karen berry"/>
<link rel="shortcut icon" href="assets/img/logo.ico" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<!-- CSS Link -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

<!-- Font Awesome tag -->
<script src="https://kit.fontawesome.com/8087f92744.js" crossorigin="anonymous"></script>

<!-- Bootstrap required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<style>
		#pitch {
			background-image: url("assets/img/running.jpeg");
			background-size: cover;
			background-position: center;
			height: calc(60vh);
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.footer {
			font-size: 50px;
			text-decoration: none;
		}
	</style>

<body>

	<!-- Header -->

	<a name="about">
	<nav class="navbar navbar-expand-lg navbar-light bg-white">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php"><img src="assets/img/logo.gif" width="25%"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			
			<div class="collapse navbar-collapse justify-content-end" style="padding-right: 55px;" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
				<a class="nav-link text-dark" style="font-size: 35px" href="index.php/#top">About</a>
				</li>
				<li class="nav-item">
				<a class="nav-link text-dark" style="font-size: 35px" href="index.php/#services">Services</a>
				</li>
				<li class="nav-item">
				<a class="nav-link text-dark" style="font-size: 35px" href="index.php/#testimonials">Testimonials</a>
				</li>
				<li class="nav-item">
				<a class="nav-link text-dark" style="font-size: 35px" href="index.php/#contact">Contact</a>
				</li>
			</ul>
			</div>
		</div>
	</nav>

	<!-- Thank You -->

	<section id="pitch" class="text-dark">
		<div class="container p-5">
			<div class="row">
				<div class="col-md-12" style="background-color: rgba(255,255,255,0.8); padding: 20px; text-align: center;">
					<a name="about"></a>
					<br>
					<h1>Thank you for your inquiry $_POST['name'];)</h1>
					<br>
					<p>Karen will be in touch soon!</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer -->

	<footer style="text-align: center;">
		<br><p>&copy 2022 Karen's Pet Sitting</p>
	</footer>

	<!-- jQuery Scipt -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<!-- Bootstrap Scipt -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<!-- Redirect -->

	<script>
         setTimeout(function(){
            window.location.href = 'index.php';
         }, 5000);
    </script>

</body>
</html>