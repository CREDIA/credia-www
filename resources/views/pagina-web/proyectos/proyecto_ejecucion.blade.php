@extends('pagina-web.layouts.layout')

@section('title', '| Proyectos')

<?php

	function cant_dias($fecha11,$fecha22){
		$fecha1= new DateTime($fecha11);
		$fecha2= new DateTime($fecha22);
		
		$diff = $fecha1->diff($fecha2);
		
		return $diff->days;
	}
	
	$pagination_range = 2;
?>

@section('banner')
	<section class="xs-banner-inner-section parallax-window" style="background-image:url(/{{$foto}})">
		<div class="xs-black-overlay"></div>
		<div class="container">
			<div class="color-white xs-inner-banner-content">
				<h2>{{$titulo}}</h2>
				<p>{{$contenido}}</p>
			</div>
		</div>
	</section>
@endsection

@section('proyecto_seccion')
	<!-- popularCauses version 2 section -->
	<section class="waypoint-tigger xs-section-padding">
		<div class="container">
			<div class="row">
				@if(count($proyectos) === 0)
					<div class="col-lg-12">
						<h1 class="resp">NO HAY PUBLICACIONES DISPONIBLES<h1>
					</div>
				@endif
				@foreach($proyectos as $proyecto)
					<div class="xs-popular-item xs-box-shadow">
						<div class="xs-item-box col-lg-5 col-md-12">
							<div class="xs-item-header-box" style="background-image: url(/{{ $proyecto->foto }});"></div>
						</div>
						<div class="xs-item-content-box col-lg-7 col-md-12">
							<div class="xs-margin-2">
								<div class="xs-margin-3" id="textlarge">
									<a href="{{URL::route('proyectodetalle',['slug' => str_slug($proyecto->titulo,'-'),'id' => $proyecto->id])}}" class="xs-post-title xs-mb-10">{{ $proyecto->titulo }}</a>
								</div>
								<span class="xs-separetor"></span>
								<div class="xs-margin-5" id="textdescripcion">
									<p class="xs-descript-format">{{ $proyecto->descripcion }}</p>
								</div>
								<span class="xs-separetor"></span>
								<div class="xs-margin-6 row">
									<ul class="xs-list-with-content col-md-8 col-md-18">
										<li>£ {{ number_format($proyecto->presupuesto,2) }}<span>Presupuesto</span></li>
										<li>L {{ number_format($proyecto->utilizado,2) }}<span>Utilizado</span></li>
										<li>{{ $proyecto->avance }}% <span>Avance</span></li>
									</ul>
									<div class="xs-margin-t col-md-4 col-md-4">
										<a href="{{URL::route('proyectodetalle',['slug' => str_slug($proyecto->titulo,'-'),'id' => $proyecto->id])}}" class="btn btn-primary">seguir leyendo</a>
									</div>
								</div>
							</div>
						</div>
						<div class="xs-skill-bar col-lg-12 col-md-12">
							<div class="xs-skill-track bg-light-green">
								<p><span class="number-percentage-count number-percentage" data-value="{{ $proyecto->avance }}" data-animation-duration="3500">0</span>%</p>
							</div>
						</div>
					</div>
				@endforeach
			</div>
			@if($proyectos->count() > 0)
				<!-- pagination -->
				<div>
					<ul class="pagination justify-content-center xs-pagination">
						<li class="page-item {{ $proyectos->previousPageUrl() == null ? 'disabled' : '' }}">
							<a class="page-link" href="{{ $proyectos->previousPageUrl() ?? '#' }}" aria-label="Previous">
								<i class="fa fa-angle-left"></i>
							</a>
						</li>
						@if ($proyectos->currentPage() > 1+$pagination_range )
							<li class="page-item">
								<a class="page-link" href="{{ $proyectos->url(1) ?? '#' }}">{{ 1 }}</a>
							</li>

							@if ($proyectos->currentPage() > 1+$pagination_range+1 )
								<li class="page-item disabled">
									<span class="page-link">&hellip;</span>
								</li>
							@endif
						@endif
						@for ($i=-$pagination_range; $i<=$pagination_range; $i++)
							@if ($proyectos->currentPage()+$i > 0 && $proyectos->currentPage()+$i <= $proyectos->lastPage())
								<li class="page-item">
									<a class="page-link {{ $i==0 ? 'active' : '' }}" href="{{ $proyectos->url($proyectos->currentPage()+$i) }}">{{ $proyectos->currentPage()+$i }}</a>
								</li>
							@endif
						@endfor
						@if ($proyectos->currentPage() < $proyectos->lastPage()-$pagination_range )	
							@if ($proyectos->currentPage() < $proyectos->lastPage()-$pagination_range-1 )
								<li class="page-item disabled">
									<span class="page-link">&hellip;</span>
								</li>
							@endif
							<li class="page-item">
								<a class="page-link" href="{{ $proyectos->url($proyectos->lastPage()) ?? '#' }}">{{ $proyectos->lastPage() }}</a>
							</li>
						@endif
						<li class="page-item {{ $proyectos->nextPageUrl()==null ? 'disabled' : '' }}">
							<a class="page-link" href="{{ $proyectos->nextPageUrl() ?? '#' }}" aria-label="Next">
								<i class="fa fa-angle-right"></i>
							</a>
						</li>
					</ul>
				</div><!-- End pagination -->
			@endif
		</div><!-- .container end -->
	</section><!-- End popularCauses version 2 section -->
@endsection
