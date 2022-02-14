<?php session_start(); ?>

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
		footer {
			font-size: 25px;
			text-decoration: none;
			display: flex;
			flex-direction: row;
			justify-content: center;
			padding-top: 10px;
		}
		.facts {
			display: none;
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
				<a class="nav-link text-dark" style="font-size: 35px" href="./#top">About</a>
				</li>
				<li class="nav-item">
				<a class="nav-link text-dark" style="font-size: 35px" href="./#services">Services</a>
				</li>
				<li class="nav-item">
				<a class="nav-link text-dark" style="font-size: 35px" href="./#testimonials">Testimonials</a>
				</li>
				<li class="nav-item">
				<a class="nav-link text-dark" style="font-size: 35px" href="./#contact">Contact</a>
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
					<h1>Thank you for your inquiry <?php echo $_SESSION['name'];?></h1>
					<br>
					<h4>Karen will be in touch soon!</h4>
				</div>
			</div>
			<div class="row funfacts">
				<div class="col-md-12" style="background-color: rgba(255,255,255,0.8); padding: 20px; text-align: center;">
					<a name="about"></a>
					<br>
					<h1>Fun facts</h1>
					<br>
					<?php 
						if ($_SESSION['type'] == 'cats'){
							$cats = array("<h4>House cats share 95.6% of their genetic makeup with tigers</h4>", "<h4>Cats are believed to be the only mammals who do not taste sweetness.</h4>", "<h4>Cats have 230 bones, while humans only have 206.</h4>");
							$random = rand(0, 2);
							echo $cats[$random];

						} else if ($_SESSION['type'] == 'dogs'){
							$dogs = array("<h4>A dog's nose print is unique, much like a persons fingerprint.</h4>", "<h4>Seventy percent of people sign their dogs name on their holiday cards.</h4>", "<h4>Human blood pressure goes down when petting a dog. And so does the dog's.</h4>");
							$random = rand(0, 2);
							echo $dogs[$random];

						} else if ($_SESSION['type'] == 'birds'){
							$birds = array("<h4>Not only are they capable of mimicking human speech but parrots can also add, subtract, and understand the meaning of zero.</h4>", "<h4> A group of parrots is called a pandemonium.</h4>", "<h4>The novel <i>Treasure Island</i> is the reason parrots are associated with pirates.</h4>");
							$random = rand(0, 2);
							echo $birds[$random];

						} else if ($_SESSION['type'] == 'fish'){
							$fish = array("<h4>Goldfish are actually quite vocal. They communicate their contentment and other emotions through subtle grunts, purrs, snorts, hoots, and hums.</h4>", "<h4>Goldfish have teeth in their throat, near the bases of their gills, called pharyngeal teeth, which help them crush their food.</h4>", "<h4>Goldfish do not have eyelids, so their eyes are always open, even when they sleep.</h4>");
							$random = rand(0, 2);
							echo $fish[$random];

						} else if ($_SESSION['type'] == 'animals'){
							$animals = array("<h4>Gerbils do not just use their hearing to communicate, they also have a highly tuned sense of smell.</h4>", "<h4>Hamsters are fast runners, able to clock in over 5 miles of running in a single night.</h4>", "<h4>European hamsters can exceed 12 inches when full grown.</h4>");
							$random = rand(0, 2);
							echo $animals[$random];
						}
					?>
				</div>
			</div>

		</div>
	</section>

	<!-- Footer -->

	<footer style="text-align: center;">
		<br><p>&copy 2022 Karen's Pet Sitting</p>
	</footer>

	<!-- jQuery Scipt -->
	
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->

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