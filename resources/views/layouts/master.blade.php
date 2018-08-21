	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
		<link rel="manifest" href="img/favicon/site.webmanifest">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="theme-color" content="#ffffff">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Tu Kondominio</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
			<link rel="stylesheet" href="css/custom.css">
			<script src="js/jquery-3.3.1.min.js"></script>
			<script src="js/smooth-scroll.js"></script>	
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
			
	</head>
	<body>
		<header id="header" id="home">
			<div class="container">
			   	<div class="row align-items-center justify-content-between d-flex">
			      	<div id="logo">
				    	<a href="{{ route('inicio')}}"><img src="img/logo.png" height="50px" alt="" title="" /></a>
				    </div>
				    <nav id="nav-menu-container">
				    	<ul class="nav-menu">
				          	<li class="menu-active"><a href="{{ route('inicio')}}">Inicio</a></li>
				          	<li><a href="{{ route('nosotros')}}">Quienes Somos</a></li>
				          	<li><a href="{{ route('servicios')}}">Servicios</a></li>
				          	<li><a href="{{ route('autoevalue')}}">Autoevalúe</a></li>
				          	<li><a href="{{ route('contacto')}}">Contacto</a></li>
				        </ul>
				    </nav><!-- #nav-menu-container -->		    		
			    </div>
			</div>
		</header><!-- #header -->

		@yield('contenido')			

			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-3  col-md-12">
							<div class="single-footer-widget">
								<h6>Menú</h6>
								<ul class="footer-nav">
									<li><a href="{{ route('inicio')}}">Inicio</a></li>
									<li><a href="{{ route('nosotros')}}">Quiénes Somos</a></li>
									<li><a href="{{ route('servicios')}}">Servicios</a></li>
									<li><a href="{{ route('autoevalue')}}">Autoevalúe</a></li>
									<li><a href="{{ route('contacto')}}">Contacto</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3  col-md-12">
							<div class="single-footer-widget newsletter">
								<h6>Contáctanos</h6>
								<ul>
						           	<li><i class="fas fa-at mt-10"></i><span> contacto@tukondominio.cl</span></li>
						           	<li><h5 class="text-white mt-2">Erwin Krüger</h5></li>
						           	<li><i class="fas fa-at mt-10"></i><span> erwin.kruger@tukondominio.cl</span></li>
						          	<li><i class="fas fa-phone icon-contact"></i> <span> +56 9 8361 1006 </span></li>
						          	<li><h4 class="text-white mt-2">Carlos Vargas</h4></li>
						           	<li><i class="fas fa-at mt-10"></i><span> carlos.vargas@tukondominio.cl</span></li>
						          	<li><i class="fas fa-phone icon-contact"></i> <span> +56 9 9433 8330 </span></li>
				            	</ul>	
							</div>
						</div>	
					</div>

					<div class="row footer-bottom d-flex justify-content-between">
						<p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="far fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->		

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>			
			<script src="js/parallax.min.js"></script>		
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>
	</body>
</html>



