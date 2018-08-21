@extends('layouts.master')

@section('contenido')

<!-- Start callto-action Area -->
	<section class="callto-action-area relative section-gap autoevaluate-header-section">
		<div class="overlay overlay-bg"></div>	
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content col-lg-9">
					<div class="title text-center">
						<h1 class="mb-10 text-white">Autoevalúe</h1>
						<p class="text-white"></p>
					</div>
				</div>
			</div>	
			<div class="row">
			</div>
		</div>	
	</section>
<!-- End calto-action Area -->
	
	<section>
		<div class="container next-section margin-contact-info">
			<div class="row">
				<div class="col-lg-12">
					<p>Esta encuesta tiene como objetivo conocer la calidad de los servicios de administración de edificios y condominios que usted recibe actualmente.</p>
					<p> A continuación encontrará una pequeña encuesta respecto áreas del quehacer del servicio de administración de edificios y condominios. En relación al servicio de administración que usted recibe, por favor indique con qué nota calificaría al servicio en cada una de ellas.</p>
					
					<!-- <div class="custom-control custom-radio custom-control-inline">
					  <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
					  <label class="custom-control-label" for="customRadioInline1">Toggle this custom radio</label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
					  <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
					  <label class="custom-control-label" for="customRadioInline2">Or toggle this other custom radio</label>
					</div> -->

					<ol class="ordered-list">
						<li class="mb-20"><span>Con respecto a la operación y funcionamiento del condominio, indique con qué nota calificaríausted al servicio de administración en cuanto a las siguientes características, siendo 1 = pésimo y 7= excelente:</span></li>
						<table class="table">
							<tr>
							    <th></th>
							    <th>1</th>
							    <th>2</th>
							    <th>3</th>
							    <th>4</th>
							    <th>5</th>
							    <th>6</th>
							    <th>7</th>
							</tr>
							<tr>
							    <td>Funcionamiento del equipamiento del condominio</td>
							    <td><input type="radio" name="row-1" data-col="1"></td>
							    <td><input type="radio" name="row-1" data-col="2"></td>
							    <td><input type="radio" name="row-1" data-col="3"></td>
							    <td><input type="radio" name="row-1" data-col="4"></td>
							    <td><input type="radio" name="row-1" data-col="5"></td>
							    <td><input type="radio" name="row-1" data-col="6"></td>
							    <td><input type="radio" name="row-1" data-col="7"></td>
							</tr>
							<tr>
							    <td>Orden y limpieza del condominio</td>
							    <td><input type="radio" name="row-2" data-col="1"></td>
							    <td><input type="radio" name="row-2" data-col="2"></td>
							    <td><input type="radio" name="row-2" data-col="3"></td>
							    <td><input type="radio" name="row-2" data-col="4"></td>
							    <td><input type="radio" name="row-2" data-col="5"></td>
							    <td><input type="radio" name="row-2" data-col="6"></td>
							    <td><input type="radio" name="row-2" data-col="7"></td>
							</tr>
							<tr>
							    <td>Frecuencia con que el administrador visita el condominio</td>
							    <td><input type="radio" name="row-3" data-col="1"></td>
							    <td><input type="radio" name="row-3" data-col="2"></td>
							    <td><input type="radio" name="row-3" data-col="3"></td>
							    <td><input type="radio" name="row-3" data-col="4"></td>
							    <td><input type="radio" name="row-3" data-col="5"></td>
							    <td><input type="radio" name="row-3" data-col="6"></td>
							    <td><input type="radio" name="row-3" data-col="7"></td>
							</tr>
							<tr>
							    <td>Facilidad para contactar al administrador</td>
							    <td><input type="radio" name="row-4" data-col="1"></td>
							    <td><input type="radio" name="row-4" data-col="2"></td>
							    <td><input type="radio" name="row-4" data-col="3"></td>
							    <td><input type="radio" name="row-4" data-col="4"></td>
							    <td><input type="radio" name="row-4" data-col="5"></td>
							    <td><input type="radio" name="row-4" data-col="6"></td>
							    <td><input type="radio" name="row-4" data-col="7"></td>
							</tr>
							<tr>
							    <td>Rapidez en la solución de imprevistos</td>
							    <td><input type="radio" name="row-5" data-col="1"></td>
							    <td><input type="radio" name="row-5" data-col="2"></td>
							    <td><input type="radio" name="row-5" data-col="3"></td>
							    <td><input type="radio" name="row-5" data-col="4"></td>
							    <td><input type="radio" name="row-5" data-col="5"></td>
							    <td><input type="radio" name="row-5" data-col="6"></td>
							    <td><input type="radio" name="row-5" data-col="7"></td>
							</tr>
						</table>
						<li class="mb-20"><span>Con respecto a la recaudación y administración de los recursos del condominio, indique con qué nota calificaría usted al servicio de administración en cuanto a las siguientes características, siendo 1 = pésimo y 7 = excelente:</span></li>
						<table class="table">
							<tr>
							    <th></th>
							    <th>1</th>
							    <th>2</th>
							    <th>3</th>
							    <th>4</th>
							    <th>5</th>
							    <th>6</th>
							    <th>7</th>
							</tr>
							<tr>
							    <td>La claridad y calidad del resumen de gastos comunes.</td>
							    <td><input type="radio" name="row-1" data-col="1"></td>
							    <td><input type="radio" name="row-1" data-col="2"></td>
							    <td><input type="radio" name="row-1" data-col="3"></td>
							    <td><input type="radio" name="row-1" data-col="4"></td>
							    <td><input type="radio" name="row-1" data-col="5"></td>
							    <td><input type="radio" name="row-1" data-col="6"></td>
							    <td><input type="radio" name="row-1" data-col="7"></td>
							</tr>
							<tr>
							    <td>Eficiencia en la administración de los recursos disponibles.</td>
							    <td><input type="radio" name="row-2" data-col="1"></td>
							    <td><input type="radio" name="row-2" data-col="2"></td>
							    <td><input type="radio" name="row-2" data-col="3"></td>
							    <td><input type="radio" name="row-2" data-col="4"></td>
							    <td><input type="radio" name="row-2" data-col="5"></td>
							    <td><input type="radio" name="row-2" data-col="6"></td>
							    <td><input type="radio" name="row-2" data-col="7"></td>
							</tr>
							<tr>
							    <td>Búsqueda permanente de oportunidades para reducir los gastos comunes.</td>
							    <td><input type="radio" name="row-3" data-col="1"></td>
							    <td><input type="radio" name="row-3" data-col="2"></td>
							    <td><input type="radio" name="row-3" data-col="3"></td>
							    <td><input type="radio" name="row-3" data-col="4"></td>
							    <td><input type="radio" name="row-3" data-col="5"></td>
							    <td><input type="radio" name="row-3" data-col="6"></td>
							    <td><input type="radio" name="row-3" data-col="7"></td>
							</tr>
							<tr>
							    <td>Uso de herramientas tecnológicas en el control administrativo.</td>
							    <td><input type="radio" name="row-4" data-col="1"></td>
							    <td><input type="radio" name="row-4" data-col="2"></td>
							    <td><input type="radio" name="row-4" data-col="3"></td>
							    <td><input type="radio" name="row-4" data-col="4"></td>
							    <td><input type="radio" name="row-4" data-col="5"></td>
							    <td><input type="radio" name="row-4" data-col="6"></td>
							    <td><input type="radio" name="row-4" data-col="7"></td>
							</tr>
						</table>
						<li class="mb-20"><span>Con respecto a las relaciones del personal con los residentes, indique con qué nota calificaría usted al servicio de administración en cuanto a las siguientes características, siendo 1 = pésimo y 7 = excelente:</span></li>
						<table class="table">
							<tr>
							    <th></th>
							    <th>1</th>
							    <th>2</th>
							    <th>3</th>
							    <th>4</th>
							    <th>5</th>
							    <th>6</th>
							    <th>7</th>
							</tr>
							<tr>
							    <td>Calidad de la relación del administrador con el comité de administración y los residentes.</td>
							    <td><input type="radio" name="row-1" data-col="1"></td>
							    <td><input type="radio" name="row-1" data-col="2"></td>
							    <td><input type="radio" name="row-1" data-col="3"></td>
							    <td><input type="radio" name="row-1" data-col="4"></td>
							    <td><input type="radio" name="row-1" data-col="5"></td>
							    <td><input type="radio" name="row-1" data-col="6"></td>
							    <td><input type="radio" name="row-1" data-col="7"></td>
							</tr>
							<tr>
							    <td>Organización y manejo de las reuniones y asambleas.</td>
							    <td><input type="radio" name="row-2" data-col="1"></td>
							    <td><input type="radio" name="row-2" data-col="2"></td>
							    <td><input type="radio" name="row-2" data-col="3"></td>
							    <td><input type="radio" name="row-2" data-col="4"></td>
							    <td><input type="radio" name="row-2" data-col="5"></td>
							    <td><input type="radio" name="row-2" data-col="6"></td>
							    <td><input type="radio" name="row-2" data-col="7"></td>
							</tr>
							<tr>
							    <td>Honestidad y transparencia del administrador.</td>
							    <td><input type="radio" name="row-3" data-col="1"></td>
							    <td><input type="radio" name="row-3" data-col="2"></td>
							    <td><input type="radio" name="row-3" data-col="3"></td>
							    <td><input type="radio" name="row-3" data-col="4"></td>
							    <td><input type="radio" name="row-3" data-col="5"></td>
							    <td><input type="radio" name="row-3" data-col="6"></td>
							    <td><input type="radio" name="row-3" data-col="7"></td>
							</tr>
						</table>
						<li class="mb-20"><span>Con respecto a la planificación de trabajos / mantenciones mayores, (Trabajos programados como pintura, mantenimiento de ascensores, calderas, medidas para mejorar eficiencia energética, etc...) indique con qué nota calificaría usted al servicio de administración en cuanto a las siguientes características, siendo 1 = pésimo y 7 = excelente:</span></li>
						<table class="table">
							<tr>
							    <th></th>
							    <th>1</th>
							    <th>2</th>
							    <th>3</th>
							    <th>4</th>
							    <th>5</th>
							    <th>6</th>
							    <th>7</th>
							</tr>
							<tr>
							    <td>Planificación adecuada y con anticipación de las mantenciones mayores.</td>
							    <td><input type="radio" name="row-1" data-col="1"></td>
							    <td><input type="radio" name="row-1" data-col="2"></td>
							    <td><input type="radio" name="row-1" data-col="3"></td>
							    <td><input type="radio" name="row-1" data-col="4"></td>
							    <td><input type="radio" name="row-1" data-col="5"></td>
							    <td><input type="radio" name="row-1" data-col="6"></td>
							    <td><input type="radio" name="row-1" data-col="7"></td>
							</tr>
							<tr>
							    <td>Calidad de los servicios contratados.</td>
							    <td><input type="radio" name="row-2" data-col="1"></td>
							    <td><input type="radio" name="row-2" data-col="2"></td>
							    <td><input type="radio" name="row-2" data-col="3"></td>
							    <td><input type="radio" name="row-2" data-col="4"></td>
							    <td><input type="radio" name="row-2" data-col="5"></td>
							    <td><input type="radio" name="row-2" data-col="6"></td>
							    <td><input type="radio" name="row-2" data-col="7"></td>
							</tr>
							<tr>
							    <td>Rapidez en la ejecución de los servicios contratados.</td>
							    <td><input type="radio" name="row-3" data-col="1"></td>
							    <td><input type="radio" name="row-3" data-col="2"></td>
							    <td><input type="radio" name="row-3" data-col="3"></td>
							    <td><input type="radio" name="row-3" data-col="4"></td>
							    <td><input type="radio" name="row-3" data-col="5"></td>
							    <td><input type="radio" name="row-3" data-col="6"></td>
							    <td><input type="radio" name="row-3" data-col="7"></td>
							</tr>
							<tr>
							    <td>Nivel de costo de los servicios contratados.</td>
							    <td><input type="radio" name="row-3" data-col="1"></td>
							    <td><input type="radio" name="row-3" data-col="2"></td>
							    <td><input type="radio" name="row-3" data-col="3"></td>
							    <td><input type="radio" name="row-3" data-col="4"></td>
							    <td><input type="radio" name="row-3" data-col="5"></td>
							    <td><input type="radio" name="row-3" data-col="6"></td>
							    <td><input type="radio" name="row-3" data-col="7"></td>
							</tr>
							<tr>
							    <td>Implementación de nuevas medidas o elementos para mejorar la eficiencia energética.</td>
							    <td><input type="radio" name="row-3" data-col="1"></td>
							    <td><input type="radio" name="row-3" data-col="2"></td>
							    <td><input type="radio" name="row-3" data-col="3"></td>
							    <td><input type="radio" name="row-3" data-col="4"></td>
							    <td><input type="radio" name="row-3" data-col="5"></td>
							    <td><input type="radio" name="row-3" data-col="6"></td>
							    <td><input type="radio" name="row-3" data-col="7"></td>
							</tr>
						</table>
					</ol>

					<h3 class="mb-30 mt-50">HERRAMIENTAS DE TABULACION</h3>
					<p>Para efectos de tabulación de la presente encuesta, se deben seguir los siguientes pasos:</p>
					<p>1.- Sume las nota de cada área, de forma de obtener el total de notas para el total de las 4 áreas evaluadas.</p>

					<p>2.- El máximo puede ser 119 y el mínimo 17 y en base a esa puntuación, ubique en que rango se encuentra el servicio entregado por su administrador.</p>


					<h3 class="mb-30 mt-30">RESULTADOS DE LA TABULACION</h3>

					<h4 class="mb-10">Puntación menor a 60 puntos</h4> 
					<p>Su Administrador no cumple con los requisitos mínimos para el desarrollo de una buena gestión. Se sugiere un cambio hacia un Administrador profesional que traerá mayores eficiencias en diversos ámbitos. En muchos casos, esta puntuación tiene su base en administradores hechos por la experiencia o que fueron nombrados por la inmobiliaria y que no tienen gran compromiso con la comunidad.</p>

					<h4 class="mb-10">Puntuación entre 61 y 85 puntos</h4>

					<p>Su Administrador cumple con los requisitos mínimos en el desarrollo de su función, pero existen espacios para mejorar la gestión, lo cual traería consigo mayores eficiencias y disminuciones en los costos de la comunidad. </p>
					<p>Se debe evaluar el costo/beneficio de mantener el actual Administrador o salir en la búsqueda de mayor eficiencia y profesionalismo.</p>

					<h4 class="mb-10">Puntuación sobre 86 puntos</h4>

					<p>Su Administrador cumple con los requisitos para mantenerse en la administración de su condominio y sólo debe preocuparse de que mantenga en el futuro su nivel de servicio actual y que su comunidad no se convierta en una más de la cartera y disminuya el nivel de compromiso.</p>

					<p style="font-size: 18px;"></p>					
      			</div>
   			</div>
  		</div>
	</section>

	<section>
		<div class="container next-section">
			<div class="row d-flex justify-content-center">
				<div class="menu-content col-lg-9">
					<div class="title text-center">
						<h4 class="mb-10">Si el resultado obtenido está en el primer o segundo nivel, lo invitamos a conocernos y conversar de nuestra empresa y que le podemos ofrecer a su comunidad.</h4>
						<br/>
						<a href="{{ route('contacto')}}" class="genric-btn success circle arrow">Contáctenos<span class="lnr lnr-arrow-right"></span></a>
					</div>
				</div>
			</div>	
		</div>
	</section>
	<script type="text/javascript">
		$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
	</script>
@stop