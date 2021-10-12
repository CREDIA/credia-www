@extends('pagina-web.layouts.layout')

<?php
	$pagination_range = 2;
?>

@section('title', '| Equipo de Trabajo')

@section('banner')
	<section class="xs-banner-inner-section parallax-window" style="background-image:url(/storage/uploads/{{$foto}})">
		<div class="xs-black-overlay"></div>
		<div class="container">
			<div class="color-white xs-inner-banner-content">
				<h2>{{$titulo}}</h2>
				<p>{{$contenido}}</p>
			</div>
		</div>
	</section>
@endsection

@section('equipo_et')
	@if(count($empleados) > 0)
		<!-- equipo section -->
		<section class="xs-section-padding">
			<div class="container">
				<div class="xs-heading row xs-mb-60">
					<div class="col-md-12 col-xl-12">
						<div class="xs-heading">
							<h2 class="xs-line-title">Nuestro</h2>
							<h3 class="xs-title big-o" data-title="Equipo">Equipo de trabajo</h3>
						</div>
						<!-- <span class="xs-separetor dashed"></span> -->
						<p style="color:#011b58;text-align:justify;">Nuestra fundaci&oacute;n esta compuesta por el personal adecuado, los mejores profesionales en su labor, unete se parte de esta gran familia.</p>
					</div><!-- .xs-heading-title END -->
				</div><!-- .row end -->
				<div class="row xs-mb-60">
					@foreach($empleados as $empleado)
						<div class="col-md-6 col-lg-3">
							<div class="xs-single-team">
								<img src="/storage/uploads/{{ $empleado->foto }}" alt="">
								<div class="xs-team-content">
									<h4>{{ $empleado->nombre }}</h4>
									<small>{{ $empleado->cargo }}</small>
									<svg class="xs-svgs" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 270 138">
										<path class="fill-green" d="M375,3294H645v128a10,10,0,0,1-10,10l-250-20a10,10,0,0,1-10-10V3294Z" transform="translate(-375 -3294)"/>
									</svg>
								</div><!-- .xs-team-content END -->
							</div><!-- .xs-single-team END -->
						</div>
					@endforeach
				</div>
			</div>
		</section><!-- End team section -->
	@endif
	
	<!-- voluntarios section -->
	<section class="xs-section-padding  bg-gray">
		<div class="container">
			<div class="xs-heading row xs-mb-60">
				<div class="col-md-12 col-xl-12">
					<div class="xs-heading">
						<h3 class="xs-title big-o">Nuestros voluntarios</h3>
					</div>
					<h2 class="xs-line-title" style="margin-top:25px;">&iquest;Por qu&eacute; hacer voluntariado?</h2>
					<p>
						Cuando te conviertes en voluntario te sientes &uacute;til. Te das cuenta de que tus acciones,
						tus tareas como voluntario tienen un objetivo y ayudan a otras personas o al medio ambiente.
					</p>
				</div>
			</div>
			<div class="row">
				@foreach($voluntarios as $voluntario)
					<div class="col-md-6 col-lg-3">
						<div class="xs-single-team xs-mb-50">
							<img src="/storage/uploads/{{ $voluntario->foto }}" alt="">
							<div class="xs-team-content">
								<h4>{{ $voluntario->nombre }}</h4>
								<small>{{ $voluntario->cargo }}</small>
								<svg class="xs-svgs" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 270 138">
									<path class="fill-green" d="M375,3294H645v128a10,10,0,0,1-10,10l-250-20a10,10,0,0,1-10-10V3294Z" transform="translate(-375 -3294)"/>
								</svg>
							</div>
						</div>
					</div>
				@endforeach
				<div class="col-xl-12 col-md-12 xs-btn-wraper">
					<a href="{{ URL::route('voluntario') }}" class="btn btn-primary" style="float:right;">INSCRIBETE</a>
				</div>
			</div>
			
		</div>
	</section><!-- End voluntarios section -->
@endsection
