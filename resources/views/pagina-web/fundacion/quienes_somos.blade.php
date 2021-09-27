@extends('pagina-web.layouts.layout')

@section('title', '| Quiénes Somos')

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

@section('mision_vision_qs')
	<!-- video popup section section -->
	<section class="xs-content-section-padding-conocenos">
		<div class="container">
			<div class="row">
				<div class="col-lg-11 content-center">
					<div class="xs-heading xs-mb-70 text-center">
						<h2 class="xs-mb-0 xs-title" style="text-align:center;">Somos una organización sin fines de lucro que<span class="color-green"> apoyamos</span> buenas causas y cambios positivos para la población de Honduras.</h2>
					</div>
				</div>
			</div><!-- .row end -->
			<div class="row">
				<div class="col-md-6">
					<div class="xs-about-feature-fundacion">
						<h3>Nuestra <span class="color-blue">Misión</span></h3>
						<p align="center" class="lead">Promover el desarrollo sostenible mediante la gestión del conocimiento, facilitando la toma de decisiones 
						para la planificación ordenada del territorio, impulsando la educación ambiental, el turismo sostenible, las áreas protegidas, 
						la cultura y la recreación en el Corredor Biológico del Caribe Hondureño.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="xs-about-feature-fundacion">
						<h3>Nuestra <span class="color-blue">Visión</span></h3>
						<p align="center" class="lead">Ser un centro innovador de documentación e interpretación ambiental y punto de encuentro 
						con la naturaleza que promueve la gestión del conocimiento del Corredor Biológico del Caribe Hondureño, 
						facilitando la toma de decisiones en el territorio, reconocida nacional e internacionalmente..</p>
					</div>
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section>	<!-- End video popup section section -->
@endsection

@section('widget_qs')
	<!-- funfacts section -->
	<div class="xs-funfact-section waypoint-tigger parallax-window" style="background-image: url('assets/images/backgrounds/parralax_3.jpg')">
		<div class="container waypoint-padding">
			<div class="row col-lg-10 xs-heading mx-auto">
				<h2 align="center" class="xs-title color-green-credia small">Nuestra fundación ha estado presente por más de 7 años. Hacemos lo mejor para todos.</h2>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="xs-single-funFact color-white">
						<i class="fa fa-folder-open"></i>
						<span class="number-percentage-count number-percentage" data-value="10" data-animation-duration="3500">100</span><span></span>
						<small>Proyectos</small>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="xs-single-funFact color-white">
						<i class="icon-group"></i>
						<span class="number-percentage-count number-percentage" data-value="25" data-animation-duration="3500">100</span><span></span>
						<small>Voluntarios</small>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="xs-single-funFact color-white">
						<i class="icon-children"></i>
						<span class="number-percentage-count number-percentage" data-value="10000" data-animation-duration="3500">100</span><span></span>
						<small>Niños</small>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="xs-single-funFact color-white">
						<i class="fa fa-map-marker"></i>
						<span class="number-percentage-count number-percentage" data-value="8" data-animation-duration="3500">8</span><span></span>
						<small>Municipios</small>
					</div>
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</div>	<!-- End funfacts section -->
@endsection

@section('objetivo_qs')
	<!-- objetivo section -->
	<section class="xs-section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="xs-fature-causes-deatils" style="margin-top:45px;">
						<h3>Nuestra <span class="color-blue">Estrategia</span></h3>
						<p>
							Fortalecer la gestión ambiental y el desarrollo sostenible, bajo un enfoque de gestión
							del conocimiento como línea conductora vinculada con el manejo del Agua, bosques, suelo,
							cambio climático, gestión integral del riesgo, promocionando el ecoturismo, la cultura y
							la recreación del <span>Corredor Biológico del Caribe</span>
						</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="xs-causes-images">
						<h3 class="text-center">Valores</h3>
						<img src="assets/images/causes/causes_12.jpg" class="d-block" alt="">
					</div><!-- .xs-causes-images END -->
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section>	<!-- objetivo list section -->
@endsection

@section('antecedentes_qs')	
	<!-- Antecedentes section -->
	<section class="xs-section-padding bg-gray-2">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="xs-causes-images" style="margin-top:35px;">
						<img src="assets/images/causes/causes_11.jpg" class="d-block" alt="">
					</div><!-- .xs-causes-images END -->
				</div>
				<div class="col-lg-8">
					<div class="xs-fature-causes-deatils">
						<h3> Nuestra <span class="color-blue">Fundación</span></h3>
						<p>
							Creada el 3 de Agosto del 2011, bajo el objetivo de fortalecer el acceso a la información socio ambiental de Honduras, 
							mediante la implementación de un modelo de gestión basado en el fortalecimiento de redes y promoción del análisis
							estratégico de los procesos sociales, económicos y ambientales, para la toma de decisiones participativas.
						</p>
						<h5><span class="color-blue-light-credia">Componentes</span></h5>
						<ul class="xs-unorder-list">
							<li><i class="fa fa-circle color-blue-light-credia"></i>Adaptación, Agua, Bosques y Suelos.</li>
							<li><i class="fa fa-circle color-blue-light-credia"></i>Cambio Climatico y Gestión Integral de Riesgos.</li>
							<li><i class="fa fa-circle color-blue-light-credia"></i>Interpretación y Educación Ambiental.</li>
							<li><i class="fa fa-circle color-blue-light-credia"></i>Observatorio de Desarrollo Sostenible (ODS).</li>
						</ul>
					</div>
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section>	<!-- Antecedentes section -->
@endsection