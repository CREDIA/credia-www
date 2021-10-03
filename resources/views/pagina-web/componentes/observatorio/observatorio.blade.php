@extends('pagina-web.layouts.layout')

@section('title', '| Observatorio')

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

@section('observatorio_section')
	<!-- coceptualizacion observatorio section -->
	<section class="xs-section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="xs-fature-causes-deatils-comp">
						<h3>Conceptualización del ODS</h3>
						<p>
							Se sustenta en la experiencia de observatorios existentes en Iberoamérica, especificamente
							en España, México, Colombia y Argentina. La sistematización y análisis de esta experiencias
							permitió determinar que las funciones del Observatorio deben estar enfocados en la gestión 
							de información mediante el monitoreo, la investigación, la recopilación y divulgación de 
							información documental, complementado con un programa de capacitación en temas relevantes 
							para promover el desarrollo sostenible de CBCH.
						</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="xs-causes-images">
						<img src="assets/images/componentes/observatorio/observatorio_1.jpg" class="d-block" alt="">
					</div>
				</div>
			</div>
			<div class="row" style="margin-top:40px;">
				<div class="col-lg-4">
					<div class="xs-causes-images">
						<img src="assets/images/componentes/observatorio/observatorio_2.jpg" class="d-block" alt="">
					</div>
				</div>
				<div class="col-lg-8">
					<div class="xs-fature-causes-deatils-comp">
						<p style="margin-top:0px;">
							En este sentido, el ODS es considerado una dependencia del CREDIA que monitorea e incide en el proceso 
							de desarrollo sostenible, mediante la generación y difusión de información; on autonomía en su 
							funcionamiento y gestión de la información para garantizar la objetividad de los análisis realizados.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section><!-- End coceptualizacion observatorio section -->
	
	<!-- observatorio misión & visión section -->
	<section class="parallax-window xs-content-section-padding" style="background-image: url('assets/images/backgrounds/parralax_3.jpg')">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="xs-observatorio-feature">
						<h3>Misión</h3>
						<p class="lead">
							"Gestionar el conocimiento y democratizar la información referente a la sostenibilidad del desarrollo en el 
							litoral Atlántico, mediante la investigación científica, la capacitación y el establecimiento de alianzas 
							estratégicas, para fomentar una visión crítica en la sociedad civil y propiciar un cambio social hasta el 
							desarrollo sostenible".
						</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="xs-observatorio-feature">
						<h3>Visión</h3>
						<p class="lead">
							"Ser un observatorio líder en la gestión de conocimiento e información de calidad, objetiva y transparente 
							referente a la sostenibilidad del desarrollo en el litoral Atlántico, reconocido a nivel nacional e 
							internacional por su contribución al desarrollo de las comunidades locales".
						</p>
					</div>
				</div>
			</div>
		</div>
	</section><!-- End observatorio misión & visión section -->
	
	@if(count($actividades) > 0)
		<!-- Actividades OBSERVATORIO section -->
		<section class="xs-cendoc-section xs-service-promo-section">
			<div class="container">
				<div class="xs-heading row xs-mb-60">
					<div class="col-lg-12 col-md-12">
						<h2 class="xs-line-title">Nuestras</h2>
						<h3 class="xs-title big-o" data-title="Observatorio">Actividades</h3>
					</div>
				</div>
				<div class="row" style="margin:40px 0;">
					@foreach($actividades as $actividad)
						<div class="plan col-lg-4 col-md-6">
							<div class="plan-inner text-right">
								<div class="entry-banner" style="background-image: url({{ $actividad->foto }});"></div>
								<div class="entry-title-act">
									@if(empty($actividad->icono) === FALSE)
										<div class="price" style="background-image: url({{ $actividad->icono }});"></div>
									@else
										<div class="price" style="background-image: url('assets/images/actividades/actividad_general.png');"></div>
									@endif
								</div>
								<div class="entry-content-act">
									<h3>{{ $actividad->titulo }}</h3>
									<p>{{ $actividad->descripcion }}</p>
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
		</section><!-- End Actividades OBSERVATORIO section -->
	@endif
	
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
									<div class="mySlides" style="background-image: url({{ $foto->fotos }})"></div>
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
										<div class="xs-vide-image-c" style="background-image:url(/{{ $video->cover }})"></div>
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
										<th>Documento</th>
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
	
	<!-- observatorio funciones section -->
	<section class="xs-section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="xs-causes-images" style="margin-top:35px;">
						<img src="assets/images/componentes/observatorio/observatorio_3.jpg" class="d-block" alt="">
					</div>
				</div>
				<div class="col-lg-8">
					<div class="xs-fature-causes-deatils-comp">
						<h3> Áreas de trabajo del ODS</h3>
						<p>
							La investigación, Capacitación y la Comunicación y Difusión de Información, para lo cual constará de tres unidades: 
							Sistemas de Información Geográfica, Centro de Gestión Documental e Informática.
						</p>
						<h5><span class="color-blue-light-credia">Las funciones identificadas para el ODS son:</span></h5>
						<ul class="xs-unorder-list">
							<li><i class="fa fa-circle color-blue-light-credia"></i><a>Apoyar la integración de los datos provenientes del sistema de monitoreo biológico de las áreas protegidas.</a></li>
							<li><i class="fa fa-circle color-blue-light-credia"></i><a>Desarrollo de capacidades de conocimiento.</a></li>
							<li><i class="fa fa-circle color-blue-light-credia"></i><a>Información sobre los procesos de sostenibilidad.</a></li>
							<li><i class="fa fa-circle color-blue-light-credia"></i><a>Promover y divulgar resultados de la investigación científica.</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-12 cendoc-banner">
					<img src="assets/images/componentes/observatorio/observatorio_banner.jpg" alt="">
				</div>
			</div>
		</div>
	</section>	<!-- End observatorio funciones section -->
@endsection