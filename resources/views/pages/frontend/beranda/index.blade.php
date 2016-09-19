@extends('layouts.frontend.app')

@section('title')Beranda
@stop

@section('content')
<!-- SLIDER -->
<section class="hero-unit-slider slider-responsive no-margin">
	<div id="carousel-hero" class="slick-carousel">
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="{{ asset('assets/frontend/img/sliders/slider3-h500.png') }}" class="img-responsive" alt="Slider Image">
				<div class="carousel-caption">
					<h2 class="hero-heading">Badan Pengawasan Obat dan Makanan</h2>
					<p class="lead">Pasar Aman</p>
				</div>
			</div>
			<div class="item">
				<img src="{{ asset('assets/frontend/img/sliders/slider2-h500.png') }}" class="img-responsive" alt="Slider Image">
				<div class="carousel-caption">
					<h2 class="hero-heading">FORUM</h2>
					<p class="lead">Badan Pengawasan Obat dan Makanan</p>
					<a href="#" class="btn btn-lg hero-button">Ikut Forum</a>
				</div>
			</div>
			<div class="item">
				<img src="{{ asset('assets/frontend/img/sliders/slider1-h500.png') }}" class="img-responsive" alt="Slider Image">
				<div class="carousel-caption">
					<h2 class="hero-heading">Badan Pengawasan Obat dan Makanan</h2>
					<p class="lead">Pasar Aman</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- SLIDER -->
<!-- MAIN FEATURES -->
<div class="main-features ">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6"><i class="fa fa-cubes "></i>
				<h3 class="feature-heading">PASAR AMAN</h3></div>
			<div class="col-md-3 col-sm-6"><i class="fa fa-globe "></i>
				<h3 class="feature-heading">MAKANAN DAN OBAT-OBATAN</h3></div>
			<div class="col-md-3 col-sm-6"><i class="fa fa-refresh "></i>
				<h3 class="feature-heading">MASYARAKAT</h3></div>
			<div class="col-md-3 col-sm-6"><i class="fa fa-rocket "></i>
				<h3 class="feature-heading">FORUM DISKUSI</h3></div>
		</div>
	</div>
</div>
<!-- END MAIN FEATURES -->

<!-- INTRO -->
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2 class="section-heading">TENTANG KAMI</h2>
				<p class="lead">Badan Pengawasan Obat dan Makanan</p>
				<p>Energistically architect leading-edge users and inexpensive internal or "organic" sources. Distinctively evolve e-business resources after progressive intellectual capital. Objectively architect maintainable technologies via strategic convergence. Continually optimize stand-alone expertise with e-business e-services. Continually conceptualize client-centered opportunities and.</p>
				<p>Dynamically customize backward-compatible processes via front-end models. Distinctively evisculate an expanded array of scenarios after virtual information. Professionally predominate technically sound resources through impactful mindshare. Efficiently drive viral interfaces without inexpensive value. Credibly.</p>
			</div>
			<div class="col-md-6">
				<img src="{{ asset('assets/frontend/img/logo-bpom.png') }}" class="img-responsive" alt="Image Intro">
			</div>
		</div>
	</div>
</section>
<!-- END INTRO -->

<!-- LATEST NEWS -->
<section>
	<div class="container">
		<h2 class="section-heading">BERITA TERBARU</h2>
		<div class="row">
			<div class="col-md-4">
				<div class="news-item news-featured">
					<a href="#"><img src="{{ asset('assets/frontend/img/news/featured-news.png') }}" class="img-responsive" alt="News Thumbnail"></a>
					<h3 class="news-title"><a href="#">In Demand: Collaboration Skill</a></h3>
					<p>Proactively engage orthogonal growth strategies without resource-leveling testing procedures. Seamlessly predominate interoperable growth strategies.</p>
					<div class="news-meta">
						<span class="news-datetime">23-02-2015</span>
						<span class="news-comment-count pull-right"><a href="#">65 Comments</a></span>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="news-item margin-bottom-30px clearfix">
							<a href="#"><img src="{{ asset('assets/frontend/img/news/news1.png') }}" class="img-responsive pull-left" alt="News Thumbnail"></a>
							<div class="right">
								<h3 class="news-title"><a href="#">Growth Strategies We Must Know</a></h3>
								<p>Proactively engage orthogonal growth strategies without resource-leveling testing procedures.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="news-item margin-bottom-30px clearfix">
							<a href="#"><img src="{{ asset('assets/frontend/img/news/news2.png') }}" class="img-responsive pull-left" alt="News Thumbnail"></a>
							<div class="right">
								<h3 class="news-title"><a href="#">Alternative E-commerce</a></h3>
								<p>Proactively engage orthogonal growth strategies without resource-leveling testing procedures.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="news-item margin-bottom-30px clearfix">
							<a href="#"><img src="{{ asset('assets/frontend/img/news/news3.png') }}" class="img-responsive pull-left" alt="News Thumbnail"></a>
							<div class="right">
								<h3 class="news-title"><a href="#">Products Research Methodology &amp; Principles </a></h3>
								<p>Proactively engage orthogonal growth strategies without resource-leveling testing procedures.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="news-item margin-bottom-30px clearfix">
							<a href="#"><img src="{{ asset('assets/frontend/img/news/news4.png') }}" class="img-responsive pull-left" alt="News Thumbnail"></a>
							<div class="right">
								<h3 class="news-title"><a href="#">Understanding Globally Scale Quality Network</a></h3>
								<p>Proactively engage orthogonal growth strategies without resource-leveling testing procedures.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="news-item margin-bottom-30px clearfix">
							<a href="#"><img src="{{ asset('assets/frontend/img/news/news5.png') }}" class="img-responsive pull-left" alt="News Thumbnail"></a>
							<div class="right">
								<h3 class="news-title"><a href="#">Professional Leverage</a></h3>
								<p>Proactively engage orthogonal growth strategies without resource-leveling testing procedures.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="see-all-news">
							<a href="#">See all news <i class="fa fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END LATEST NEWS -->
@stop