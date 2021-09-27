@extends('pagina-web.layouts.layout')

@section('title', '| Actividades')

<?php
	$pagination_range = 2;
?>

@section('banner')
	<section class="xs-banner-inner-section parallax-window" style="background-image:url(/storage/uploads/{{ $foto }})">
	<div class="xs-black-overlay"></div>
	<div class="container">
		<div class="color-white xs-inner-banner-content">
			<h2>{{ $titulo }}</h2>
			<p>{{ $contenido }}</p>
		</div>
	</div>
</section>
@endsection

@section('actividades_seccion')
	<!-- box links section -->
	<section class="xs-what-we-do-box">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-4 xs-box-service">
					<a href="{{ URL::route('cendoc') }}">
						<div class="xs-service-promo-p box-color bg-light-c-green zoom-in">
							<div class="xs-service-promo-img zoom-in" style="background-image: url('assets/images/actividades/cendoc_w.png')"></div>
							<h5>Centro de Documentación<br><small></small></h5>
						</div>
					</a>
				</div>
				<div class="col-md-6 col-lg-4 xs-box-service">
					<a href="{{ URL::route('edu_ambiental') }}">
						<div class="xs-service-promo-p box-color bg-light-c-green zoom-in">
							<div class="xs-service-promo-img zoom-in" style="background-image: url('assets/images/actividades/educacion_w.png')"></div>
							<h5>Educación Ambiental<br><small></small></h5>
						</div>
					</a>
				</div>
				<div class="col-md-6 col-lg-4 xs-box-service">
					<a href="{{ URL::route('observatorio') }}">
						<div class="xs-service-promo-p box-color bg-light-c-green zoom-in">
							<div class="xs-service-promo-img zoom-in" style="background-image: url('assets/images/actividades/observatorio_w.png')"></div>
							<h5>Observatorio de Desarrollo Sostenible<br><small></small></h5>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section><!-- End box links section -->

	<section class="waypoint-tigger xs-section-padding xs-content-section-padding-actividad">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-6">
					<div class="xs-archive-content">
						<div class="xs-heading">
							<h2 class="xs-line-title">Centro de Documentación</h2>
							<h3 class="xs-title big" data-title="CENDOC">CENDOC</h3>
						</div>
						<p>
							Forma parte del modelo de gestión de conocimiento del Centro 
							Regional de Documentación e Interpretación Ambiental (CREDIA), como plataforma dinámica e integradora
							para la gestión y administración de información.
						</p>
						<h5>El Centro de Documentación se encarga:</h5>
						
						<ul class="xs-unorder-list xs-li arrow">
							<li>Captura, recopilación y difusión de información documental referente al desarrollo sostenible.</li>
							<li>Gestión y administración de información socioambiental .</li>
							<li>Utilización de sistemas de información libre que permite la divulgación de documentos generados.</li>
						</ul>
						<div class="xs-btn-wraper">
							<a href="{{ URL::route('cendoc') }}" class="btn btn-primary btn-actividad">Ver componente</a>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-lg-6 row xs-archive-image">
					<div class="col-md-6 col-sm-6">
						<img src="assets/images/componentes/cendoc/img-2.jpg" alt="" class="rounded" style="height:169.06px;">
					</div>
					<div class="col-md-6 col-sm-6">
						<img src="assets/images/componentes/cendoc/img-3.jpg" alt="" class="rounded">
					</div>
					<div class="col-md-12 xs-mb-30">
						<img src="assets/images/componentes/cendoc/img-1.jpg" alt="" class="rounded">
					</div>
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section><!-- end Actividades cendoc section -->
	
	<!-- Educación ambiental section -->
	<section class="xs-content-section-padding-actividad xs-service-promo-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-5">
					<div class="col-md-12 xs-mb-20 mt-2 xs-edu-img" >
						<!-- <img src="assets/images/componentes/educacion/img-1.jpg" alt="" class="rounded" style="width:415px;"> -->
					</div>
					<div class="xs-archive-content mt-2 xs-educacion-pad">
						<h3 class="xs-title-educacion">Educación Ambiental</h3>
						<p>
							El componente de Educación Ambiental de CREDIA tiene definidas dos áreas de trabajo. Primero, la sensibilización
							ambiental mediante campañas, visitas y actividades educativas en el jardín e instalaciones. Y segundo, la oferta
							de cursos y talleres que se imparten a los diferentes públicos, en temas tales como biodiversidad, cambio
							climático, consumo responsable, entre otros.
						</p>
						<div class="xs-btn-wraper">
							<a href="{{ URL::route('edu_ambiental') }}" class="btn btn-primary btn-actividad">Ver componente</a>
						</div>
						<div class="xs-btn-wraper">
							<a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=cenaida_moncada@yahoo.com" target="_blank" class="btn btn-primary btn-actividad">Obtén información</a>
						</div>
					</div>
				</div>
				<div class="col-lg-7 col-md-12 row xs-margin" id="xs-mar">
					@foreach($actividades as $actividad)
						<div class="col-lg-6 col-md-6" style="padding: 0px 0px 25px 10px;">
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
									<a class="page-link" href="{{ $actividades->nextPageUrl() ?? '#' }}" aria-label="Next">
										<i class="fa fa-angle-right"></i>
									</a>
								</li>
							</ul>
						</div><!-- End pagination -->
					@endif
				</div>
			</div>
		</div>
	</section><!-- end Educación ambiental section -->
	
	<!-- Observatorio section -->
	<section class="waypoint-tigger xs-section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-6">
					<div class="xs-archive-content">
						<div class="xs-heading">
							<h3 class="xs-title big-o" data-title="Observatorio">Observatorio de Desarrollo Sostenible</h3>
						</div>
						<p>
							Es responsable de desempeñar las funciones medulares para las cuales fue concebido el CREDIA. En este sentido, 
							el ODS es considerado una dependencia del CREDIA que monitorea e incide en el proceso de desarrollo sostenible, 
							mediante la generación y difusión de información.
						</p>
						<h5>Las funciones identificadas para el ODS:</h5>
						
						<ul class="xs-unorder-list arrow">
							<li>Apoyar la integración de los datos provenientes del sistema de monitoreo biológico de las áreas protegidas.</li>
							<li>Desarrollo de capacidades de conocimiento.</li>
							<li>Información sobre los procesos de sostenibilidad.</li>
							<li>Promover y divulgar resultados de la investigación científica.</li>
						</ul>
						<div class="xs-btn-wraper">
							<a href="{{ URL::route('observatorio') }}" class="btn btn-primary btn-actividad">Ver componente</a>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-lg-6 row xs-archive-image">
					<div class="col-md-12 xs-mb-30">
						<img src="assets/images/componentes/observatorio/img-1.jpg" alt="" class="rounded" style="height:250px;">
					</div>
					<div class="col-md-12 xs-mb-30">
						<img src="assets/images/componentes/observatorio/img-2.jpg" alt="" class="rounded" style="height:250px; width:100%;">
					</div>
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section><!-- end Observatorio section -->
@endsection