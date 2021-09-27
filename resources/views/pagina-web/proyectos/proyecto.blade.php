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

@section('proyecto_seccion')

	@push('scripts')
		<script>
			var slideIndexv = 1;
			showDivsv(slideIndexv);

			function plusDivsv(n) {
			  showDivsv(slideIndexv += n);
			}  
			
			function showDivsv(n) {
			  var i;
			  var x = document.getElementsByClassName("mySlidesv");
			  if (n > x.length) {slideIndexv = 1}
			  if (n < 1) {slideIndexv = x.length}
			  for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";  
			  }
			  x[slideIndexv-1].style.display = "block";  
			}
		</script>
	@endpush
	
	<!-- Proyectos en ejecucion section -->
	<section class="waypoint-tigger xs-section-padding bg-gray">
		<div class="container">
			<div class="row">
				<div class="proyect-slide">
					@foreach($proyectos as $proyecto)
						<div class="xs-popular-item xs-box-shadow mySlidesv">
							<div class="xs-item-box col-lg-5 col-md-12">
								<div class="xs-item-header-box" style="background-image: url(/storage/uploads/{{ $proyecto->foto }});"></div>
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
											{{-- <li>L {{ number_format($proyecto->utilizado,2) }}<span>Utilizado</span></li>
											<li>{{ $proyecto->avance }}% <span>Avance</span></li> --}}
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
					<button class="w3-button w3-black w3-display-left-p" onclick="plusDivsv(-1)">&#10094;</button>
					<button class="w3-button w3-black w3-display-right-p" onclick="plusDivsv(1)">&#10095;</button>
				</div>
			</div>
		</div><!-- .container end -->
	</section><!-- End Proyectos en ejecucion section -->
	
	<!-- Proyectos Finalizados section -->
	<section class="waypoint-tigger xs-section-padding">
		<div class="container">
			<div class="row">
				@foreach($ejecuciones as $proyecto)
					<div class="col-lg-4 col-md-6">
						<div class="xs-popular-item xs-box-shadow">
							<div class="xs-item-header" style="background-image: url(/storage/uploads/{{ $proyecto->foto }});"></div>
								@if($proyecto->avance < 100)
									<div class="xs-skill-bar">
										<div class="xs-skill-track bg-light-green">
											<p><span class="number-percentage-count number-percentage" data-value="{{ $proyecto->avance }}" data-animation-duration="3500">0</span>%</p>
										</div>
									</div>
								@endif
							<div class="xs-item-content">
								<div class="xs-margin-1">
									<a href="{{URL::route('proyectodetalle',['slug' => str_slug($proyecto->titulo,'-'),'id' => $proyecto->id])}}" class="xs-post-title-i xs-mb-20">{{ $proyecto->titulo }}</a>
									<span class="xs-separetor"></span>
									<ul class="xs-simple-tag xs-mt-10">
										<li><a class="color-light-black" href="{{URL::route('proyectodetalle',['slug' => str_slug($proyecto->titulo,'-'),'id' => $proyecto->id])}}">{{ $proyecto->subtitulo }}</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				@endforeach
			</div><!-- .row end -->
			@if($ejecuciones->count() > 0)
				<!-- pagination -->
				<div>
					<ul class="pagination justify-content-center xs-pagination">
						<li class="page-item {{ $ejecuciones->previousPageUrl() == null ? 'disabled' : '' }}">
							<a class="page-link" href="{{ $ejecuciones->previousPageUrl() ?? '#' }}" aria-label="Previous">
								<i class="fa fa-angle-left"></i>
							</a>
						</li>
						@if ($ejecuciones->currentPage() > 1+$pagination_range )
							<li class="page-item">
								<a class="page-link" href="{{ $ejecuciones->url(1) ?? '#' }}">{{ 1 }}</a>
							</li>

							@if ($ejecuciones->currentPage() > 1+$pagination_range+1 )
								<li class="page-item disabled">
									<span class="page-link">&hellip;</span>
								</li>
							@endif
						@endif
						@for ($i=-$pagination_range; $i<=$pagination_range; $i++)
							@if ($ejecuciones->currentPage()+$i > 0 && $ejecuciones->currentPage()+$i <= $ejecuciones->lastPage())
								<li class="page-item">
									<a class="page-link {{ $i==0 ? 'active' : '' }}" href="{{ $ejecuciones->url($ejecuciones->currentPage()+$i) }}">{{ $ejecuciones->currentPage()+$i }}</a>
								</li>
							@endif
						@endfor
						@if ($ejecuciones->currentPage() < $ejecuciones->lastPage()-$pagination_range )	
							@if ($ejecuciones->currentPage() < $ejecuciones->lastPage()-$pagination_range-1 )
								<li class="page-item disabled">
									<span class="page-link">&hellip;</span>
								</li>
							@endif
							<li class="page-item">
								<a class="page-link" href="{{ $ejecuciones->url($ejecuciones->lastPage()) ?? '#' }}">{{ $ejecuciones->lastPage() }}</a>
							</li>
						@endif
						<li class="page-item {{ $ejecuciones->nextPageUrl()==null ? 'disabled' : '' }}">
							<a class="page-link" href="{{ $ejecuciones->nextPageUrl() ?? '#' }}" aria-label="Next">
								<i class="fa fa-angle-right"></i>
							</a>
						</li>
					</ul>
				</div><!-- End pagination -->
			@endif
		</div><!-- .container end -->
	</section><!-- End Proyectos Finalizados section -->
@endsection
