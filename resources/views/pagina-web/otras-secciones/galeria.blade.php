@extends('pagina-web.layouts.layout')

@section('title', '| Galer�a')

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

@section('galeria_seccion')
	<!-- galer�a section -->
	<div class="xs-content-section-padding">
		<div class="container">
			<div class="xs-portfolio-grid">
				<div class="xs-portfolio-grid-item">
					<a href="assets/images/portfolio/gallery_1.jpg" class="xs-single-portfolio-item xs-image-popup">
						<img src="assets/images/portfolio/gallery_1.jpg" alt="">
						<div class="xs-portfolio-content">
							<span class="icon-plus-button"></span>
						</div>
					</a><!-- .xs-single-portfolio-item END -->
				</div><!-- .xs-portfolio-grid-item END -->
				<div class="xs-portfolio-grid-item">
					<a href="assets/images/portfolio/gallery_2.jpg" class="xs-single-portfolio-item xs-image-popup">
						<img src="assets/images/portfolio/gallery_2.jpg" alt="">
						<div class="xs-portfolio-content">
							<span class="icon-plus-button"></span>
						</div>
					</a><!-- .xs-single-portfolio-item END -->
				</div><!-- .xs-portfolio-grid-item END -->
				<div class="xs-portfolio-grid-item">
					<a href="assets/images/portfolio/gallery_3.jpg" class="xs-single-portfolio-item xs-image-popup">
						<img src="assets/images/portfolio/gallery_3.jpg" alt="">
						<div class="xs-portfolio-content">
							<span class="icon-plus-button"></span>
						</div>
					</a><!-- .xs-single-portfolio-item END -->
				</div><!-- .xs-portfolio-grid-item END -->
				<div class="xs-portfolio-grid-item">
					<a href="assets/images/portfolio/gallery_4.jpg" class="xs-single-portfolio-item xs-image-popup">
						<img src="assets/images/portfolio/gallery_4.jpg" alt="">
						<div class="xs-portfolio-content">
							<span class="icon-plus-button"></span>
						</div>
					</a><!-- .xs-single-portfolio-item END -->
				</div><!-- .xs-portfolio-grid-item END -->
				<div class="xs-portfolio-grid-item">
					<a href="assets/images/portfolio/gallery_5.jpg" class="xs-single-portfolio-item xs-image-popup">
						<img src="assets/images/portfolio/gallery_5.jpg" alt="">
						<div class="xs-portfolio-content">
							<span class="icon-plus-button"></span>
						</div>
					</a><!-- .xs-single-portfolio-item END -->
				</div><!-- .xs-portfolio-grid-item END -->
				<div class="xs-portfolio-grid-item xs-portfolio-grid-item-w2">
					<a href="assets/images/portfolio/gallery_6.jpg" class="xs-single-portfolio-item xs-image-popup">
						<img src="assets/images/portfolio/gallery_6.jpg" alt="">
						<div class="xs-portfolio-content">
							<span class="icon-plus-button"></span>
						</div>
					</a><!-- .xs-single-portfolio-item END -->
				</div><!-- .xs-portfolio-grid-item END -->
			</div><!-- .xs-portfolio-grid END -->
		</div><!-- .container end -->
	</div>	<!-- End galer�a section -->
@endsection