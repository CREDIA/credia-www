@extends('pagina-web.layouts.layout_other')

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
?>

@section('blog_detalle')
	
	<section class="xs-banner-inner-section-other"></section>
	
	<!-- detalle de artículos de blog -->
	<div class="xs-content-section-padding xs-blog-single">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-8 estilo">
					<!-- format standard -->
					<article class="post format-standard hentry xs-blog-post-details">
						<div class="post-media post-image" style="background-image: url(/storage/uploads/{{ $articulo->first()->foto }});"></div>
						<div class="post-body xs-border xs-padding-40">
							<div class="entry-header">
								<div class="post-meta row">
									<div class="col-md-3 xs-padding-0">
										<span class="post-meta-date"><b>{{date('d', strtotime($articulo->first()->fecha))}}</b>{{diccionario(date('m', strtotime($articulo->first()->fecha)))}}</span>
									</div>
									<div class="col-md-9 d-flex align-items-end xs-post-meta-list">
										<span class="post-cat">
											<i class="fa fa-folder-open"></i>
											<a href="{{URL::route('categoria_blog',['categoria' => str_slug($archive,'-'),'categoria_id' => $articulo->first()->categoria_id])}}">
												{{ $archive }}
											</a>
										</span>
										<span class="post-comment">
											<i class="fa fa-envelope-o"></i>
											<a href="#">{{ $comentarios->count() }} Comentarios</a>
										</span>
									</div>
								</div><!-- .row end -->
								<h2 class="entry-title xs-post-entry-title">
									<a href="#">{{$articulo->first()->titulo}}</a>
								</h2>
							</div><!-- header end -->
							
							<div class="entry-content">
								{!! $articulo->first()->contenido_1 !!}
							</div><!-- .xs-entry-content END -->
							
							@if(count($articulo->first()->fotos) > 0)
								<div class="xs-post-footer xs-padding-30 xs-border xs-post-height">
									<div class="xs-single-item-slider owl-carousel xs-single-wm">								
										@foreach ($articulo->first()->fotos as $foto)
											<div class="xs-single-slider-item xs-sigle-dimension">
												<img src="/{{$foto}}" alt="" style="width:328px;height:210px;">
											</div>
										@endforeach
									</div>
								</div>
							@endif
							
							<div class="post-footer">
								<div class="xs-post-footer xs-padding-40 xs-border">
									<div class="share-items">
										<h5 class="xs-post-sub-heading">Compartir</h5>
										<ul class="xs-social-list square">
											<li>
												<a href="http://www.facebook.com/share.php?u={{URL::to('blog',['slug' => str_slug($articulo->first()->titulo,'-'),'id' => $articulo->first()->id])}}&text={{$articulo->first()->id}}" class="color-facebook" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
													<i class="fa fa-facebook"></i>
												</a>
											</li>
											<li>
												<a href="https://twitter.com/share?url={{URL::to('blog',['slug' => str_slug($articulo->first()->titulo,'-'),'id' => $articulo->first()->id])}}&text={{$articulo->first()->id}}" target="_blank" class="color-twitter">
													<i class="fa fa-twitter"></i>
												</a>
											</li>
											<li>
												<a href="https://plus.google.com/share?url={{URL::to('blog',['slug' => str_slug($articulo->first()->titulo,'-'),'id' => $articulo->first()->id])}}" target="_blank" class="color-google-plus">
													<i class="fa fa-google-plus"></i>
												</a>
											</li>
										</ul>
									</div><!-- Share items end -->
									<div class="clearfix"></div>
								</div>
								
								<!-- <nav class="navigation post-navigation" role="navigation"> -->
									<!-- <div class="nav-links float-left w-50"> -->
										<!-- <a href="#" rel="prev" class="prev"> -->
											<!-- <h5>Crowdfunding resource</h5> -->
											<!-- <span class="meta-nav"><i class="fa fa-angle-left"></i>Anterior</span> -->
										<!-- </a> -->
									<!-- </div> -->
									<!-- <div class="nav-links float-right w-50 text-right"> -->
										<!-- <a href="#" rel="next" class="next"> -->
											<!-- <h5>Funding means life</h5> -->
											<!-- <span class="meta-nav">Siguiente<i class="fa fa-angle-right"></i></span> -->
										<!-- </a> -->
									<!-- </div> -->
									<!-- <div class="clearfix"></div> -->
								<!-- </nav> -->
							</div>
						</div><!-- post-body end -->
					</article><!-- .post  END -->
					<!-- format standard closed -->
					
					<!-- post comment -->
					<div class="xs-blog-post-comment xs-padding-40 xs-border">
						<!-- <h4 class="comments-title"> 4 Comments</h4> -->
						<!-- start comment -->
						<ul class="comment-list">
							<li class="comment">
								@foreach($comentarios as $comentario)
									<div class="comment-body">
										<div class="comment-meta">
											<div class="comment-author">
												<img alt="avatar" src="{{ 'https://www.gravatar.com/avatar/'.md5(strtolower(trim($comentario->correo))).'?s=50&d=monsterid' }}" class="avatar">
												<b>{{ $comentario->nombre }}</b>
											</div>
											<div class="comment-metadata">
												<a href="#">
													<time>
														{{ date('d', strtotime($comentario->created_at)) }} DE {{ diccionario(date('m', strtotime($comentario->created_at))) }} 
														DE {{ date('Y', strtotime($comentario->created_at)) }} - {{ date('h:i A', strtotime($comentario->created_at)) }}
													</time>
													
												</a>
											</div> 
										</div>

										<div class="comment-content">
											<p>{{ $comentario->comentario }}</p>
										</div>
										<!-- <div class="reply"> -->
											<!-- <a href="">  -->
												<!-- <i class="fa fa-mail-forward"></i> -->
												<!-- Respuesta -->
											<!-- </a> -->
										<!-- </div> -->
									</div><!-- .comment-body -->
								@endforeach
								<!-- <ul class="children"> -->
									<!-- <li class="comment"> -->
										<!-- <div class="comment-body"> -->
											<!-- <div class="comment-meta"> -->
												<!-- <div class="comment-author"> -->
													<!-- <img alt="" src="/assets/images/avatar/avatar_8.jpg" class="avatar"> -->
													<!-- <b>Julian Jenny</b>  -->
												<!-- </div> -->

												<!-- <div class="comment-metadata"> -->
													<!-- <a href="#"> -->
														<!-- <time datetime="2018-08-17T04:24:41+00:00">17th August 2018</time> -->
													<!-- </a> -->
												<!-- </div> -->
											<!-- </div> -->

											<!-- <div class="comment-content"> -->
												<!-- <p>On the evening of November 10th, the audience at New York’s Metry opolitans Opera was treated to the briefest of delights.</p> -->
											<!-- </div> -->

											<!-- <div class="reply"> -->
												<!-- <a href="#">  -->
													<!-- <i class="fa fa-mail-forward"></i> -->
													<!-- Respuesta -->
												<!-- </a> -->
											<!-- </div> -->
										<!-- </div> -->
									<!-- </li> -->
								<!-- </ul> -->
							</li><!-- #comment-## -->
						</ul>
						<!-- end comment -->
						
						<!-- start respond form -->
						<div class="comment-respond">
							<h3 class="comment-reply-title">Deja un comentario</h3>
							@include('alertas.warning_comentario')	
							<form action="{{URL::to('blog',['slug' => str_slug($articulo->first()->titulo,'-'),'id' => $articulo->first()->id])}}" method="post" class="comment-form">
								{{ csrf_field() }}
								<input placeholder="Nombre *" name="nombre" value="{{ old('nombre') }}" type="text" required>
								
								<input placeholder="Correo *" name="correo" value="{{ old('correo') }}" type="email" required>
						
								<textarea placeholder="Ingrese su comentario *" name="comentario" value="{{ old('comentario') }}" cols="45" rows="8" required></textarea>
								
								{!! captcha_img() !!}
								<input placeholder="Captcha" name="captcha" value="" type="text" required>
								<div class="text-right">
									<button type="submit" class="btn btn-primary">Publicar comentario</button>
								</div>
							</form><!-- .comment-form END -->
						</div>
						<!-- end respond form -->
					</div>
					<!-- end post comment -->
				</div>
				
				<div class="col-md-12 col-lg-4">
					<!-- sidebar content -->
					<div class="sidebar sidebar-right">
						<!-- search bar start -->
						<!-- <div class="widget widget_search">	 -->
							<!-- <form class="xs-serachForm" name="search"> -->
								<!-- <input type="search" name="string" placeholder="Escriba palabras clave..."> -->
								<!-- <input type="submit" value=""> -->
							<!-- </form> -->
						<!-- </div> -->
						<!-- search bas stop -->
						
						<!-- recent post start -->
						<!-- <div class="widget recent-posts xs-sidebar-widget"> -->
							<!-- <h3 class="widget-title">Trending Post</h3> -->
							<!-- <ul class="xs-recent-post-widget"> -->
								<!-- <li> -->
									<!-- <div class="posts-thumb float-left">  -->
										<!-- <a href="#"> -->
											<!-- <img alt="img" class="img-responsive" src="assets/images/news_feeds_1.jpg"> -->
											<!-- <div class="xs-entry-date"> -->
												<!-- <span class="entry-date d-block">21</span> -->
												<!-- <span class="entry-month d-block">dec</span> -->
											<!-- </div> -->
											<!-- <div class="xs-black-overlay bg-aqua"></div> -->
										<!-- </a> -->
									<!-- </div> -->
									<!-- <div class="post-info"> -->
										<!-- <h4 class="entry-title"> -->
											<!-- <a href="#">Child Care Centers</a> -->
										<!-- </h4> -->
										<!-- <div class="post-meta"> -->
											<!-- <span class="comments-link"> -->
												<!-- <i class="fa fa-comments-o"></i> -->
												<!-- <a href="#">300 Comments</a> -->
											<!-- </span> -->
										<!-- </div> -->
									<!-- </div> -->
									<!-- <div class="clearfix"></div> -->
								<!-- </li> -->
							<!-- </ul> -->
						<!-- </div>				 -->
						<!-- recent post end -->
						
						<!-- categories start -->
						<div class="widget widget_categories xs-sidebar-widget">
							<h3 class="widget-title">Categorías</h3>
							<ul class="xs-side-bar-list">
								@foreach($categorias as $categoria)
										@if($categoria->blogs()->count() > 0)
											<li>
												<a href="{{URL::route('categoria_blog',['categoria' => str_slug($categoria->nombre,'-'),'categoria_id' => $categoria->id])}}">
													<span class="first">{{ $categoria->nombre }}</span>
													<span class="last">{{ $categoria->blogs()->count() }}</span>
												</a>
											</li>
										@endif
								@endforeach
							</ul>
						</div><!-- categories end -->
						
						<!-- widget tags -->
						<div class="widget widget_social_share xs-sidebar-widget">
							<h3 class="widget-title">Compartir</h3>

							<ul class="xs-social-list boxed">
								<li>
									<a href="http://www.facebook.com/share.php?u={{URL::to('blog',['slug' => str_slug($articulo->first()->titulo,'-'),'id' => $articulo->first()->id])}}&text={{$articulo->first()->id}}" class="color-facebook" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
										<i class="fa fa-facebook"></i>
										Facebook
									</a>
								</li>
								<li>
									<a href="https://twitter.com/share?url={{URL::to('blog',['slug' => str_slug($articulo->first()->titulo,'-'),'id' => $articulo->first()->id])}}&text={{$articulo->first()->id}}" target="_blank" class="color-twitter">
									<i class="fa fa-twitter"></i>
										twitter
									</a>
								</li>
								<li>
									<a href="https://plus.google.com/share?url={{URL::to('blog',['slug' => str_slug($articulo->first()->titulo,'-'),'id' => $articulo->first()->id])}}" target="_blank" class="color-google-plus">
										<i class="fa fa-google-plus"></i>
										Google
									</a>
								</li>
								<li>
									<a href="http://www.linkedin.com/shareArticle?mini=true&url={{URL::to('blog',['slug' => str_slug($articulo->first()->titulo,'-'),'id' => $articulo->first()->id])}}&text={{$articulo->first()->id}}" target="_blank" class="color-linkedin">
										<i class="fa fa-linkedin"></i>
										Linkedin
									</a>
								</li>
							{{-- <li>
									<a href="https://www.pinterest.com/pin/find/?url={{URL::to('blog',['slug' => str_slug($articulo->first()->titulo,'-'),'id' => $articulo->first()->id])}}&text={{$articulo->first()->id}}" target="_blank" class="color-pinterest">
										<i class="fa fa-pinterest"></i>
										Pinterest
									</a>
								</li> --}}
							</ul>
						</div><!-- widget tags closed -->
		
						<!-- widget archives -->
						<!-- <div class="widget widget_categories xs-sidebar-widget"> -->
							<!-- <h3 class="widget-title">Años</h3> -->
							<!-- <ul class="xs-side-bar-list"> -->
								<!-- <li><a href="#"><span>2018 January</span><span>(6733)</span></a></li> -->
								<!-- <li><a href="#"><span>2017 January</span><span>(5897)</span></a></li> -->
								<!-- <li><a href="#"><span>2015 January</span><span>(4589)</span></a></li> -->
								<!-- <li><a href="#"><span>2014 January</span><span>(3082)</span></a></li> -->
								<!-- <li><a href="#"><span>2013 January</span><span>(2676)</span></a></li> -->
								<!-- <li><a href="#"><span>2012 January</span><span>(1995)</span></a></li> -->
							<!-- </ul> -->
						<!-- </div> -->
						<!-- widget archives closed -->
					</div><!-- End sidebar content -->
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</div>	<!-- End detalle de artículos de blog -->
@endsection