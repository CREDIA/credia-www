@extends('pagina-web.layouts.layout')

@section('title', '| Album de fotos')

@section('banner')
	<section class="xs-banner-inner-section parallax-window" style="background-image:url(/storage/uploads/{{$foto}});padding-top: 210px;padding-bottom: 120px;">
		<div class="xs-black-overlay"></div>
		<div class="container">
			<div class="color-white xs-inner-banner-content">
				<h2>{{$titulo}}</h2>
				<p>{{$contenido}}</p>
				<div class="xs-btn-wraper">
					<a href="{{URL::route('album',['slug' => str_slug('fotos','-')])}}" class="btn btn-outline-primary"><i class="fa fa-reply"> │ </i>
						ÁLBUMES
					</a>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('foto_seccion')
	
	<!-- Fotos section -->
	<div class="xs-content-section-padding" id="contenido">
		<div class="container">
			@if(count($fotos) > 0)
				<div class="xs-portfolio-grid">
					@foreach($fotos as $foto)						
						<div class="xs-portfolio-grid-item">
							<a href="/storage/uploads/{{ $foto->fotos }}" class="xs-single-portfolio-item xs-image-popup" title='{{ $foto->descripcion }}'>
								<img src="/storage/uploads/{{ $foto->fotos }}">
								<div class="xs-portfolio-content">
									<span class="icon-plus-button"></span>
								</div>
							</a>
						</div>
					@endforeach
				</div>
			@else
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<h1 class="resp col-md-12">NO HAY FOTOGRAFÍAS EN EL ÁLBUM<h1>
					</div>
				</div>
			@endif
		</div>
	</div><!-- End Fotos section -->
@endsection

@push('scripts')
	<script type="text/javascript">
		$(document).ready(function () {
	
		});
	</script>
@endpush