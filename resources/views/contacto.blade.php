@extends('layouts.master')

@section('contenido')

<!-- Start callto-action Area -->
	<section class="callto-action-area relative section-gap contact-header-section">
		<div class="overlay overlay-bg"></div>	
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content col-lg-9">
					<div class="title text-center">
						<h1 class="mb-10 text-white">Contacto</h1>
						<p class="text-white">Envíenos sus datos y nos pondremos en contacto con usted.</p>
					</div>
				</div>
			</div>	
			<div class="row">
			</div>
		</div>	
	</section>
<!-- End calto-action Area -->

<section>
	<div class="container next-section">
		<div class="row margin-contact-info">
			<div class="col-md-7">
				<form method="post" action="{{route('contact.store')}}">
					{{ csrf_field() }}

				  	<div class="form-group">
				  		<div>
	     					<div class="input-group">				  			
						        <div class="input-group-prepend">
						          	<span class="input-group-text" id=""><i class="fas fa-user icon-contact"></i></span>
						        </div>
						        <input type="text" id="form-name" class="form-control" placeholder="Nombre" aria-describedby="" required="" name="name">
						   	</div>
	    				</div>
	    				<div class="mt-10">
	    					<div class="input-group">
						        <div class="input-group-prepend">
						          	<span class="input-group-text" id=""><i class="fas fa-phone icon-contact"></i></span>
						        </div>
						        <input type="text" id="form-phone" class="form-control" placeholder="Teléfono" required="" name="phone">
						   	</div>
	    				</div>
	    				<div class="mt-10">
	    					<div class="input-group">
						        <div class="input-group-prepend">
						          	<span class="input-group-text" id="">@</span>
						        </div>
						        <input type="text" id="form-email" class="form-control" placeholder="Correo" required="" name="email">
						   	</div>
	    				</div>
	    				<div class="mt-10">
	    					<div class="input-group">
						        <div class="input-group-prepend">
						          	<span class="input-group-text" id=""><i class="fas fa-comment-dots icon-contact"></i></span>
						        </div>
						        <textarea id="form-message" class="form-control" placeholder="Mensaje" rows="6" required="" name="message"></textarea>
						   	</div>
	    				</div>
	    				<button type="submit" class="btn btn-primary btn-block mt-10 form-btn">Enviar</button>
				  	</div>
				</form>
			</div>
			<div class="col-md-4 contact-info text-right">	
				<h3>Contáctanos</h3>
				<ul>
		           	<li><i class="fas fa-at mt-10"></i><span> contacto@tukondominio.cl</span></li>
		           	<li><h4>Erwin Krüger</h4></li>
		           	<li><i class="fas fa-at mt-10"></i><span> erwin.kruger@tukondominio.cl</span></li>
		          	<li><i class="fas fa-phone icon-contact"></i> <span> +56 9 8361 1006 </span></li>
		          	<li><h4>Carlos Vargas</h4></li>
		           	<li><i class="fas fa-at mt-10"></i><span> carlos.vargas@tukondominio.cl</span></li>
		          	<li><i class="fas fa-phone icon-contact"></i> <span> +56 9 9433 8330 </span></li>
            	</ul>
			</div>
		</div>
	</div>
</section>

@stop