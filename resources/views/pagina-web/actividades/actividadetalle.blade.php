@extends('pagina-web.layouts.layout_other')

@section('title', '| Actividad')

@section('actividad_detalle')
	
	<section class="xs-banner-inner-section-other"></section>
	
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
	
	<!-- event single section -->
	<section class="xs-content-section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="row event-slyle">
						<div class="col-lg-8 col-md-12 xs-event-wraper">
							<div class="xs-event-content">
								<h4 style="text-align:justify;font-size: 20px;">{{ $actividad->first()->titulo }}</h4>
								<span class="xs-separetor"></span>
								<h5 style="text-align:justify;color:#a6ce39;">{{ $actividad->first()->descripcion }}</h5>
								<br>
								{!! $actividad->first()->contenido !!}
							</div>
						</div>
						<div class="col-lg-4 col-md-12">
							<div class="min-l col-lg-12 col-md-6">
								<!-- actividades start -->
								<div class="widget widget_categories xs-sidebar-widget">
									<h3 class="widget-title">Actividades</h3>
									<ul class="xs-side-bar-list">
										@foreach($actividades as $actividad)
												<li>
													<a href="{{URL::route('actividadetalle',['slug' => str_slug($actividad->titulo,'-'),'id' => $actividad->id])}}">
														<span class="first">{{ $actividad->titulo }}</span>
													</a>
												</li>
										@endforeach
									</ul>
								</div><!-- actividades end -->
							</div>
							@if(count($fotos) > 0)
								<div class="min-l col-lg-12 col-md-6">
									<div class="widget widget_categories xs-sidebar-foto">
										<h3 class="widget-title">Fotografías</h3>
										<div class="slide-foto-actividad">
												@foreach($fotos as $foto)
														<div class="mySlides" style="background-image: url(/storage/uploads/{{ $foto->fotos }})"></div>
												@endforeach
											<button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
											<button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
										</div>
									</div>
								</div>
							@endif
							@if(count($videos) > 0)
								<div class="min-l col-lg-12 col-md-6">
									<div class="widget widget_categories xs-sidebar-foto">
										<h3 class="widget-title">Videos</h3>
										<div class="slide-foto-actividad">
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
											<button class="w3-button w3-black w3-display-left" onclick="plusDivsv(-1)">&#10094;</button>
											<button class="w3-button w3-black w3-display-right" onclick="plusDivsv(1)">&#10095;</button>
										</div>
									</div>
								</div>
							@endif
							@if(count($archivos)  > 0)
								<div class="min-l col-lg-12 col-md-6">
									<div class="text-center">
										<div class="datagrid-act">
											<table id="">
												<thead>
													<tr>
														<th colspan="2">Documentos</th>
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
																				<li><a href="/{{$file}}" download="{{ $archivo->nombre }}" class="btn-des-act btn-descarga-act"><span>Descargar</span></a></li>
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
							@endif
						</div>
					</div>
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section>	<!-- End event single section -->
@endsection