@extends('pagina-web.layouts.layout')

@section('title', '| Estructura Organizativa')

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

@section('estructura_section')
	<!-- Organigrama section section -->
	<section class="waypoint-tigger xs-content-section-padding-actividad organigram-responsive">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12 pr-0 pl-0">
					<div class="xs-archive-content xs-asg">
						<div class="xs-heading">
							<h2 class="xs-line-title">Nuestro</h2>
							<h3 class="xs-title big-o" data-title="Organigrama">Organigrama</h3>
						</div>
						<div class="col-md-9 col-lg-9 content-center-o">
							<div class="xs-heading xs-mb-100 text-center">
								<div class="organigrama">
									<ul>
										<li class="text-center">
										  <a href="#asamblea" style="width:170px;padding-left:20px;">Asamblea General</a>
											<ul>
												<li><a href="#junta" style="width:170px;padding-left:30px;">Junta Directiva</a>
													<ul>
														<li><a href="#" onclick="return false;" style="width:170px;padding-left:20px;">Dirección Ejecutiva</a>
															<ul>
																<li id="line4"><a href="#">Administración y Finanzas</a></li>
																	<ul>
																		<li id="line5"><a href="#" onclick="return false;" style="width:198px;padding-left:20px;">Promoción y Mercadeo</a></li>
																			<ul>
																				<li id="line6" style="float:right;margin-top:-50px;">
																					<a href="{{ URL::route('cendoc') }}" target="_blank" style="width:170px;">Centro de Documentación</a>
																				</li>
																					<ul>		
																						<li><a href="#asistencia">Asistencia Técnica y Gestión de proyectos</a>
																							<ul>
																								<li>
																									<a href="{{ URL::route('observatorio') }}" target="_blank" style="width:170px;height:102px;">Observatorio de Desarrollo Sostenible</a>
																								</li>
																								<li>
																									<a href="#" onclick="return false;" style="width:170px;height:102px;">Cambio Climático y Gestión Integral de Riesgos</a>
																								</li>
																								<li>
																									<a href="{{ URL::route('edu_ambiental') }}" target="_blank" style="width:170px;height:102px;">Interpretación y Educación Ambiental</a>
																								</li>
																								<li>
																									<a href="#" onclick="return false;" style="width:170px;height:102px;">Agua, bosques y Suelos</a>
																								</li>
																							</ul>
																						</li>
																					</ul>
																			</ul>
																	</ul>
															</ul>
														</li>
													</ul>
												</li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- End Organigrama section -->

	<!-- Asamblea General section -->
	<section class="waypoint-tigger xs-section-padding xs-content-section-padding-actividad" id="asamblea">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12 pr-0 pl-0">
					<div class="xs-archive-content xs-asg">
						<div class="xs-heading">
								<h2 class="xs-line-title">Nuestra</h2>
								<h3 class="xs-title big-o" data-title="Asamblea">Asamblea General</h3>
								<p>
									El CREDIA funciona bajo la tutela de la Fundación CREDIA, organización creada con la
									finalidad de administrar el CREDIA. Está integrada por 28 entidades que conforman la 
									Asamblea General de diferente naturaleza y siendo algunos de estos miembros los integrantes
									de la Junta Directiva de la Fundación.
								</p>
						</div>
						<div class="row lista-counter">
							<div class="col-lg-4 col-md-6">
								<ol class="rounded-list-ag">
									<li><a href="">Fundación Casa de la Cultura</a></li>
									<li><a href="">Secretaría de MiAmbiente</a></li>
									<li><a href="">CURLA</a></li>
									<li><a href="">Fundación Parque Nacional Nombre de Dios</a></li>
									<li><a href="">Municipalidad de La Ceiba</a></li>                       
									<li><a href="">ICF- Instituto de Conservación Forestal</a></li>                       
									<li><a href="">CEUTEC-UNITEC</a></li>                       
									<li><a href="">Instituto Hondureño de Turismo</a></li>                       
									<li><a href="">Cámara de Comercio e Industrias de Atlántida</a></li>                       
									<li><a href="">REHDES</a></li>                       
								</ol>
							</div>
							<div class="col-lg-4 col-md-6">
								<ol class="rounded-list-ag" start ="11">
									<li><a href="">Dirección Distrital de Educación</a></li>
									<li><a href="">Delegación Presidencial de Cambio Climático</a></li>
									<li><a href="">Asociación de Instituciones de Educación Privada del Departamento de Atlántida</a></li>
									<li><a href="">INHGEOMIN</a></li>
									<li><a href="">Dirección Departamental de Educación</a></li>
									<li><a href="">Fundación Solidaridad Latinoamérica</a></li>
									<li><a href="">Fundación ANED</a></li>
									<li><a href="">CIFH</a></li>
									<li><a href="">LA RECOTURH</a></li>
									<li><a href="">Fundación un Mundo</a></li>
								</ol>
							</div>
							<div class="col-lg-4 col-md-6">
								<ol class="rounded-list-ag" start ="21">
									<li><a href="">CANATUR</a></li>
									<li><a href="">FHIA</a></li>
									<li><a href="">MAMUCA</a></li>
									<li><a href="">CEM</a></li>
									<li><a href="">Plan de Nación UTPR Valle de Lean</a></li>                       
									<li><a href="">Fundación Madera Verde</a></li>                       
									<li><a href="">CORPODESA</a></li>                       
									<li><a href="">Club Cotinga/ASHO</a></li>                       
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- Edn Asamblea General section -->

	<!-- Junta Directiva section -->
	<section class="waypoint-tigger xs-section-padding" id="junta">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12 pr-0 pl-0">
					<div class="xs-archive-content xs-asg">
						<div class="xs-heading">
							<h2 class="xs-line-title">Nuestra</h2>
							<h3 class="xs-title big-o" data-title="Junta Directiva">Junta Directiva</h3>
							<p>
								Periodo vigente del 24/07/2017 al 24/07/2019
							</p>
						</div>
						<div class="tbl-header">
							<table class="tbl">
								<thead>
									<tr>
										<th><div class="first"><h2>CARGO</h2></div></th>
										<th><div><h2>INSTITUCIÓN</h2></div></th>
										<th><div class="last"><h2>REPRESENTANTE</h2></div></th>
									</tr>
								</thead>
							</table>
						</div>
						<div class="tbl-content">
							<table class="tbl">
								<tbody>
									<tr>
										<td>Presidente</td>
										<td>Municipalidad de La Ceiba</td>
										<td>Carlos Omar Espinoza Sandoval</td>
									</tr>
									<tr>
										<td>Vicepresidente</td>
										<td>CCIA</td>
										<td>Abraham Dip Handal</td>
									</tr>
									<tr>
										<td>Secretaría</td>
										<td>FENIEPH</td>
										<td>Alba Estela Pinto López</td>						
									</tr>
									<tr>
										<td>Tesorero</td>
										<td>REHDES</td>
										<td>Héctor Emilio Ávila Reyes</td>
									</tr>
									<tr>
										<td>Fiscal</td>
										<td>ICF</td>
										<td>Domingo Pineda Puerto</td>
									</tr>
									<tr>
										<td>Vocal 1</td>
										<td>Fundación Casa de la Cultura</td>
										<td>Miguel López Bendeck</td>
									</tr>
									<tr>
										<td>Vocal 2</td>
										<td>FHIA</td>
										<td>Aroldo Dubón Dubón</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- Edn Junta Directiva section -->
	
	<!-- Comité Técnico section -->
	<section class="waypoint-tigger xs-section-padding" id="asistencia">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12 pr-0 pl-0">
					<div class="xs-archive-content xs-asg">
						<div class="xs-heading">
							<h2 class="xs-line-title">Nuestro</h2>
							<h3 class="xs-title big-o" data-title="Comité Técnico">Comité Técnico Consultivo</h3>
							<p>
								Es el órgano que; reúne a miembros de la asamblea general ordinaria, con una experiencia 
								reconocida y probada, captado en función de sus conocimientos técnicos específicos. 
								Su periodo de vigencia del 08/03/2018 al 24/07/2019.
							</p>
						</div>
						<div class="tbl-header">
							<table class="tbl">
								<thead>
									<tr>
										<th><div class="first"><h2>CARGO</h2></div></th>
										<th><div><h2>INSTITUCIÓN</h2></div></th>
										<th><div class="last"><h2>REPRESENTANTE</h2></div></th>
									</tr>
								</thead>
							</table>
						</div>
						<div class="tbl-content">
							<table class="tbl">
								<tbody>
									<tr>
										<td>Asesor Principal</td>
										<td>LARECOTURH</td>
										<td>Gerardo Yanes</td>
									</tr>
									<tr>
										<td>Asesor Técnico<br>Eje Estratégico #1<br><span> - Gestión del Conocimiento.</span></td>
										<td>CEM</td>
										<td>Emilio D'Cuire</td>
									</tr>
									<tr>
										<td>Asesor Técnico<br>Eje Estratégico #2<br><span> - Interpretación y Educaión Ambiental.</span></td>
										<td>INHGEOMIN</td>
										<td>Gladys Murillo</td>						
									</tr>
									<tr>
										<td>Asesor Técnico<br>Eje Estratégico #3<br><span> - Desarrollo y Sostenibilidad Institucional.</span></td>
										<td>Fundación ANED</td>
										<td>Carlos Posas</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- Edn Comité Técnico section -->
@endsection