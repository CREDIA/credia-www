@extends('pagina-web.layouts.layout')

@section('title', '| Videos')

@section('banner')
	<section class="xs-banner-inner-section parallax-window" style="background-image:url(/storage/uploads/{{$foto}});padding-top: 210px;padding-bottom: 120px;">
		<div class="xs-black-overlay"></div>
		<div class="container">
			<div class="color-white xs-inner-banner-content">
				<h2>{{$titulo}}</h2>
				<p>{{$contenido}}</p>
				<div class="xs-btn-wraper">
					<a href="{{URL::route('album',['slug' => str_slug('videos','-')])}}" class="btn btn-outline-primary"><i class="fa fa-reply"> │ </i>
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
			@if(count($videos) > 0)
				<div class="row">
					@foreach($videos as $video)
						<div class="col-lg-3 col-md-3">
							<div class="xs-video-popup-wraper">
								<div class="xs-vide-image" style="background-image:url(/storage/uploads/{{ $video->cover }})"></div>
								<div class="content-video">
									<h3>{{ $video->descripcion }}</h3>
								</div>
								<div class="xs-video-popup-content">
									<a href="{{ $video->url_video }}" class="xs-video-popup xs-round-btn">
										<i class="fa fa-play"></i>
									</a>
								</div>
							</div>
						</div>
					@endforeach
				</div>
			@else
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<h1 class="resp col-md-12">NO HAY VIDEOS EN EL ÁLBUM<h1>
					</div>
				</div>
			@endif
		</div>
	</div><!-- End Fotos section -->
@endsection