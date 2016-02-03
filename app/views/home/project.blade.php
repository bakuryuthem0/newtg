@extends('layouts.default')

@section('content')
<main class="cd-main">
		<section class="cd-section home visible">
			<header>
				<div class="cd-title">
					<h2>Nuestros proyectos</h2>
					<span></span>
				</div>

				<a href="#index-content" class="cd-scroll">Scroll Down</a>
			</header>

			<div class="cd-content row" id="index-content">
				<div class="contenedor-tipop">
					<div class="col s12 m6 l4 formulario project project-modal" data-toggle="modal" data-target="#modal-project" data-titulo="Titulo del proyecto" data-dec="Descripcion del proyecto">
						<img src="{{ asset('images/persona.jpg') }}">
						<div class="justify">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae illo veritatis ea deserunt aliquam blanditiis, voluptas optio, volupta
						</div>
					</div>
					<div class="col s12 m6 l4 formulario project project-modal" data-toggle="modal" data-target="#modal-project" data-titulo="Titulo del proyecto" data-dec="Descripcion del proyecto">
						<img src="{{ asset('images/persona.jpg') }}">
						<div class="justify">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae illo veritatis ea deserunt aliquam blanditiis, voluptas optio, volupta
						</div>
					</div>
					<div class="col s12 m6 l4 formulario project project-modal" data-toggle="modal" data-target="#modal-project" data-titulo="Titulo del proyecto" data-dec="Descripcion del proyecto">
						<img src="{{ asset('images/persona.jpg') }}">
						<div class="justify">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae illo veritatis ea deserunt aliquam blanditiis, voluptas optio, volupta
						</div>
					</div>
					<div class="col s12 m6 l4 formulario project project-modal" data-toggle="modal" data-target="#modal-project" data-titulo="Titulo del proyecto" data-dec="Descripcion del proyecto">
						<img src="{{ asset('images/persona.jpg') }}">
						<div class="justify">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae illo veritatis ea deserunt aliquam blanditiis, voluptas optio, volupta
						</div>
					</div>
					<div class="col s12 m6 l4 formulario project project-modal" data-toggle="modal" data-target="#modal-project" data-titulo="Titulo del proyecto" data-dec="Descripcion del proyecto">
						<img src="{{ asset('images/persona.jpg') }}">
						<div class="justify">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae illo veritatis ea deserunt aliquam blanditiis, voluptas optio, volupta
						</div>
					</div>
					<div class="col s12 m6 l4 formulario project project-modal" data-toggle="modal" data-target="#modal-project" data-titulo="Titulo del proyecto" data-dec="Descripcion del proyecto">
						<img src="{{ asset('images/persona.jpg') }}">
						<div class="justify">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae illo veritatis ea deserunt aliquam blanditiis, voluptas optio, volupta
						</div>
					</div>
				</div>

			</div> <!-- .cd-content -->
		</section> <!-- .cd-section -->
	</main> <!-- .cd-main -->
@stop