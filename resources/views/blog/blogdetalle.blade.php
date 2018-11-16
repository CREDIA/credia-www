@extends('layouts.layout_other')

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

@section('title', 'Blog detalles -')

@section('blogdetalle')
	
	<section class="xs-banner-inner-section-other"></section>

	<!-- blog single post -->
	<div class="xs-content-section-padding xs-blog-single">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-8 estilo">
					<!-- format standard -->
					<article class="post format-standard hentry xs-blog-post-details">
						<div class="post-media post-image">
							<img src="/{{ $articulo->first()->foto }}" class="img-responsive" alt="">
						</div><!-- .post-media END -->

						<div class="post-body xs-border xs-padding-40">
							<div class="entry-header">
								<div class="post-meta row">
									<div class="col-md-2 xs-padding-0">
										<span class="post-meta-date"><b>{{date('d', strtotime($articulo->first()->fecha))}}</b>{{diccionario(date('m', strtotime($articulo->first()->fecha)))}}</span>
									</div>
									<div class="col-md-10 d-flex align-items-end xs-post-meta-list">
										<span class="post-cat">
											<i class="fa fa-folder-open"></i>
											<a href="{{URL::route('categoria_blog',['categoria' => str_slug($archive,'-'),'categoria_id' => $articulo->first()->categoria_id])}}">
												{{ $archive }}
											</a>
										</span>

										<!-- <span class="tags-links"> -->
											<!-- <i class="fa fa-tags"></i> -->
											<!-- <a href="#" rel="tag">Fund</a>,  -->
											<!-- <a href="#" rel="tag">Crowd</a> -->
										<!-- </span> -->

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

							<div class="post-footer">
								<div class="xs-post-footer xs-padding-40 xs-border">
									<!-- <div class="post-tags"> -->
										<!-- <h5 class="xs-post-sub-heading">Releted Tags</h5> -->
										<!-- <div class="xs-blog-post-tag"> -->
											<!-- <a href="#">Hopes</a> -->
											<!-- <a href="#">Medical</a> -->
										<!-- </div> -->
									<!-- </div> --><!-- Post tags end -->

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
											<!-- <li><a href="#" class="color-pinterest"><i class="fa fa-pinterest"></i></a></li> -->
											<!-- <li><a href="#" class="color-instagram"><i class="fa fa-instagram"></i></a></li> -->
										</ul>
									</div><!-- Share items end -->
									<div class="clearfix"></div>
								</div>
								<!-- <div class="xs-author-block xs-padding-40 xs-border"> -->
									<!-- <div class="post-author"> -->
										<!-- <div class="xs-round-avatar float-left"> -->
											<!-- <img src="/assets/images/avatar/avatar_7.jpg" alt="" class="img-responsive"> -->
										<!-- </div> -->

										<!-- <div class="xs-post-author-details float-right"> -->
											<!-- <a href="#">Jhon William</a> -->
											<!-- <em> -->
												<!-- <i class="fa fa-map-marker color-green"></i>New York, USA -->
											<!-- </em> -->
											<!-- <span class="xs-separetor"></span> -->
											<!-- <ul class="xs-social-list simple"> -->
												<!-- <li><a href="#" class="color-facebook"><i class="fa fa-facebook"></i></a></li> -->
												<!-- <li><a href="#" class="color-twitter"><i class="fa fa-twitter"></i></a></li> -->
												<!-- <li><a href="#" class="color-dribbble"><i class="fa fa-dribbble"></i></a></li> -->
												<!-- <li><a href="#" class="color-pinterest"><i class="fa fa-pinterest"></i></a></li> -->
												<!-- <li><a href="#" class="color-instagram"><i class="fa fa-instagram"></i></a></li> -->
											<!-- </ul> -->
										<!-- </div> -->
										<!-- <div class="clearfix"></div> -->
									<!-- </div> -->

									<!-- <div class="post-content"> -->
										<!-- <p class="xs-mb-0">I love advice columns, always have. Growing up, I read “Dear Abby” and “Ask Ann Landers.” I enjoyed the voyeurism — glimpses into the lives with hapy family.</p> -->
									<!-- </div> --><!-- Share items end --> 
									<!-- <div class="clearfix"></div> -->
								<!-- </div> -->
								
								<nav class="navigation post-navigation" role="navigation">
									<div class="nav-links float-left w-50">
										<a href="#" rel="prev" class="prev">
											<!-- <h5>Crowdfunding resource</h5> -->
											<span class="meta-nav"><i class="fa fa-angle-left"></i>Anterior</span>
										</a>
									</div><!-- .nav-links -->
									<div class="nav-links float-right w-50 text-right">
										<a href="#" rel="next" class="next">
											<!-- <h5>Funding means life</h5> -->
											<span class="meta-nav">Siguiente<i class="fa fa-angle-right"></i></span>
										</a>
									</div><!-- .nav-links -->
									<div class="clearfix"></div>
								</nav>
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
										<div class="reply">
											<a href=""> 
												<i class="fa fa-mail-forward"></i>
												Respuesta
											</a>
										</div>
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
							<form action="{{URL::to('blog',['slug' => str_slug($articulo->first()->titulo,'-'),'id' => $articulo->first()->id])}}" id="form-comment" name="form-comment" method="post" class="comment-form">
								{{ csrf_field() }}
								<input placeholder="Nombre *" name="nombre" value="{{ old('nombre') }}" type="text">
								
								<div class="row">
									<div class="col-lg-6">
										<input placeholder="Correo *" name="correo" value="{{ old('correo') }}" type="email">
									</div>
									<div class="col-lg-6">
										<input placeholder="Enter Website" name="url" type="url">
									</div>
								</div><!-- .comment-info END -->

								<textarea placeholder="Ingrese su comentario *" name="comentario" value="{{ old('comentario') }}" cols="45" rows="8"></textarea>
								
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
									<!-- </div> --><!-- .posts-thumb END --> 
									<!-- <div class="post-info"> -->
										<!-- <h4 class="entry-title"> -->
											<!-- <a href="#">Child Care Centers</a> -->
										<!-- </h4> -->
										<!-- <div class="post-meta"> -->
											<!-- <span class="comments-link"> -->
												<!-- <i class="fa fa-comments-o"></i> -->
												<!-- <a href="#">300 Comments</a> -->
											<!-- </span> --><!-- .comments-link --> 
										<!-- </div> -->
									<!-- </div> --><!-- .post-info END --> 
									<!-- <div class="clearfix"></div> -->
								<!-- </li> --><!-- 1st post end--> 
								<!-- <li> -->
									<!-- <div class="posts-thumb float-left">  -->
										<!-- <a href="#"> -->
											<!-- <img alt="img" class="img-responsive" src="assets/images/news_feeds_1.jpg"> -->
											<!-- <div class="xs-entry-date"> -->
												<!-- <span class="entry-date d-block">23</span> -->
												<!-- <span class="entry-month d-block">sep</span> -->
											<!-- </div> -->
											<!-- <div class="xs-black-overlay bg-aqua"></div> -->
										<!-- </a> -->
									<!-- </div> --><!-- .posts-thumb END --> 
									<!-- <div class="post-info"> -->
										<!-- <h4 class="entry-title"> -->
											<!-- <a href="#">Disaster Relief</a> -->
										<!-- </h4> -->
										<!-- <div class="post-meta"> -->
											<!-- <span class="comments-link"> -->
												<!-- <i class="fa fa-comments-o"></i> -->
												<!-- <a href="#">35 Comments</a> -->
											<!-- </span>-->
										<!-- </div> --><!-- .comments-link --> 
									<!-- </div>--><!-- .post-info END --> 
									<!-- <div class="clearfix"></div> -->
								<!-- </li>--><!-- 2nd post end--> 
							<!-- </ul> -->
						<!-- </div> -->					
						<!-- recent post end -->
						
						<!-- categories start -->
						<div class="widget widget_categories xs-sidebar-widget">
							<h3 class="widget-title">Categorías</h3>
							<ul class="xs-side-bar-list">
								@foreach($categorias as $categoria)
										<li>
											<a href="{{URL::route('categoria_blog',['categoria' => str_slug($categoria->nombre,'-'),'categoria_id' => $categoria->id])}}">
												<span class="first">{{ $categoria->nombre }}</span>
												<span class="last">{{ $categoria->blogs()->count() }}</span>
											</a>
										</li>
								@endforeach
							</ul>
						</div><!-- categories end -->
						
						
						<!-- call to action start -->
						<!-- <div class="widget widget_call_to_action"> -->
							<!-- <a href="#" class="d-block"> -->
								<!-- <img src="/assets/images/side_add_baner.jpg" alt=""> -->
							<!-- </a> -->
						<!-- </div> -->
						<!-- call to action end -->
						
						<!-- widget Populares -->
						<!-- <div class="widget widget_tags xs-sidebar-widget"> -->
							<!-- <h3 class="widget-title">Populares</h3> -->

							<!-- <div class="xs-blog-post-tag"> -->
								<!-- <a href="#">Crowdfunding</a> -->
								<!-- <a href="#">Fundrise</a> -->
								<!-- <a href="#">70</a> -->
								<!-- <a href="#">Medicine</a> -->
								<!-- <a href="#">Food</a> -->
								<!-- <a href="#">7</a> -->
								<!-- <a href="#">Greeny</a> -->
								<!-- <a href="#">Fundrising</a> -->
								<!-- <a href="#">Hopes</a> -->
								<!-- <a href="#">Medical</a> -->
								<!-- <a href="#">Help</a> -->
							<!-- </div> -->
						<!-- </div> -->
						<!-- widget tags closed -->
						
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
								<li>
									<a href="https://www.pinterest.com/pin/find/?url={{URL::to('blog',['slug' => str_slug($articulo->first()->titulo,'-'),'id' => $articulo->first()->id])}}&text={{$articulo->first()->id}}" target="_blank" class="color-pinterest">
										<i class="fa fa-pinterest"></i>
										Pinterest
									</a>
								</li>
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
	</div>	<!-- End blog single post -->
@endsection

@section('bd_revista')
	<!-- journal section -->
	<section class="xs-section-padding bg-gray">
		<div class="container">
			<div class="xs-heading row xs-mb-60">
				<div class="col-md-9 col-xl-9">
					<h2 class="xs-title">From the Journal</h2>
					<span class="xs-separetor dashed"></span>
					<p>It allows you to gather monthly subscriptions from fans to help fund your creative projects. They also encourage their users to offer rewards to fans as a way to repay them for their support.</p>
				</div><!-- .xs-heading-title END -->
				<div class="col-xl-3 col-md-3 xs-btn-wraper">
					<a href="" class="btn btn-primary">all Causes</a>
				</div><!-- .xs-btn-wraper END -->
			</div><!-- .row end -->
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="xs-box-shadow xs-single-journal">
						<div class="entry-thumbnail ">
							<img src="assets/images/blog/blog_1.jpg" alt="">
							<div class="post-author">
								<span class="xs-round-avatar">
									<img class="img-responsive" src="/assets/images/avatar/avatar_1.jpg" alt="">
								</span>
								<span class="author-name">
									<a href="#">By Simona</a>
								</span>
							</div>
						</div><!-- .xs-item-header END -->
						<div class="entry-header">
							<div class="entry-meta">
								<span class="date">
									<a href=""  rel="bookmark" class="entry-date">
										27th August 2017
									</a>
								</span>
							</div>
							
							<h4 class="entry-title">
								<a href="#">Brilliant After All, A New Album by Rebecca: Help poor people</a>
							</h4>
						</div><!-- .xs-entry-header END -->
						<span class="xs-separetor"></span>
						<div class="post-meta">
							<span class="comments-link">
								<i class="fa fa-comments-o"></i>
								<a href="">300 Comments</a>
							</span><!-- .comments-link -->
							<span class="view-link">
								<i class="fa fa-eye"></i>
								<a href="">1000 Views</a>
							</span>
						</div><!-- .post-meta END -->
					</div><!-- .xs-from-journal END -->
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="xs-box-shadow xs-single-journal">
						<div class="entry-thumbnail ">
							<img src="assets/images/blog/blog_2.jpg" alt="">
							<div class="post-author">
								<span class="xs-round-avatar">
									<img class="img-responsive" src="/assets/images/avatar/avatar_2.jpg" alt="">
								</span>
								<span class="author-name">
									<a href="#">By Julian</a>
								</span>
							</div>
						</div><!-- .xs-item-header END -->
						<div class="entry-header">
							<div class="entry-meta">
								<span class="date">
									<a href=""  rel="bookmark" class="entry-date">
										02 May 2017
									</a>
								</span>
							</div>
							
							<h4 class="entry-title">
								<a href="#">South african pre primary school build for children</a>
							</h4>
						</div><!-- .xs-entry-header END -->
						<span class="xs-separetor"></span>
						<div class="post-meta">
							<span class="comments-link">
								<i class="fa fa-comments-o"></i>
								<a href="">300 Comments</a>
							</span><!-- .comments-link -->
							<span class="view-link">
								<i class="fa fa-eye"></i>
								<a href="">1000 Views</a>
							</span>
						</div><!-- .post-meta END -->
					</div><!-- .xs-from-journal END -->
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="xs-box-shadow xs-single-journal">
						<div class="entry-thumbnail ">
							<img src="assets/images/blog/blog_3.jpg" alt="">
							<div class="post-author">
								<span class="xs-round-avatar">
									<img class="img-responsive" src="/assets/images/avatar/avatar_3.jpg" alt="">
								</span>
								<span class="author-name">
									<a href="#">By David Willy</a>
								</span>
							</div>
						</div><!-- .xs-item-header END -->
						<div class="entry-header">
							<div class="entry-meta">
								<span class="date">
									<a href=""  rel="bookmark" class="entry-date">
										13 January 2017
									</a>
								</span>
							</div>
							
							<h4 class="entry-title">
								<a href="#">Provide pure water for syrian poor people</a>
							</h4>
						</div><!-- .xs-entry-header END -->
						<span class="xs-separetor"></span>
						<div class="post-meta">
							<span class="comments-link">
								<i class="fa fa-comments-o"></i>
								<a href="">300 Comments</a>
							</span><!-- .comments-link -->
							<span class="view-link">
								<i class="fa fa-eye"></i>
								<a href="">1000 Views</a>
							</span>
						</div><!-- .post-meta END -->
					</div><!-- .xs-from-journal END -->
				</div>
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section>	<!-- End journal section -->
@endsection

@push('scripts_blogdetalle')
    <script>
		
	</script>
@endpush
