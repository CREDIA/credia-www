@extends('pagina-web.layouts.layout')

@section('title', '| Alquiler de Salones')

@section('banner')
	<section class="xs-banner-inner-section parallax-window" style="background-image:url({{$foto}})">
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
					<div class="xs-fature-causes-deatils">
						<h3>Instalaciones y <span class="color-green">servicios</span></h3>
						<p>
							La Fundación CREDIA ofrece espacios disponibles para el desarrollo de eventos técnicos y sociales. Bajo este propósito 
							el CREDIA pone a la disposición el servicio de cuatro salas de conferencia, debidamente 
							equipadas para el desarrollo de dichas actividades.
						</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="xs-causes-images">
						<img src="assets/images/servicios/servicios_1.jpg" class="d-block" alt="">
					</div><!-- .xs-causes-images END -->
				</div>
			</div><!-- .row end -->
			<div class="row" style="margin-top:90px;">
				<div class="col-lg-4">
					<div class="xs-causes-images">
						<img src="assets/images/servicios/servicios_2.jpg" class="d-block" alt="">
					</div><!-- .xs-causes-images END -->
				</div>
				<div class="col-lg-8">
					<div class="xs-fature-causes-deatils">
						<!-- <h3> Worldwide, <span class="color-green">20 million childrens</span> have lost both parents and live in orphanages or on the street. </h3> -->
						<p style="margin-top:0px;">
							El CREDIA a través de su modelo innovador de gestión del conocimiento, el cual busca la 
							formación para la sostenibilidad, cultura y recreación, se conforma por una serie de 
							servicios a ofertar a la población y  visitantes: actividades de formación interactivas 
							y multimediales; técnicas y logísticas; exposiciones; encuentros sociales y culturales 
							que permiten dar a conocer la variedad exquisita de expresiones artísticas existentes, 
							así como formar a los niños y jóvenes en materia de educación ambiental. En apoyo a estas 
							actividades se cuenta con el Jardín CREDIA, en el cual se está en proceso de instalar 
							diferentes atractivos al aire libre que serán del deleite para familias, niños, jóvenes 
							y visitantes.
						</p>
					</div>
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section>	<!-- End causes list section -->
	
	<!-- Nuestra fundación section -->
	<section class="xs-call-to-action-section-nf" style="background-color: #011b58;">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 mx-auto">
					<div class="xs-call-to-action">
						<h3>
							Nuestra fundación cuenta con cuatro salones amplios con diferentes capacidades para 
							que pueda realizar sus reuniones de trabajo, bodas, cumpleaños o alguna otra 
							actividad o celebración en particular.
						</h3>
					</div>
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
		<div class="xs-black-overlay"></div>
	</section>	<!-- Nuestra fundación section -->
	
	<!-- Portfolio section start -->
	<section class="section secondary-section " id="portfolio">
		<div class="container">
			<div class="row">
				<div class="title col-lg-12">
					<h1>Espacios disponibles</h1>
					<p>Nuestros salones son tu mejor opción ven y escoge el más adecuado para tu evento o celebración.</p>
				</div>
				<!-- Start details for portfolio -->
				<div class="single-margin" id="single-project">
					<div id="slidingDiv" class="toggleDiv row-fluid single-project col-lg-12">
						<div class="span6">
							<img src="assets/images/servicios/servicios_1.jpg" alt="project 1" />
						</div>
						<div class="span6">
							<div class="project-description">
								<div class="project-title clearfix">
									<h3>Salón Atlántida</h3>
									<span class="show_hide close">
										<i class="fa fa-times"></i>
									</span>
								</div>
								<div class="project-info">
									<div>
										<span>Capacidad de personas:</span>30 - 40</div>
									<div>
										<span>Cantidad de sillas:</span>40</div>
									<div>
										<span>Cantidad de mesas:</span>8</div>
									<div>
										Equipado con:</div>
								</div>
								<p>
									Equipadas con: Audio, proyector, micrófonos mobiliario cómodo, mesas rectángulas
									o circulares, iluminación difuminada y aire acondicionado.
								</p>
							</div>
						</div>
					</div>

					<div id="slidingDiv1" class="toggleDiv row-fluid single-project col-lg-12">
						<div class="span6">
							<img src="assets/images/servicios/servicios_1.jpg" alt="project 2">
						</div>
						<div class="span6">
							<div class="project-description">
								<div class="project-title clearfix">
									<h3>Salón España</h3>
									<span class="show_hide close">
										<i class="fa fa-times"></i>
									</span>
								</div>
								<div class="project-info">
									<div>
										<span>Capacidad de personas:</span>60 - 80</div>
									<div>
										<span>Cantidad de sillas:</span>80</div>
									<div>
										<span>Cantidad de mesas:</span>12</div>
									<div>
										Equipado con:</div>
								</div>
								<p>
									Equipadas con: Audio, proyector, micrófonos mobiliario cómodo, mesas rectángulas
									o circulares, iluminación difuminada y aire acondicionado.
								</p>
							</div>
						</div>
					</div>

					<div id="slidingDiv2" class="toggleDiv row-fluid single-project col-lg-12">
						<div class="span6">
							<img src="assets/images/servicios/servicios_1.jpg" alt="project 3">
						</div>
						<div class="span6">
							<div class="project-description">
								<div class="project-title clearfix">
									<h3>Salón Holanda</h3>
									<span class="show_hide close">
										<i class="fa fa-times"></i>
									</span>
								</div>
								<div class="project-info">
									<div>
										<span>Capacidad de personas:</span>100 - 120</div>
									<div>
										<span>Cantidad de sillas:</span>130</div>
									<div>
										<span>Cantidad de mesas:</span>18</div>
									<div>
										Equipado con:</div>
								</div>
								<p>
									Equipadas con: Audio, proyector, micrófonos mobiliario cómodo, mesas rectángulas
									o circulares, iluminación difuminada y aire acondicionado.
								</p>
							</div>
						</div>
					</div>

					<div id="slidingDiv3" class="toggleDiv row-fluid single-project col-lg-12">
						<div class="span6">
							<img src="assets/images/servicios/servicios_1.jpg" alt="project 4">
						</div>
						<div class="span6">
							<div class="project-description">
								<div class="project-title clearfix">
									<h3>Salón La Ceiba</h3>
									<span class="show_hide close">
										<i class="fa fa-times"></i>
									</span>
								</div>
								<div class="project-info">
									<div>
										<span>Capacidad de personas:</span>25 - 30</div>
									<div>
										<span>Cantidad de sillas:</span>35</div>
									<div>
										<span>Cantidad de mesas:</span>6</div>
									<div>
										Equipado con:</div>
								</div>
								<p>
									Audio, proyector, micrófonos mobiliario cómodo, mesas rectángulas
									o circulares, iluminación difuminada y aire acondicionado.
								</p>
							</div>
						</div>
					</div>
					<!-- End details for portfolio -->
					
					<div class="col-lg-12" style="padding:0;margin:0;">
						<ul id="portfolio-grid" class="thumbnails">
							<li class="span4 mix 1">
								<div class="thumbnail">
									<img src="assets/images/servicios/servicios_1.jpg" alt="project 1">
									<a href="#single-project" class="more show_hide" rel="#slidingDiv">
										<i class="fa fa-plus"></i>
									</a>
									<h3>Salón Atlántida</h3>
									<!-- <p>Thumbnail caption...</p> -->
									<div class="mask"></div>
								</div>
							</li>
							<li class="span4 mix 2">
								<div class="thumbnail">
									<img src="assets/images/servicios/servicios_1.jpg" alt="project 2">
									<a href="#single-project" class="show_hide more" rel="#slidingDiv1">
										<i class="fa fa-plus"></i>
									</a>
									<h3>Salón España</h3>
									<!-- <p>Thumbnail caption...</p> -->
									<div class="mask"></div>
								</div>
							</li>
							<li class="span4 mix 3">
								<div class="thumbnail">
									<img src="assets/images/servicios/servicios_1.jpg" alt="project 3">
									<a href="#single-project" class="more show_hide" rel="#slidingDiv2">
										<i class="fa fa-plus"></i>
									</a>
									<h3>Salón Holanda</h3>
									<!-- <p>Thumbnail caption...</p> -->
									<div class="mask"></div>
								</div>
							</li>
							<li class="span4 mix 4">
								<div class="thumbnail">
									<img src="assets/images/servicios/servicios_1.jpg" alt="project 4">
									<a href="#single-project" class="show_hide more" rel="#slidingDiv3">
										<i class="fa fa-plus"></i>
									</a>
									<h3>Salón La Ceiba</h3>
									<!-- <p>Thumbnail caption...</p> -->
									<div class="mask"></div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Portfolio section end -->
	
	<section class="datos-reservacion">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="column col-lg-4">
						<div class="list_item lists_1">
							<div class="list_left list_image">
								<img src="https://aftegucigalpa.hn/wp-content/uploads/2018/05/iconos-02.png" class="scale-with-grid" alt="iconos-02" width="64" height="61"/>
							</div>
							<div class="list_right">
								<h4>Restaurante</h4>
								<div class="desc">Contamos con un restaurante donde se ofrece un amplio menú de alimentos y bebidas.</div>
							</div>
						</div>
					</div>
					
					<div class="column col-lg-4">
						<div class="list_item lists_1">
							<div class="list_left list_image">
								<img src="https://aftegucigalpa.hn/wp-content/uploads/2018/05/iconos-04-1.png" class="scale-with-grid" alt="iconos-04" width="64" height="61"/>
							</div>
							<div class="list_right">
								<h4>Reservación</h4>
								<div class="desc">
									<i class="fa fa-check color-light-green"></i>Debe ser con anticipación</br>
									<i class="fa fa-check color-light-green"></i>Anticipo de pago previo</br>
									<i class="fa fa-check color-light-green"></i>Pago  presencial o por transferencia bancaria
								</div>
							</div>
						</div>
					</div>
					<div class="column col-lg-4">
						<div class="list_item lists_1">
							<div class="list_left list_image">
								<img src="https://aftegucigalpa.hn/wp-content/uploads/2018/05/iconos-03.png" class="scale-with-grid" alt="iconos-03" width="64" height="61"/>
							</div>
							<div class="list_right">
								<h4>Cortesía</h4>
								<div class="desc">
									<i class="fa fa-check color-light-green"></i>100 sillas </br>    
									<i class="fa fa-check color-light-green"></i>14 mesas  </br>                                                              
									<i class="fa fa-check color-light-green"></i>Equipo Audiovisual</br>                                               
									<i class="fa fa-check color-light-green"></i>Amplio Estacionamiento </br>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection