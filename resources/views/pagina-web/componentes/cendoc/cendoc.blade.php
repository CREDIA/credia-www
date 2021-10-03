@extends('pagina-web.layouts.layout')

@section('title', '| CENDOC')

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

@section('cendoc_section')
	<!-- cendoc section -->
	<section class="xs-section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="xs-fature-causes-deatils-comp">
						<h3>El Centro de Documentación</h3>
						<p>
							Forma parte del modelo de gestión de conocimiento del Centro Regional de Documentación 
							e Interpretación Ambiental (CREDIA), como plataforma dinámica e integradora para la gestión y
							administración de información socioambiental de Honduras.
						</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="xs-causes-images">
						<img src="assets/images/componentes/cendoc/cendoc_1.jpg" class="d-block" alt="">
					</div>
				</div>
			</div>
			<div class="row" style="margin-top:40px;">
				<div class="col-lg-4">
					<div class="xs-causes-images" style="margin-top:30px;">
						<img src="assets/images/componentes/cendoc/cendoc_2.jpg" class="d-block" alt="">
					</div>
				</div>
				<div class="col-lg-8">
					<div class="xs-fature-causes-deatils-comp">
						<p style="margin-top:0px;">
							Constituye la base operativa del modelo, en la cual se integran una gama de socios estratégicos que ejercen
							acción sobre los elementos biológicos y socioambientales, como hacedores directos en la generación y 
							retroalimentan de la información, la cual es publicada oficialmente a través del Observatorio de Desarrollo 
							Sostenible, todo esto contribuyendo transversalmente a la Educación para la Sostenibilidad.
						</p>
						<p>
							Operativamente es el componente encargado de la captura, recopilación y difusión de información documental 
							referente al desarrollo sostenible de Honduras, con el propósito de contribuir a satisfacer las necesidades
							de información de tomadores de decisiones, investigadores, técnicos, administraciones, docentes, estudiantes en general.
						</p>
					</div>
				</div>
			</div>
			<div class="row" style="margin-top:40px;">
				<div class="col-lg-8">
					<div class="xs-fature-causes-deatils-comp">
						<p>
							Así mismo constituye una de las plataformas virtuales innovadoras gracias al uso de sistemas de información
							libre que permite la divulgación de documentos generados y compartidos por organizaciones vinculadas a este Centro.
						</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="xs-causes-images">
						<img src="assets/images/componentes/cendoc/cendoc_3.jpg" class="d-block" alt="">
					</div>
				</div>
			</div>
		</div>
	</section><!-- cendoc section -->
	
	<!-- objetivo cendoc section -->
	<section class="parallax-window xs-content-section-padding" style="background-image: url('assets/images/backgrounds/parralax_3.jpg')">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="xs-service-slider-content">
						<h2 class="xs-title-underline">Objetivo General</h2>
						<div class="xs-service-grow row">
							<div class="col-md-12">
								<p class="float-left text-p">
									Recopilar, digitalizar, clasificar, almacenar y difundir la información disponible sobre estudios,
									investigaciones y otros productos relacionados al estado de los recursos naturales en el marco del 
									desarrollo sostenible y la gestión del conocimiento en Honduras.
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="xs-single-item-slider owl-carousel">
						<div class="xs-single-slider-item">
							<img src="assets/images/componentes/cendoc/objetivo.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end objetivo cendoc section -->
	
	@if(count($actividades) > 0)
		<!-- Actividades CENDOC section -->
		<section class="xs-cendoc-section xs-service-promo-section">
			<div class="container">
				<div class="xs-heading row xs-mb-60">
					<div class="col-lg-12 col-md-12">
						<h2 class="xs-line-title">Nuestras</h2>
						<h3 class="xs-title big" data-title="CENDOC">Actividades</h3>
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
		</section><!-- End Actividades CENDOC section -->
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
								<div class="mySlides" style="background-image: url({{$foto->fotos}})"></div>
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
	
	<!-- Enfoque cendoc section -->
	<section class="xs-cendoc-section" style="background-image: url('assets/images/map.png');">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div>
						<div class="xs-heading xs-mb-40">
							<h2 class="xs-mb-0 xs-title text-center">Beneficios</h2>
						</div>
						<ul class="xs-unorder-cendoc-list play green-icon">
							<li>Concentración y organización de los documentos que han sido generados por diferentes actores.</li>
							<li>Respaldo automático de la información, contribuyendo de esta manera a disminuir la pérdida de esta.</li>
							<li>Mayor disposición, promoción y difusión de los productos generados en el país.</li>
							<li>Software de uso libre, no presenta costos por licencia.</li>
							<li>Capacidad de intercambio institucionales.</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div>
						<div class="xs-heading xs-mb-40">
							<h2 class="xs-mb-0 xs-title text-center">Enfoque de organización</h2>
						</div>
						<p class="p-cendoc-enfoque">
							En la actualidad, la conciencia de que es necesario preservar y mantener el medio ambiente se refleja 
							prácticamente en todos los ámbitos de trabajo. La colaboración dinámica entre el estado, la cooperación
							internacional, organizaciones de sociedad civil, academia, comunidad científica, gobiernos municipales 
							y comunidades en general, están generando nuevos conocimientos y medidas concretas para solucionar 
							los problemas ambientales globales.
						</p>
					</div>
				</div>
				<div class="col-lg-12 cendoc-banner">
					<img src="assets/images/componentes/cendoc/cendoc_banner.jpg" alt="">
				</div>
			</div>
		</div>
	</section><!-- End Enfoque cendoc section -->
@endsection