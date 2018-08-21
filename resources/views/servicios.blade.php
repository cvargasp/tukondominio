@extends('layouts.master')

@section('contenido')

<!-- Start callto-action Area -->
	<section class="callto-action-area relative section-gap services-header-section">
		<div class="overlay overlay-bg"></div>	
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content col-lg-9">
					<div class="title text-center">
						<h1 class="mb-10 text-white">Servicios</h1>
						<p class="text-white"></p>
					</div>
				</div>
			</div>	
			<div class="row">
			</div>
		</div>	
	</section>
<!-- End calto-action Area -->
<!-- Start home-vision Area -->
			<section class="home-values-area" id="vision">
				<div class="container-fluid">
					<div class="row justify-content-end align-items-center text-justify">
						<div class="col-lg-5 no-padding about-left d-lg-none">
							<img class="img-fluid" src="img/diagnostic-image.jpg" alt="">
						</div>
						<div class="col-lg-5  values-right">
							<h1>DIAGNOSTICO INICIAL</h1>
							<h4>EVALUACION DE  LA SITUACIÓN FINANCERA</h4>
							<p>Se realiza una revision de las cuentas del Condominio, de los gastos asociados a los servicios básicos, remuneraciónes del personal, Gastos Generales y de Administración, Certificaciones y Mantenimiento de las Instalaciones, con el objeto de validar su adecuado respaldo y detectar posibles condiciones de mejora.</p>
							<h4>EVALUACION DE CUMPLIMIENTO DE NORMAS </h4>
							<p>Se realiza una revision del cumplimiento de la normativa vigente para Edificios y Condominios. Esta incluye temas relacionados a mantenciones y certificaciones de la mas diversa índole, tales como ascensores, calderas, piscinas, sello verde gas, y otros que correspondan, como también en la existencia los seguros de las unidades y los espacios comunes, el reglamento de Higiene y Seguridad y Planes de Emergencia y Evacuación.</p>
							<h4>EVALUACION DE PERSONAL</h4>
							<p>Se realiza una entrevista al personal de los trabajadores con el fin de conocer sus habilidades y conocimientos de manera de contar con un registro que permita el mejor aprovechamiento de cada uno de los trabajadores de la comunidad. Revisión de la legalidad de los contratos y turnos asignados, de manera que estos cumplan con las disposiciones legales que correspondan. Revision final de las remuneraciones y del cumplimiento del pago correcto de cotizaciones.</p>
						</div>
						<section class="values-area col-lg-5 d-none d-lg-block">
							
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
							<img class="img-fluid" src="img/family-image.jpg" style="object-fit: cover;" alt="foto familiar">
						</div>
						<section class="mission-area services2-area col-lg-5 d-none d-lg-block">
							
						</section>	
						<div class="col-lg-5 mission-right">
							<h1 class="text-left">BASES DE NUESTRO SERVICIO</h1>
							<h4>SUPERVISION PERMANENTE</h4>
							<p>Nuestra forma de trabajo se basa en que todas las labores que realiza el personal debe ser constantemente supervisada ycon el fin de asegurar un buen servicio. Se establecen calendarios de visitas que permitan mantener un contacto constante con el Comité de Administración y con el personal de servicio, de forma que se sienta nuestra presencia en el condominio.</p>
							<h4>ACTITUD PROACTIVA</h4>
							<p>Trabajar en forma proactiva, detectando en forma anticipada cualquier foco de problema incluso antes de este se produzca y programar oportunamente las manteciones y labores de hermosamiento a las que deba someterse el Condominio.</p>
							<h4>NUESTRO APORTE A SU COMUNIDAD</h4>
							<ul class="unordered-list">
								<li>Mantención de cuentas claras.</li>
								<li>Mayor presencia en las instalaciones.</li>	
								<li>Recomendar mejoras a las instalaciones del condominio.</li>	
								<li>Incrementar el nivel de seguridad al interior de las instalaciones.</li>
								<li>Mejorar canales de comunicación entre la Asamblea, Comité de Administración, personal del condomimio y Administración.</li>
								<li>Producir rebajas de costos al interior del condominio.</li>
								<li>Propiciar el cumplimiento de todas las normativas que rigen los distintos ámbitos de un Condominio, ya sea eléctricos, gas, medioambientales o sanitarios.</li>
								<li>Disponer del personal Idoneo para las labores de seguridad, mantenimiento y aseo del Condominio.</li>
							</ul>
						</div>										
					</div>
				</div>	
			</section>
<!-- End home-mission Area -->

	<section>
		<div class="container next-section">
			<div class="row d-flex justify-content-center">
				<div class="menu-content col-lg-9">
					<div class="title text-center">
						<h4 class="mb-10">Si desea conocer en profundidad nuestros servicios pulse el siguiente botón.</h4>
						<br/>
						<a href="{{ route('servicios-detallados')}}" class="genric-btn success circle arrow">Ver Más<span class="lnr lnr-arrow-right"></span></a>
					</div>
				</div>
			</div>	
		</div>
	</section>

@stop