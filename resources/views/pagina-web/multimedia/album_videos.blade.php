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
					<a href="{{ URL::route('multimedia') }}#contenido" class="btn btn-outline-primary"><i class="fa fa-reply"> │ </i>
						MULTIMEDIA
					</a>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('album_seccion')
	
	<!-- Album section -->
	<div class="xs-content-section-padding" id="contenido">
		<div class="container">
			<div class="row text-center text-lg-left">
				@if(count($albums) === 0)
					<div class="col-lg-12">
						<h1 class="resp">NO HAY PUBLICACIONES DISPONIBLES<h1>
					</div>
				@endif
				@foreach($albums as $album)
					<div class="col-lg-3 col-md-4 col-xs-6">
						<div class="zoom-in">
							<a href="{{URL::route('video',['id' => $album->id])}}" class="d-block">
								<div class="img-fluid img-thumbnail" style="background-image:url(/storage/uploads/{{$album->cover}})"></div>
							</a>
							<div class="titulo-album text-center">
								<p>{{$album->nombre}}</p>
							</div>						
						</div>						
					</div>
				@endforeach
			</div>
		</div>
	</div><!-- End Album section -->
	
	<!-- Modal -->
	<div class="modal" id="modal-terms">
		<div class="content-modal">
			<div class="content-header">
				<h5><i class="fa fa-exclamation-triangle"></i> Advertencia legal</h5>
				<button type="button" class="cerrar-modal">&times;</button>
			</div>
			<div class="content-body">
				<div class="well">
					La producción de los vídeos que conforman la presente videoteca del CREDIA, 
					fue gracias al financiamiento de EuroFor, a través del Programa Clifor mediante la Subvención 
					directa al Centro Regional de Documentación e Interpretación Ambiental, CREDIA. Reservados 
					todos los derechos de los vídeos de esta videoteca  para la Fundación CREDIA. Queda 
					rigurosamente prohibida la reproducción total o parcial de cualquiera de estos vídeos 
					por cualquier medio o procedimiento impreso y digital, sin la debida autorización escrita, 
					bajo las sanciones establecidas en las leyes.
				</div>
			</div>
			<div class="content-footer d-flex">
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" id="checked-0" value="acepto">
					<label class="custom-control-label" for="checked-0">Acepto los terminos.</label>
				</div>			
				<button type="button" class="btn btn-primary ml-auto" id="btn-aceptar">Aceptar</button>
			</div>
		</div>
	</div><!-- End Modal -->
@endsection

@push('scripts')
	<script>
		$(document).ready(function(){
			
			$('.custom-control-input').change(function(){
				if ($(this).is(':checked')){
					$('#btn-aceptar').css('display','block');
				}else{
					$('#btn-aceptar').css('display','none');
				}
			});
			
			if(Cookies.get('advertencia-v') != 'v-acepto'){
				$('html, body').css({'overflow':'hidden','height':'auto'});
				$('div#modal-terms').css('display','block');
			}
			
			$('.content-header button.cerrar-modal').mousedown(function(){
				$('html, body').css({'overflow':'auto','height':'auto'});
				$('div#modal-terms').css('display','none');
			});
			
			$('.content-footer button#btn-aceptar').mousedown(function(){
				Cookies.set('advertencia-v', 'v-acepto', { expires: 7 });
				$('html, body').css({'overflow':'auto','height':'auto'});
				$('div#modal-terms').css('display','none');
			});
		});
	</script>
@endpush