@extends('layouts.default')

@section('content')
<main class="cd-main">
		<section class="cd-section home visible">
			<header>
				<div class="cd-title">
					<h2>Quienes somos</h2>
					<span>Some text here</span>
				</div>

				<a href="#index-content" class="cd-scroll">Scroll Down</a>
			</header>

			<div class="cd-content row" id="index-content">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae illo veritatis ea deserunt aliquam blanditiis, voluptas optio, voluptate ut accusamus veniam numquam, porro! Cum minima a molestiae, similique voluptate, perferendis vel iusto quam suscipit delectus dolore ducimus possimus illo molestias voluptas labore optio consequuntur sapiente pariatur libero nam temporibus. Laudantium!
				</p>

				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae illo veritatis ea deserunt aliquam blanditiis, voluptas optio, voluptate ut accusamus veniam numquam, porro! Cum minima a molestiae, similique voluptate, perferendis vel iusto quam suscipit delectus dolore ducimus possimus illo molestias voluptas labore optio consequuntur sapiente pariatur libero nam temporibus. Laudantium!
				</p>
				<div class="contenedor-tipop center-align">
					<div class="col s12 m4">
						<div class="waves-effect waves-block waves-light">
						  <img src="{{ asset('images/persona.jpg') }}" alt="" class="circle image-tree-quarters"> <!-- notice the "circle" class -->
						</div>
						<div class="card-content">
							Carlos Salazar
							<br>
							Coordinador departamento de desarrollo
						</div>
					</div>
					<div class="col s12 m4">
						<div class=" waves-effect waves-block waves-light">
						  <img src="{{ asset('images/persona.jpg') }}" alt="" class="circle image-tree-quarters"> <!-- notice the "circle" class -->
						</div>
						<div class="card-content">
							Angela torres
							<br>
							Coordinadora departamento de marketing
						</div>
					</div>
					<div class="col s12 m4 ">
						<div class=" waves-effect waves-block waves-light">
						  <img src="{{ asset('images/persona.jpg') }}" alt="" class="circle image-tree-quarters"> <!-- notice the "circle" class -->
						</div>
						<div class="card-content">
							Felipe Sosa
							<br>
							Coordinador departamento creativo
						</div>
					</div>
				</div>
				
			</div> <!-- .cd-content -->
		</section> <!-- .cd-section -->
	</main> <!-- .cd-main -->
@stop