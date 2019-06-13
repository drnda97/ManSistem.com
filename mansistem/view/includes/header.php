<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title; ?></title>
		<link rel="stylesheet" type="text/css" href="<?php echo WEBROOT; ?>/assets/css/main.css">
		<link rel="shortcut icon" href="favicon.ico">
	</head>
	<body>

			<header>
				<div class="logo-nav">
					<a href="index.php">
						<img src="<?php echo WEBROOT; ?>/assets/css/pictures/logo.png">
					</a>
				</div>
					<nav>	
						<ul>
							<li><a href="/pages">Home</a></li>
							<li><a href="/products/all">Proizvodi</a></li>
							<li><a href="/pages/howtobuy">Kako kupiti?</a></li>
							<li><a href="/pages/contact">Kontakt</a></li>
							<li><a href="/users/login">Login</a></li>
							<li><a href="/users/register">Registrate</a></li>
							<li><a href="/products/bracket">Korpa<img class="navCart" src="<?php echo WEBROOT; ?>/assets/css/pictures/cart.png"></a></li>
							<li><a href="#">Search</a>
								<!-- <div class="wrap">
   									<div class="search">
      									<input type="text" class="searchTerm" placeholder="Search...">
      									<button type="submit" class="searchButton">
        									<i class="fa fa-search"></i>
     									</button>
   									</div>
								</div> -->
							</li>
						</ul>
					</nav>
					
	
			</header>
			<!-- Slideshow container -->
			<div class="slideshow-container">

				<!-- Full-width images with number and caption text -->
				<div class="mySlides fade">
					<div class="numbertext">1 / 4</div>
					<img class="image_holder" src="<?php echo WEBROOT; ?>/assets/css/pictures/slider2.jpg">
					<div class="text">VRHUNSKI PROIZVODI</div>
				</div>

				<div class="mySlides fade">
					<div class="numbertext">2 / 4</div>
					<img class="image_holder" src="<?php echo WEBROOT; ?>/assets/css/pictures/slider1.jpg">
					<div class="text">Čaure i spojnice izuzetnog kvaliteta</div>
				</div>

				<div class="mySlides fade">
					<div class="numbertext">3 / 4</div>
					<img class="image_holder" src="<?php echo WEBROOT; ?>/assets/css/pictures/slider4.jpg">
					<div class="text">Creva raznih vrsta i dimenzija</div>
				</div>

				<div class="mySlides fade">
					<div class="numbertext">4 / 4</div>
					<img class="image_holder" src="<?php echo WEBROOT; ?>/assets/css/pictures/slider3.png">
					<div class="text">Vazdusne spojnice, čaure i creva</div>
				</div>

				<!-- Next and previous buttons -->
				<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				<a class="next" onclick="plusSlides(1)">&#10095;</a>
			
			

			<!-- The dots/circles -->
			<div class="slider-dots" style="text-align:center">
				<span class="dot" onclick="currentSlide(1)"></span> 
				<span class="dot" onclick="currentSlide(2)"></span> 
				<span class="dot" onclick="currentSlide(3)"></span> 
				<span class="dot" onclick="currentSlide(4)"></span> 
			</div>
		</div>

