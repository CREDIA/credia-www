@extends('pagina-web.layouts.layout')

@section('title', '| Informes Anuales')

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

@section('organigrama_eo')
	<!-- popularCauses version 2 section -->
	<section class="waypoint-tigger xs-section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="resp">NO HAY PUBLICACIONES DISPONIBLES<h1>
				</div>
			</div>
		</div>
	</section><!-- End popularCauses version 2 section -->
	
	<!-- Antecedentes section -->
	<!-- <section class="xs-section-padding bg-gray-2"> -->
		<!-- <div class="container"> -->
			<!-- <div class="row"> -->
				<!-- <div class="col-lg-4"> -->
					<!-- <div class="xs-causes-images" style="margin-top:35px;"> -->
						<!-- <img src="assets/images/causes/causes_11.jpg" class="d-block" alt=""> -->
					<!-- </div> -->
				<!-- </div> -->
				<!-- <div class="col-lg-8"> -->
					<!-- <div class="xs-fature-causes-deatils"> -->
						<!-- <h3> Nuestra <span class="color-green">fundación</span></h3> -->
						<!-- <p> -->
							<!-- Creada el 31 de Octubre 2011, bajo el objetivo de fortalecer el acceso a la información socio ambiental de Honduras,  -->
							<!-- mediante la implementación de un modelo de gestión basado en el fortalecimiento de redes y promoción del análisis -->
							<!-- estratégico de los procesos sociales, económicos y ambientales, para la toma de decisiones participativas. -->
						<!-- </p> -->
						<!-- <h5><span class="color-green">Componentes</span></h5> -->
						<!-- <ul class="xs-unorder-list"> -->
							<!-- <li><i class="fa fa-circle color-light-green"></i>Adaptación, Agua, Bosques y Suelos.</li> -->
							<!-- <li><i class="fa fa-circle color-light-green"></i>Cambio Climatico y Gestión Integral de Riesgos.</li> -->
							<!-- <li><i class="fa fa-circle color-light-green"></i>Interpretación y Educación Ambiental.</li> -->
							<!-- <li><i class="fa fa-circle color-light-green"></i>Observatorio de Desarrollo Sostenible (ODS).</li> -->
						<!-- </ul> -->
					<!-- </div> -->
				<!-- </div> -->
			<!-- </div> -->
		<!-- </div> -->
	<!-- </section> -->
	<!-- Antecedentes section -->
@endsection