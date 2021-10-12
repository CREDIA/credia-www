@extends('pagina-web.layouts.layout_other')

@section('title', '| Proyecto')

@section('proyecto_detalle')
	
	<section class="xs-banner-inner-section-other"></section>
	
	<!-- event single section -->
	<section class="xs-content-section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="row event-slyle">
						<div class="col-lg-8 xs-event-wraper">
							<div class="xs-event-content">
								<h4 style="text-align:justify;font-size: 20px;">{{ $proyecto->first()->titulo }}</h4>
								<span class="xs-separetor"></span>
								<h5 style="text-align:justify;color:#a6ce39;">{{ $proyecto->first()->subtitulo }}</h5>
								<br>
								{!! $proyecto->first()->contenido !!}
							</div>
						</div>
						<div class="col-lg-4">
							<!-- categories start -->
							<div class="widget widget_categories xs-sidebar-widget">
								<h3 class="widget-title">Categor&iacute;as</h3>
								<ul class="xs-side-bar-list">
									@foreach($proyecto as $categorias)
										@foreach($categorias->first()->categorias()->get() as $categoria)	
											<li>
												<a href="{{ URL::route('categoria_proyecto',['categoria' => str_slug($categoria->nombre,'-'),'categoria_id' => $categoria->id])}}">
													<span class="first">{{ $categoria->nombre }}</span>
													<!-- <span class="last"></span> -->
												</a>
											</li>
										@endforeach
									@endforeach								
								</ul>
							</div><!-- categories end -->
							
							@if(count($proyecto->first()->patrocinadores()->get()) > 0)
								<div class="xs-event-schedule-widget">
									<h3 class="widget-title">Patrocinadores</h3>
									<ul class="xs-event-sponsor clearfix">
										@foreach($proyecto->first()->patrocinadores()->get() as $proyect)
											<li><a><img src="/storage/uploads/{{ $proyect->foto }}" alt=""></a></li>
										@endforeach
									</ul>
								</div><!-- .xs-event-schedule-widget END -->
							@endif
						</div>
					</div>
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section>	<!-- End event single section -->
@endsection