@extends('layouts.master')

@section('contenido')
<!-- start banner Area -->
	<section id="section10" class="demo banner-area">
		<div class="container">
			<div class="row fullscreen d-flex align-items-center justify-content-center">
				<div class="banner-content col-lg-7">
					<!-- BORRAR -->
					<!-- <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		 					viewBox="0 0 350 153" style="enable-background:new 0 0 350 153;" xml:space="preserve">
							<style type="text/css">
								.st0{fill:#F47820;}
								.st1{fill:#F7931E;}
								.st2{fill:#0697D4;}
								.st3{fill:#28BFD4;}
								.st4{fill:#1FBED4;}
								.st5{fill:#231F20;}
							</style>
							<g>
							<rect x="42.7" y="60.8" class="st0" width="13.4" height="51.9"/>
							<polygon class="st0" points="128.6,60.8 115.2,60.8 87.7,99.4 101.1,99.4 	"/>
							<polygon class="st1" points="115,60.8 128.4,60.8 155.9,99.4 142.5,99.4 	"/>
							<polygon class="st2" points="83.6,74 70.1,74 42.7,112.7 56.1,112.7 	"/>
							<polygon class="st3" points="70,74 83.4,74 110.8,112.7 97.4,112.7 	"/>
							<rect x="1.9" y="0.7" class="st0" width="13.4" height="151.5"/>
							<polygon class="st1" points="1.9,0.7 15.3,0.7 56.1,60.8 42.7,60.8 	"/>
							<rect x="20.7" y="73" class="st1" width="13.7" height="13.7"/>
							<rect x="20.7" y="99" class="st1" width="13.7" height="13.7"/>
							<rect x="70" y="99" class="st1" width="13.7" height="13.7"/>
							<rect x="160.8" y="99" class="st1" width="13.7" height="13.7"/>
							<rect x="115" y="85.8" class="st4" width="13.7" height="13.7"/>
							<polygon class="st2" points="174.4,74 161,74 133.5,112.7 146.9,112.7 	"/>
							<polygon class="st3" points="160.8,74 174.2,74 201.7,112.7 188.3,112.7 	"/>
							<g>
							<g>
								<path class="st5" d="M27.1,122.2h23.3v3.2h-9.8v26.8h-3.8v-26.8h-9.8V122.2z"/>
								<path class="st5" d="M67.3,147.7c-1.6,3.3-4.1,5-7.6,5c-2.6,0-4.7-0.7-6.2-2.1c-1.6-1.4-2.4-3.6-2.4-6.6v-14.5h3.8v14.2
									c0,3.9,1.8,5.8,5.3,5.8c2.1,0,3.7-0.8,5-2.4c1.3-1.6,2-3.6,2-6.1v-11.5h3.8v22.9h-3.8V147.7z"/>
								<path class="st5" d="M85.5,121.2V134l12.2-12.7h7.7l-13.6,13.9l14.6,17h-7.3l-11-13.1l-2.5,2.6v10.5h-5.7v-31H85.5z"/>
								<path class="st5" d="M119.7,128.4c1.6,0,3,0.2,4.4,0.7c1.4,0.5,2.5,1.3,3.5,2.3c2.2,2.2,3.3,5.3,3.3,9.3c0,3.9-1.1,6.9-3.3,9.2
									c-2,2-4.6,3.1-7.9,3.1c-3.3,0-6-1-8-3.1c-2.2-2.2-3.3-5.2-3.3-9.2c0-4,1.1-7.1,3.3-9.3C113.7,129.4,116.3,128.4,119.7,128.4z
									 M125.3,140.6c0-2.4-0.5-4.3-1.4-5.5c-1-1.2-2.3-1.8-4-1.8c-1.7,0-3.1,0.6-4.2,1.8c-1.1,1.2-1.6,3.1-1.6,5.5
									c0,2.5,0.5,4.3,1.5,5.5c1,1.2,2.3,1.8,4,1.8c1.7,0,3.1-0.6,4.1-1.8C124.7,144.9,125.3,143,125.3,140.6z"/>
								<path class="st5" d="M142.6,133c1.5-3.1,4-4.6,7.3-4.6c2.9,0,5,0.9,6.5,2.8c1.4,1.9,2.2,4.4,2.2,7.4v13.6H153v-13.6
									c0-1.7-0.4-3-1.2-3.9c-0.8-0.9-2-1.3-3.5-1.3c-1.5,0-2.8,0.7-3.8,2c-1.1,1.3-1.6,3.3-1.7,6v10.7h-5.6V129h4.9L142.6,133z"/>
								<path class="st5" d="M181.5,148.6c-1.4,2.8-3.6,4.2-6.6,4.2c-3,0-5.4-1.1-7.4-3.4c-2.1-2.4-3.1-5.3-3.1-9c0-3.6,1-6.6,3-8.8
									c1.9-2.2,4.4-3.3,7.3-3.3c2.9,0,5.1,1.2,6.5,3.5v-12.4h5.7v32.7h-4.6L181.5,148.6z M175.6,133.4c-1.6,0-2.9,0.6-4,1.9
									c-1.1,1.3-1.6,3-1.6,5.2c0,2.2,0.5,3.9,1.6,5.2c1.1,1.3,2.4,2,4.1,2c1.4,0,2.6-0.5,3.7-1.6c1.1-1.1,1.7-2.5,1.7-4.2v-3
									c-0.1-1.6-0.6-3-1.7-4.1C178.5,133.9,177.2,133.4,175.6,133.4z"/>
								<path class="st5" d="M204.3,128.4c1.6,0,3,0.2,4.4,0.7c1.4,0.5,2.5,1.3,3.5,2.3c2.2,2.2,3.3,5.3,3.3,9.3c0,3.9-1.1,6.9-3.3,9.2
									c-2,2-4.6,3.1-7.9,3.1c-3.3,0-6-1-8-3.1c-2.2-2.2-3.3-5.2-3.3-9.2c0-4,1.1-7.1,3.3-9.3C198.3,129.4,201,128.4,204.3,128.4z
									 M209.9,140.6c0-2.4-0.5-4.3-1.4-5.5c-1-1.2-2.3-1.8-4-1.8c-1.7,0-3.1,0.6-4.2,1.8c-1.1,1.2-1.6,3.1-1.6,5.5
									c0,2.5,0.5,4.3,1.5,5.5c1,1.2,2.3,1.8,4,1.8c1.7,0,3.1-0.6,4.2-1.8C209.3,144.9,209.9,143,209.9,140.6z"/>
								<path class="st5" d="M242.3,133.4c1.5-3.3,4.1-5,7.9-5c2.8,0,4.9,0.9,6.4,2.8c1.5,1.8,2.2,4.3,2.2,7.4v13.6h-5.7v-13.6
									c0-1.7-0.4-3-1.2-3.9c-0.8-0.9-2-1.3-3.5-1.3c-1.5,0-2.7,0.6-3.7,2c-1,1.3-1.5,3.3-1.5,5.9v10.9h-5.6v-13.6c0-1.7-0.4-3-1.2-3.9
									c-0.8-0.9-2-1.3-3.5-1.3c-1.5,0-2.8,0.7-3.8,2c-1.1,1.3-1.6,3.3-1.7,6v10.7h-5.6V129h4.9l0.6,4c1.5-3.1,4-4.6,7.4-4.6
									c1.9,0,3.6,0.4,4.8,1.3C240.7,130.6,241.7,131.8,242.3,133.4z"/>
								<path class="st5" d="M266.3,121.5c0-1,0.3-1.8,0.9-2.4c0.6-0.6,1.5-0.9,2.6-0.9c1.1,0,1.9,0.3,2.6,0.9c0.6,0.6,0.9,1.4,0.9,2.4
									c0,1-0.3,1.8-0.9,2.4c-0.6,0.6-1.5,0.9-2.6,0.9c-1.1,0-2-0.3-2.6-0.9C266.6,123.3,266.3,122.5,266.3,121.5z M267,128.9h5.6v23.2
									H267V128.9z"/>
								<path class="st5" d="M287.2,133c1.5-3.1,4-4.6,7.3-4.6c2.9,0,5,0.9,6.5,2.8c1.4,1.9,2.2,4.4,2.2,7.4v13.6h-5.6v-13.6
									c0-1.7-0.4-3-1.2-3.9c-0.8-0.9-2-1.3-3.5-1.3c-1.5,0-2.8,0.7-3.8,2c-1.1,1.3-1.6,3.3-1.7,6v10.7h-5.6V129h4.9L287.2,133z"/>
								<path class="st5" d="M310.8,121.5c0-1,0.3-1.8,0.9-2.4c0.6-0.6,1.5-0.9,2.6-0.9c1.1,0,1.9,0.3,2.6,0.9c0.6,0.6,0.9,1.4,0.9,2.4
									c0,1-0.3,1.8-0.9,2.4c-0.6,0.6-1.5,0.9-2.6,0.9c-1.1,0-2-0.3-2.6-0.9C311.1,123.3,310.8,122.5,310.8,121.5z M311.4,128.9h5.6
									v23.2h-5.6V128.9z"/>
								<path class="st5" d="M335.2,128.4c1.6,0,3,0.2,4.4,0.7c1.4,0.5,2.5,1.3,3.5,2.3c2.2,2.2,3.3,5.3,3.3,9.3c0,3.9-1.1,6.9-3.3,9.2
									c-2,2-4.6,3.1-7.9,3.1c-3.3,0-6-1-8-3.1c-2.2-2.2-3.3-5.2-3.3-9.2c0-4,1.1-7.1,3.3-9.3C329.2,129.4,331.9,128.4,335.2,128.4z
									 M340.8,140.6c0-2.4-0.5-4.3-1.4-5.5c-1-1.2-2.3-1.8-4-1.8c-1.7,0-3.1,0.6-4.2,1.8c-1.1,1.2-1.6,3.1-1.6,5.5
									c0,2.5,0.5,4.3,1.5,5.5c1,1.2,2.3,1.8,4,1.8c1.7,0,3.1-0.6,4.1-1.8C340.3,144.9,340.8,143,340.8,140.6z"/>
								</g>
							</g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
					</svg> -->
						<!-- BORRAR -->
			  		<h2> ADMINISTRADORES PROFESIONALES DE EDIFICIOS Y CONDOMINIOS </h2>	
			  		<hr class="first-hr"/>
			  		<hr class="second-hr" />
			  		<!-- <p class="pt-20 pb-20"> -->
						<h3> Damos valor a tu propiedad </h3>
					<!-- </p> 	  			 -->
			  	</div>
			  	<a data-scroll href="#vision"><span></span></a>
	  		</div>
		</div>
	</section>
<!-- End banner Area -->

<!-- Start home-vision Area -->
			<section class="home-video-area" id="vision">
				<div class="container-fluid">
					<div class="row justify-content-end align-items-center text-justify">
						<div class="col-lg-5 no-padding about-left d-lg-none">
							<img class="img-fluid" src="img/city-image.jpg" alt="">
						</div>
						<div class="col-lg-5  video-right">
							<h1>Visión</h1>
							<p>
								Ser reconocidos por los Copropietarios y la Comunidad en general por la Responsabilidad, Transparencia y Eficiencia en la Administración del Condominio, todo ello en un ambiente de total profesionalismo y uso de la tecnología disponible.
							</p>
						</div>
						<section class="video-area col-lg-5 d-none d-lg-block">
							
						</section>											
					</div>
				</div>	
			</section>
<!-- End home-vision Area -->
<!-- Start home-mission Area -->
			<section class="home-mission-area" id="mision">
				<div class="container-fluid">
					<div class="row justify-content-start align-items-center text-justify">
						<div class="col-lg-5 no-padding about-left d-lg-none">
							<img class="img-fluid" src="img/condominium-image.jpg" style="object-fit: cover;" alt="">
						</div>
						<section class="mission-area col-lg-5 d-none d-lg-block">
							
						</section>	
						<div class="col-lg-5 mission-right">
							<h1>Misión</h1>
							<p>
								Profesionalizar la actividad atendiendo en forma integral y responsable las necesidades de los Condominios, cuidando y dando valor a sus bienes, cobrando eficientemente los gastos comunes a los Copropietarios y asegurando el respeto irrestricto a las normas contenidas en la Ley de Copropiedad Inmobiliaria, del Reglamento Interno y demás leyes y normas que sean aplicables.
							</p>
						</div>										
					</div>
				</div>	
			</section>
<!-- End home-mission Area -->
<!-- Start home-values Area -->
			<section class="home-values-area" id="values">
				<div class="container-fluid">
					<div class="row justify-content-end align-items-center text-justify">
						<div class="col-lg-5 no-padding about-left d-lg-none">
							<img class="img-fluid" src="img/jardines.jpg" alt="">
						</div>
						<div class="col-lg-5 values-right">
							<h1>Valores</h1>
							<ul class="unordered-list">
								<li> Transparencia en el manejo de los recursos de la Comunidad. </li>
								<li> Responsabilidad y profesionalismo en el desarrollo de nuestra labor. </li> 
								<li> Vocacion de servicio. </li>
								<li> Respeto tanto a Copropietarios como al personal de la Comunidad. </li>
								<li> Honestidad en nuestro actuar diario. </li>
								<li> Trabajo en equipo con los Miembros del Comité de Administración. </li>
								<li> Proactividad, adelantandonos siempre a los problemas o necesidades de la Comunidad. </li>
							</ul>
						</div>
						<section class="video-area video2-area col-lg-5 d-none d-lg-block">							
						</section>											
					</div>
				</div>	
			</section>
<!-- End home-vision Area -->

<!-- Start we-offer Area -->
	<section class="we-offer-area section-gap services" id="offer">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-60 col-lg-10">
					<div class="title text-center">
						<h1 class="mb-10">Nuestros Servicios</h1>
						<p></p>
					</div>
				</div>
			</div>
			<div class="card-deck">
			  	<div class="card">
			  		<div class="img-wrapper">
			  			<img class="card-img-top" src="img/seguridad.jpg" style=" padding: 10px 50px; border-radius: 50%;" alt="Seguridad">
			  		</div>			  		
			    	<div class="card-body text-center">
			      		<h5 class="card-title">Seguridad</h5>
			      		<p class="card-text">La seguridad es una de las principales preocupaciones de los copropietarios, por lo cual recomendamos a la comunidad las medidas necesarias para disminuir los riesgos.</p>
			      		<br>
			    	</div>
			  	</div>
			  	<div class="card">
			  		<div class="img-wrapper">
			  			<img class="card-img-top" src="img/transparencia.jpg" style=" padding: 10px 50px; border-radius: 50%;" alt="Transparencia">
			    	</div>
			    	<div class="card-body text-center">
			      		<h5 class="card-title">Transparencia</h5>
			      		<p class="card-text">Un comportamiento ético en todo nuestro actuar es uno de los valores fundamentales de nuestra empresa. Existe total transparencia en los gastos realizados y manejo del fondo de reserva.</p>
			      		<br>
			    	</div>
			  	</div>
			  	<div class="w-100 p-2 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
			  	<div class="w-100 p-2 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>
			  	<div class="card">
			  		<div class="img-wrapper">
			  			<img class="card-img-top" src="img/valor.jpg" style=" padding: 10px 50px; border-radius: 50%;" alt="Transparencia">
			    	</div>
			    	<div class="card-body text-center">
			      		<h5 class="card-title">Valor</h5>
			      		<p class="card-text">Cuidamos la plusvalía de la propiedad que administramos, planificando acciones periódicas de mantención preventiva y de infraestructura, como también en la calidad del personal interno.</p>
			    	</div>
			  	</div>
			  	<div class="card">
			  		<div class="img-wrapper">
			  			<img class="card-img-top" src="img/presencia.jpg" style=" padding: 10px 50px; border-radius: 50%;" alt="Presencia">
			    	</div>
			    	<div class="card-body text-center">
			      		<h5 class="card-title">Presencia</h5>
			      		<p class="card-text">La supervisión es la base de un buen servicio y por lo tanto efectuamos visitas periódicas a las instalaciones y nos preocupamos de cada detalle que se pueda presentar en las propiedades.</p>
			      		<br>
			    	</div>
			  	</div>
			</div>						
		</div>	
	</section>
<!-- End we-offer Area -->

<script type="text/javascript">

	$(document).ready(function(){
	
		$('.card').hover(
			function(){
				$(this).animate({
					marginTop: "-=1%",
				},200);
			},
			function(){
				$(this).animate({
					marginTop: "0%",
				},200);
			}
		)
	});

	var scroll = new SmoothScroll('a[href*="#"]');
</script>

@stop