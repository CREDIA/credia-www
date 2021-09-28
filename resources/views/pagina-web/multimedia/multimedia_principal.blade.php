@extends('pagina-web.layouts.layout')

@section('title', '| Multimedia')

@section('banner')
	<section class="xs-banner-inner-section parallax-window" style="background-image:url(/storage/uploads/{{$foto}});padding-top: 210px;padding-bottom: 120px;">
		<div class="xs-black-overlay"></div>
		<div class="container">
			<div class="color-white xs-inner-banner-content">
				<h2>{{$titulo}}</h2>
				<p>{{$contenido}}</p>
			</div>
		</div>
	</section>
@endsection

@push('scripts')
	<script>
		
	</script>
@endpush

@section('galeria_seccion')
	<!-- Principal Multimedia section -->
	<div class="xs-content-section-padding" id="contenido">
		<div class="container">
			<div class="row">
				<div class="titulo-mult col-lg-6 col-md-12">
					<h3>Galería de fotos</h3>
					<a id="link-fotos" href="{{ URL::route('album',['slug' => str_slug('fotos','-')]) }}">
						<div class="xs-container-div zoom-in" style="background-image: url('/assets/images/multimedia/fotos-img-1.png');"></div>
					</a>
				</div><!-- END .xs-portafolio-fotos-item -->
				<div class="titulo-mult col-lg-6 col-md-12">
					<h3>Videoteca</h3>
					<a href="{{ URL::route('album',['slug' => str_slug('videos','-')]) }}">
						<div class="xs-container-div zoom-in" style="background-image: url('/assets/images/multimedia/fotos-img-2.png');"></div>	
					</a>
				</div><!-- END .xs-portafolio-videos-item -->
			</div>
		</div>
	</div><!-- End Principal Multimedia section -->
@endsection