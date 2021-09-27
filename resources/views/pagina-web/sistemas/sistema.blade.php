@extends('pagina-web.layouts.layout')

@section('title', '| Sistemas')

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

@section('sistemas_seccion')
	<div class="section secondary-section">
		<div class="container centered">
			<p class="large-text">
				El <span>CREDIA</span> cuenta con diferentes sistemas de información que comprenden un conjunto de elementos
				orientados a tratamiento y administración de datos e información, los cuales estan organizados 
				y disponibles para uso público.
			</p>
		</div>
	</div>
	@if(count($sistemas) > 0)
		@foreach($sistemas as $sistema)
			<!-- sistemas section -->
			<section>
				<div class="container espacio">
					<div class="row">
						<div class="col-lg-7">
							<div class="xs-feature-text-content">
								<div class="xs-heading">
									<h2 style="color:#a6ce39;">{{ $sistema->texto_mini }}</h2>
									<h3 class="xs-title">{{ $sistema->nombre_sistema }}</h3>
									<span class="xs-separetor bg-bondiBlue"></span>
								</div>
								<p style="text-align:justify;">{{ $sistema->descripcion }}</p>
								<a href="{{URL::route('sistemadetalle',['slug' => str_slug($sistema->nombre_sistema,'-'),'id' => $sistema->id])}}" class="btn btn-primary bg-bondiBlue">Más detalles</a>
								<a href="{{ $sistema->url }}" target="_blank" class="btn btn-primary bg-bondiGreen">Ir</a>
							</div><!-- .xs-feature-text-content END -->
						</div>
						<div class="col-lg-5">
							<div class="xs-feature-image-box image-1">
								<img src="/storage/uploads/{{ $sistema->foto }}" alt="">
							</div>
						</div>
					</div><!-- .row END -->
				</div><!-- .container END -->
			</section><!-- End feature details section -->
		@endforeach
	@endif
@endsection
