@extends('pagina-web.layouts.layout')

@section('title', '| Alquiler de Salones')

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

@section('servicios_alquiler_seccion')
	<!-- causes list section -->
	<section class="xs-section-padding bg-gray-2">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="xs-fature-causes-deatils-comp">
						<h3>Instalaciones y <span class="color-blue">Servicios</span></h3>
						<p>
							El CREDIA cuenta en su complejo de edificios con espacios disponibles para 
							el alquiler de oficinas, estos espacios se ofrecen con los servicios de internet,
							electricidad, vigilancia, limpieza, estacionamiento y agua potable, incorporados 
							en el precio y al estar ubicados en una zona residencial segura, de alta plusvalía, 
							a 5 minutos del centro de la ciudad y rodeados de un hermoso jardín; se convierten en 
							espacios idóneos para el trabajo y el desarrollo de actividades ejecutivas y de 
							convergencia.
						</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="xs-causes-images">
						<img src="assets/images/servicios/servicios_1.jpg" class="d-block" alt="">
					</div><!-- .xs-causes-images END -->
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section>	<!-- End causes list section -->
	
	<!-- Nuestra fundación section -->
	<section class="xs-call-to-action-section-nf parallax-window" style="background-image: url('assets/images/backgrounds/parralax_3.jpg')">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 mx-auto">
					<div class="xs-call-to-action">
						<h3>
							Nuestra fundación cuenta con oficinas comodas con diferentes capacidades para 
							que pueda realizar sus reuniones de trabajo, conferencias, oficina permanente.
						</h3>
					</div>
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
		<div class="xs-black-overlay"></div>
	</section>	<!-- Nuestra fundación section -->
	
	<!-- Salones section start -->
	<section class="section secondary-section " id="portfolio">
		<div class="container">
			<div class="row">
				<div class="title col-lg-12">
					<h1>Espacios disponibles</h1>
					<p>Nuestros oficinas son tu mejor opción ven y hazte del espacio más adecuado para tu labores.</p>
				</div>
			</div>
			
			<div class="row">
				<!-- Inicio Detalles de Salones -->
				<div class="single-margin" id="single-project">
					<div id="slidingDiv" class="toggleDiv row-fluid single-project col-md-12 col-lg-12">
						<div class="single-img col-lg-6 col-md-6" style="background-image: url('assets/images/servicios/oficina.jpg')"></div>
						<div class="single-info col-lg-6 col-md-6">
							<div class="project-description">
								<div class="project-title clearfix">
									<h3>Oficina 1</h3>
									<span class="show_hide close">
										<i class="fa fa-times"></i>
									</span>
								</div>
								<div class="project-info">
									<div>
										<span>Escritorios</span></div>
									<div>
										<span>Sillas</span></div>
									<div>
										Equipado con:</div>
								</div>
								<p>
									Servicios de internet, electricidad, vigilancia, limpieza, estacionamiento y agua potable.
								</p>
							</div>
						</div>
					</div>

					<div id="slidingDiv1" class="toggleDiv row-fluid single-project col-md-12 col-lg-12">
						<div class="single-img col-lg-6 col-md-6" style="background-image: url('assets/images/servicios/oficina.jpg')"></div>
						<div class="single-info col-lg-6 col-md-6">
							<div class="project-description">
								<div class="project-title clearfix">
									<h3>Oficina 2</h3>
									<span class="show_hide close">
										<i class="fa fa-times"></i>
									</span>
								</div>
								<div class="project-info">
									<div>
										<span>Escritorios</span></div>
									<div>
										<span>Sillas</span></div>
									<div>
										Equipado con:</div>
								</div>
								<p>
									Servicios de internet, electricidad, vigilancia, limpieza, estacionamiento y agua potable.
								</p>
							</div>
						</div>
					</div>

					<div id="slidingDiv2" class="toggleDiv row-fluid single-project col-md-12 col-lg-12">
						<div class="single-img col-lg-6 col-md-6" style="background-image: url('assets/images/servicios/oficina.jpg')"></div>
						<div class="single-info col-lg-6 col-md-6">
							<div class="project-description">
								<div class="project-title clearfix">
									<h3>Oficina 3</h3>
									<span class="show_hide close">
										<i class="fa fa-times"></i>
									</span>
								</div>
								<div class="project-info">
									<div>
										<span>Escritorios</span></div>
									<div>
										<span>Sillas</span></div>
									<div>
										Equipado con:</div>
								</div>
								<p>
									Servicios de internet, electricidad, vigilancia, limpieza, estacionamiento y agua potable.
								</p>
							</div>
						</div>
					</div>

					<div id="slidingDiv3" class="toggleDiv row-fluid single-project col-md-12 col-lg-12">
						<div class="single-img col-lg-6 col-md-6" style="background-image: url('assets/images/servicios/oficina.jpg')"></div>
						<div class="single-info col-lg-6 col-md-6">
							<div class="project-description">
								<div class="project-title clearfix">
									<h3>Oficina 4</h3>
									<span class="show_hide close">
										<i class="fa fa-times"></i>
									</span>
								</div>
								<div class="project-info">
									<div>
										<span>Escritorios</span></div>
									<div>
										<span>Sillas</span></div>
									<div>
										Equipado con:</div>
								</div>
								<p>
									Servicios de internet, electricidad, vigilancia, limpieza, estacionamiento y agua potable.
								</p>
							</div>
						</div>
					</div><!-- End Detalles de Salones -->
					
					<div class="thumbnails col-md-12 col-lg-12" id="portfolio-grid">
						<div class="col-md-3 col-lg-3 mix 1">
							<div class="thumbnail">
								<img src="assets/images/servicios/oficina.jpg" alt="project 1">
								<a href="#single-project" class="more show_hide" rel="#slidingDiv">
									<i class="fa fa-plus"></i>
								</a>
								<h3>Oficina 1</h3>
								<div class="mask"></div>
							</div>
						</div>
						<div class="col-md-3 col-lg-3 mix 2">
							<div class="thumbnail">
								<img src="assets/images/servicios/oficina.jpg" alt="project 2">
								<a href="#single-project" class="show_hide more" rel="#slidingDiv1">
									<i class="fa fa-plus"></i>
								</a>
								<h3>Oficina 2</h3>
								<div class="mask"></div>
							</div>
						</div>
						<div class="col-md-3 col-lg-3 mix 3">
							<div class="thumbnail">
								<img src="assets/images/servicios/oficina.jpg" alt="project 3">
								<a href="#single-project" class="more show_hide" rel="#slidingDiv2">
									<i class="fa fa-plus"></i>
								</a>
								<h3>Oficina 3</h3>
								<div class="mask"></div>
							</div>
						</div>
						<div class="col-md-3 col-lg-3 mix 4">
							<div class="thumbnail">
								<img src="assets/images/servicios/oficina.jpg" alt="project 4">
								<a href="#single-project" class="show_hide more" rel="#slidingDiv3">
									<i class="fa fa-plus"></i>
								</a>
								<h3>Oficina 4</h3>
								<div class="mask"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- End Salones section -->
@endsection