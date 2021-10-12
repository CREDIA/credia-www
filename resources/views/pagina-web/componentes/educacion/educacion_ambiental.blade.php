@extends('pagina-web.layouts.layout')

@section('title', '| Educación Ambiental')

<?php
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

@section('educacion_section')
	<!-- educación ambiental section -->
	<section class="xs-section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="xs-fature-causes-deatils-comp">
						<div class="xs-heading" style="margin-bottom: 20px;">
							<h3 class="xs-title big-o" data-title="Educación">Educación Ambiental</h3>
						</div>
						<p>
							La educación ambiental es una de las principales líneas de trabajo del CREDIA. Una de las causas 
							de los desequilibrios y amenazas que actualmente existen en las diferentes partes del mundo, 
							incluida la costa norte de Honduras, tiene que ver con nuestra cultura y forma de vida. Los 
							ecosistemas educativos actuales se encuentran en crisis y es de vital importancia incidir en 
							ellos desde una perspectiva de sostenibilidad.
						</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="xs-causes-images" style="margin-top:50px;">
						<img src="assets/images/componentes/educacion/educacion_1.jpg" class="d-block" alt="">
					</div>
				</div>
			</div>
			<div class="row" style="margin-top:40px;">
				<div class="col-lg-4">
					<div class="xs-causes-images" style="margin-top:0px;">
						<img src="assets/images/componentes/educacion/niña.jpg" class="d-block" alt="">
					</div>
				</div>
				<div class="col-lg-8">
					<div class="xs-fature-causes-deatils-comp">
						<p style="margin-top:12.5px;">
							Las acciones de educación ambiental que se están realizando desde el CREDIA, procuran mejorar la 
							percepción de la población del CBCH hacia el uso sostenible de los recursos naturales, minimizando
							la fragmentación y perdida de los ecosistemas y ofreciendo algunas alternativas y cambios de 
							comportamiento que sean ambientalmente más respetuosos y viables que procuren la mejora de la 
							calidad de vida de las comunidades, mediante la participación social activa como motores  de cambio
							para su propio desarrollo. Este tema considera que cada persona es un agente multiplicador de 
							conocimiento. 
						</p>
					</div>
				</div>
			</div>
		</div>
	</section><!-- End educación ambiental section -->
	
	<!-- educación section -->
	<section class="waypoint-tigger xs-section-padding bg-gray">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-6">
					<div class="xs-archive-content">
						<p style="font-size: 1.2em;">
							El Programa de Educación Ambiental de CREDIA tiene definidas dos áreas de trabajo. Primero, la
							sensibilización ambiental mediante campañas, visitas y actividades educativas en el jardín e 
							instalaciones. Y segundo, la oferta de cursos y tallares que se imparten a los diferentes públicos
							en temas tales como biodiversidad, cambio climático, consumo responsable, entre otros.
						</p>
						<p style="font-size: 1.2em;">
							Con este programa de educación ambiental se quiere incidir en los diferentes sectores de la 
							población, desde niños hasta adultos para que se comportamiento sea más respetuoso y armonioso 
							con el entorno natural y al mismo tiempo, las personas adquieran competencias suficientes para 
							poder modificar las estructuras y comportamientos insostenibles que yacen en nuestro día a día.
						</p>
					</div>
				</div>
				<div class="col-md-12 col-lg-6 row xs-archive-image">
					<div class="col-md-12 xs-mb-30">
						<img src="assets/images/componentes/educacion/img-detalle.jpg" alt="" class="rounded">
					</div>
				</div>
			</div>
		</div>
	</section><!-- end educación section -->
	
	<!-- titulo actividades section -->
	<section class="parallax-window xs-content-section-padding" style="background-image: url('assets/images/backgrounds/parralax_3.jpg')">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="xs-service-slider-content">
						<h2 class="xs-title-underline">Actividades</h2>
						<div class="xs-service-grow row">
							<div class="col-md-12">
								<p class="float-left">
									El componente de Educación Ambiental tiene definidas dos áreas de trabajo. Primero, la sensibilización
									ambiental mediante campañas, visitas y actividades educativas en el jardín e instalaciones. Y segundo, la oferta
									de cursos y talleres que se imparten a los diferentes públicos.
								</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<ul class="xs-unorder-list-ed check">
									<li>Charlas y Talleres</li>
									<li>Detectives de aves</li>
									<li>Cine de proyecciones ambientales</li>
								</ul>
							</div>
							<div class="col-md-6">
								<ul class="xs-unorder-list-ed check">
									<li>Gimkhana</li>
									<li>Observación de aves</li>
									<li>Recorridos por el Sendero</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="xs-single-item-slider owl-carousel">
						<div class="xs-single-slider-item">
							<img src="assets/images/componentes/educacion/act-img-1.jpg" alt="">
						</div>
						<div class="xs-single-slider-item">
							<img src="assets/images/componentes/educacion/act-img-2.jpg" alt="">
						</div>
						<div class="xs-single-slider-item">
							<img src="assets/images/componentes/educacion/act-img-3.jpg" alt="">
						</div>
						<div class="xs-single-slider-item">
							<img src="assets/images/componentes/educacion/act-img-4.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end titulo actividades section -->
	
	@if(count($actividades) > 0)
		<!-- Actividades Educación ambiental section -->
		<section class="xs-content-section-padding xs-service-promo-section">
			<div class="container">
				<div class="xs-heading row xs-mb-60">
					<div class="col-lg-12 col-md-12">
						<h2 class="xs-line-title">Nuestras</h2>
						<h3 class="xs-title big">Actividades</h3>
					</div>
				</div>
				<div class="row" style="margin:60px 0;">
					@foreach($actividades as $actividad)
						<div class="plan col-lg-4 col-md-6">
							<div class="plan-inner text-right">
								<div class="entry-banner" style="background-image: url(/storage/uploads/{{ $actividad->foto }});"></div>
								<div class="entry-title-act">
									@if(empty($actividad->icono) === FALSE)
										<div class="price" style="background-image: url(/storage/uploads/{{ $actividad->icono }});"></div>
									@else
										<div class="price" style="background-image: url('assets/images/actividades/actividad_general.png');"></div>
									@endif
								</div>
								<div class="entry-content-act">
									<h3>{{ $actividad->titulo }}</h3>
									<p style="font-weight:400;">{{ $actividad->descripcion }}</p>
								</div>
								<div class="div-btn">
									<a class="btn btn-secondary btn-color-alt" href="{{URL::route('actividadetalle',['slug' => str_slug($actividad->titulo,'-'),'id' => $actividad->id])}}">
										Saber más
									</a>
								</div>
							</div>
						</div>
					@endforeach
				</div>
				<div class="row">
					<div class="col-md-12 col-lg-12 row xs-margin" id="xs-mar">
						@if($actividades->count()  > 0)
							<!-- pagination -->
							<div class="col-md-12">
								<ul class="pagination justify-content-center xs-pagination" style="padding-top:0px;">
									<li class="page-item {{ $actividades->previousPageUrl() == null ? 'disabled' : '' }}">
										<a class="page-link" href="{{ $actividades->previousPageUrl() ?? '#' }}" aria-label="Previous">
											<i class="fa fa-angle-left"></i>
										</a>
									</li>
									@if ($actividades->currentPage() > 1+$pagination_range )
										<li class="page-item">
											<a class="page-link" href="{{ $actividades->url(1) ?? '#' }}">{{ 1 }}</a>
										</li>

										@if ($actividades->currentPage() > 1+$pagination_range+1 )
											<li class="page-item disabled">
												<span class="page-link">&hellip;</span>
											</li>
										@endif
									@endif
									@for ($i=-$pagination_range; $i<=$pagination_range; $i++)
										@if ($actividades->currentPage()+$i > 0 && $actividades->currentPage()+$i <= $actividades->lastPage())
											<li class="page-item">
												<a class="page-link {{ $i==0 ? 'active' : '' }}" href="{{ $actividades->url($actividades->currentPage()+$i) }}">{{ $actividades->currentPage()+$i }}</a>
											</li>
										@endif
									@endfor
									@if ($actividades->currentPage() < $actividades->lastPage()-$pagination_range )	
										@if ($actividades->currentPage() < $actividades->lastPage()-$pagination_range-1 )
											<li class="page-item disabled">
												<span class="page-link">&hellip;</span>
											</li>
										@endif
										<li class="page-item">
											<a class="page-link" href="{{ $actividades->url($actividades->lastPage()) ?? '#' }}">{{ $actividades->lastPage() }}</a>
										</li>
									@endif
									<li class="page-item {{ $actividades->nextPageUrl()==null ? 'disabled' : '' }}">
										<a class="page-link " href="{{ $actividades->nextPageUrl() ?? '#' }}" aria-label="Next">
											<i class="fa fa-angle-right"></i>
										</a>
									</li>
								</ul>
							</div><!-- End pagination -->
						@endif
					</div>
				</div>
			</div>
		</section><!-- End Actividades Educación ambiental section -->
	@endif
	
	<!-- service slider section -->
	<section class="xs-funfact-section-v2 waypoint-tigger" style="background-image: url('assets/images/map_green.png')">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="xs-single-funFact funFact-v2">
						<span class="number-percentage-count number-percentage" data-value="31" data-animation-duration="3500">0</span><span></span>
						<small>Escuelas</small>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="xs-single-funFact funFact-v2">
						<span class="number-percentage-count number-percentage" data-value="25" data-animation-duration="3500">0</span><span></span>
						<small>Institutos</small>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="xs-single-funFact funFact-v2">
						<span class="number-percentage-count number-percentage" data-value="8" data-animation-duration="3500">0</span><span></span>
						<small>Universidades</small>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="xs-single-funFact funFact-v2">
						<span class="number-percentage-count number-percentage" data-value="18424" data-animation-duration="3500">0</span><span></span>
						<small>Visitantes</small>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end service slider section -->
	
	@push('scripts')
		<script>
			var slideIndex = 1;
			var slideIndexv = 1;
			
			showDivs(slideIndex);
			showDivsv(slideIndexv);

			function plusDivs(n) {
			  showDivs(slideIndex += n);
			}
			
			function plusDivsv(n) {
			  showDivsv(slideIndexv += n);
			}  

			function showDivs(n) {
			  var i;
			  var x = document.getElementsByClassName("mySlides");
			  if (n > x.length) {slideIndex = 1}
			  if (n < 1) {slideIndex = x.length}
			  for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";  
			  }
			  x[slideIndex-1].style.display = "block";  
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
	
	<!-- Multimedia ambiental section -->
	<section class="xs-content-section-padding xs-service-promo-section">
		<div class="container">
			<div class="xs-heading row xs-mb-60">
				<div class="col-lg-12 col-md-12">
					<h2 class="xs-line-title">Nuestra</h2>
					<h3 class="xs-title big">Multimedia</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-12">
					<div class="slide-foto-info">
						<h3>Fotografías</h3>
					</div>
					<div class="slide-foto">
						@if(count($fotos) > 0)
							@foreach($fotos as $foto)
								<div class="mySlides" style="background-image: url(/storage/uploads/{{$foto->fotos}})"></div>
							@endforeach
						@else
							<div class="mySlides" style="background-image: url('/assets/images/componentes/no_foto.jpg')"></div>
						@endif
						<button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
						<button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
					</div>
				</div>
				<div class="col-lg-4 col-md-12">
					<div class="slide-foto-info">
						<h3>Videos</h3>
					</div>
					<div class="slide-foto">
						@if(count($videos) > 0)
							@foreach($videos as $video)
								<div class="mySlidesv">
									<div class="xs-video-popup-wraper-c">
										<div class="xs-vide-image-c" style="background-image:url(/storage/uploads/{{ $video->cover }})"></div>
										<div class="xs-video-popup-content-c">
											<a href="{{ $video->url_video }}" class="xs-video-popup xs-round-btn">
												<i class="fa fa-play"></i>
											</a>
										</div>
									</div>
								</div>
							@endforeach
						@else
							<div class="mySlidesv" style="background-image: url('/assets/images/componentes/no_video.jpg');background-repeat: no-repeat;background-size: cover;background-position: 50% 50%;height: 275px;"></div>
						@endif
						<button class="w3-button w3-black w3-display-left" onclick="plusDivsv(-1)">&#10094;</button>
						<button class="w3-button w3-black w3-display-right" onclick="plusDivsv(1)">&#10095;</button>
					</div>
				</div>
				<div class="col-lg-4 col-md-12">
					<div class="text-center">
						<div class="datagrid">
							<table id="table-id">
								<thead>
									<tr>
										<th>Documentos</th>
										<th>Descarga</th>
									</tr>
								</thead>
								<tbody>
								@foreach($archivos as $archivo)
									@foreach($archivo->archivos as $file)
										<tr>
											<td>{{ $archivo->nombre }}</td>
											<td>
												<div>								
													<ul>
														<li><a href="{{$file}}" download="archivo-0" class="btn-des btn-descarga"><span>Descargar</span></a></li>
													</ul>														
												</div>
											</td>
										</tr>
									@endforeach
								@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- End Multimedia ambiental section -->
@endsection