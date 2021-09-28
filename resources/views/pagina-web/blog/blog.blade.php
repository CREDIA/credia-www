@extends('pagina-web.layouts.layout')

@section('title', '| Blog')

<?php
	function diccionario($palabra)
	{	
		$arr = array();
		
		$arr["01"] = "ENERO";
		$arr["02"] = "FEBRERO";
		$arr["03"] = "MARZO";
		$arr["04"] = "ABRIL";
		$arr["05"] = "MAYO";
		$arr["06"] = "JUNIO";
		$arr["07"] = "JULIO";
		$arr["08"] = "AGOSTO";
		$arr["09"] = "SEPTIEMBRE";
		$arr["10"] = "OCTUBRE";
		$arr["11"] = "NOVIEMBRE";
		$arr["12"] = "DICIEMBRE";
		
		return $arr[$palabra];
	}
	
	$pagination_range = 2;
?>

@section('banner')
	<section class="xs-banner-inner-section parallax-window" style="background-image:url(/{{$foto}})">
		<div class="xs-black-overlay"></div>
		<div class="container">
			<div class="color-white xs-inner-banner-content">
				<h2>{{$titulo}}</h2>
				<p>{{$contenido}}</p>
			</div>
		</div>
	</section>
@endsection

@section('blog_seccion')
	<!-- blog section -->
	<section class="xs-content-section-padding">
		<div class="container">
			<div class="row xs-mb-50">
				@if(count($articulos) === 0)
					<div class="col-lg-12">
						<h1 class="resp">NO HAY PUBLICACIONES DISPONIBLES<h1>
					</div>
				@endif
				@foreach($articulos as $articulo)
					<div class="col-lg-4 col-md-6">
						<div class="xs-box-shadow xs-single-journal xs-mb-30">
							<div class="entry-thumbnail" style="background-image: url(/storage/uploads/{{ $articulo->foto }});">
								<div class="post-author">
									<span class="xs-round-avatar">
										<img class="img-responsive" src="{{ 'https://www.gravatar.com/avatar/'.md5(strtolower(trim($articulo->correo))).'?s=50&d=monsterid' }}">
									</span>
									<span class="author-name">
										<a>Por {{ $articulo->nombre }}</a>
									</span>
								</div>
							</div><!-- .xs-item-header END -->
							<div class="entry-header">
								<div class="entry-meta">
									<span class="date">
										<a rel="bookmark" class="entry-date">
											{{date('d', strtotime($articulo->fecha))}} DE {{diccionario(date('m', strtotime($articulo->fecha)))}} DE {{date('Y', strtotime($articulo->fecha))}}
										</a>
									</span>
								</div>
								
								<h4 class="entry-title">
									<a href="{{URL::route('blogdetalle',['slug' => str_slug($articulo->titulo,'-'),'id' => $articulo->id])}}">{{$articulo->titulo}}</a>
								</h4>
							</div><!-- .xs-entry-header END --> 
							<span class="xs-separetor"></span>
							<div class="post-meta meta-style-color">
								<span class="comments-link">
									<i class="fa fa-comments-o"></i>
										<a>{{ $articulo->blogcomments()->count() }} comentarios</a>
								</span><!-- .comments-link -->
								<span class="view-link">
									<i class="fa fa-eye"></i>
									<a>{{ $articulo->total_vista }} vistas</a>
								</span>
							</div><!-- .post-meta END -->
						</div><!-- .xs-from-journal END -->
					</div>
				@endforeach
			</div><!-- .row end -->
			@if($articulos->count() > 0)
				<!-- pagination -->
				<div>
					<ul class="pagination justify-content-center xs-pagination">
						<li class="page-item {{ $articulos->previousPageUrl() == null ? 'disabled' : '' }}">
							<a class="page-link" href="{{ $articulos->previousPageUrl() ?? '#' }}" aria-label="Previous">
								<i class="fa fa-angle-left"></i>
							</a>
						</li>
						@if ($articulos->currentPage() > 1+$pagination_range )
							<li class="page-item">
								<a class="page-link" href="{{ $articulos->url(1) ?? '#' }}">{{ 1 }}</a>
							</li>

							@if ($articulos->currentPage() > 1+$pagination_range+1 )
								<li class="page-item disabled">
									<span class="page-link">&hellip;</span>
								</li>
							@endif
						@endif
						@for ($i=-$pagination_range; $i<=$pagination_range; $i++)
							@if ($articulos->currentPage()+$i > 0 && $articulos->currentPage()+$i <= $articulos->lastPage())
								<li class="page-item">
									<a class="page-link {{ $i==0 ? 'active' : '' }}" href="{{ $articulos->url($articulos->currentPage()+$i) }}">{{ $articulos->currentPage()+$i }}</a>
								</li>
							@endif
						@endfor
						@if ($articulos->currentPage() < $articulos->lastPage()-$pagination_range )	
							@if ($articulos->currentPage() < $articulos->lastPage()-$pagination_range-1 )
								<li class="page-item disabled">
									<span class="page-link">&hellip;</span>
								</li>
							@endif
							<li class="page-item">
								<a class="page-link" href="{{ $articulos->url($articulos->lastPage()) ?? '#' }}">{{ $articulos->lastPage() }}</a>
							</li>
						@endif
						<li class="page-item {{ $articulos->nextPageUrl()==null ? 'disabled' : '' }}">
							<a class="page-link" href="{{ $articulos->nextPageUrl() ?? '#' }}" aria-label="Next">
								<i class="fa fa-angle-right"></i>
							</a>
						</li>
					</ul>
				</div><!-- End pagination -->
			@endif
		</div><!-- .container end -->
	</section><!-- End blog section -->
@endsection