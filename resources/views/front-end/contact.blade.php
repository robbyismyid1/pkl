<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Movie Review | Contact</title>
		@include('layouts.frontend.icon')
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="/assets/fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="/assets/style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>
		

		<div id="site-content">
			<header class="site-header">
				<div class="container">
					<a href="/" id="branding">
						<img src="/assets/images/logo.png" alt="" class="logo">
						<div class="logo-copy">
							<h1 class="site-title">Company Name</h1>
							<small class="site-description">Tagline goes here</small>
						</div>
					</a> <!-- #branding -->

					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="/">Home</a></li>
							<li class="menu-item"><a href="about">About</a></li>
							<li class="menu-item"><a href="review">Movie reviews</a></li>
							<li class="menu-item"><a href="joinus">Join us</a></li>
							<li class="menu-item current-menu-item"><a href="contact">Contact</a></li>
						</ul> <!-- .menu -->

						<form action="#" class="search-form">
							<input type="text" placeholder="Search...">
							<button><i class="fa fa-search"></i></button>
						</form>
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</header>
			<main class="main-content">
				<div class="container">
					<div class="page">
						<div class="breadcrumbs">
							<a href="/">Home</a>
							<span>Contact</span>
						</div>

						<div class="content">
							<div class="row">
								<div class="col-md-4">
									<h2>Contact</h2>
									<ul class="contact-detail">
										<li>
											<img src="/assets/images/icon-contact-map.png" alt="#">
											<address><span>Company name. INC</span> <br>550 Avenue Street, New york</address>
										</li>
										<li>
											<img src="/assets/images/icon-contact-phone.png" alt="">
											<a href="tel:1590912831">+1 590 912 831</a>
										</li>
										<li>
											<img src="/assets/images/icon-contact-message.png" alt="">
											<a href="mailto:contact@companyname.com">contact@companyname.com</a>
										</li>
									</ul>
									<div class="contact-form">
										<input type="text" class="name" placeholder="name...">
										<input type="text" class="email" placeholder="email...">
										<input type="text" class="website" placeholder="website...">
										<textarea class="message" placeholder="message..."></textarea>
										<input type="submit" value="Send Message ">

									</div>
								</div>
								<div class="col-md-7 col-md-offset-1">
									<div class="map"></div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- .container -->
			</main>
			@include('layouts.frontend.footer')
		</div>
		<!-- Default snippet for navigation -->
		


		<script src="/assets/js/jquery-1.11.1.min.js"></script>
		<script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
		<script src="/assets/js/plugins.js"></script>
		<script src="/assets/js/app.js"></script>
		
	</body>

</html>