@extends('layouts.frontend.app')

@section('title', 'Beranda')

@section('content')
<!-- SLIDER -->
<section class="hero-unit-slider slider-responsive no-margin">
	<div id="carousel-hero" class="slick-carousel">
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="{{ asset('assets/frontend/img/sliders/slider3-h500.png') }}" class="img-responsive" alt="Slider Image">
				<div class="carousel-caption">
					<h2 class="hero-heading">Badan Pengawas Obat dan Makanan</h2>
					<p class="lead">Pasar Aman</p>
				</div>
			</div>
			<div class="item">
				<img src="{{ asset('assets/frontend/img/sliders/slider2-h500.png') }}" class="img-responsive" alt="Slider Image">
				<div class="carousel-caption">
					<h2 class="hero-heading">FORUM</h2>
					<p class="lead">Badan Pengawas Obat dan Makanan</p>
					<a href="#" class="btn btn-lg hero-button">Ikut Forum</a>
				</div>
			</div>
			<div class="item">
				<img src="{{ asset('assets/frontend/img/sliders/slider1-h500.png') }}" class="img-responsive" alt="Slider Image">
				<div class="carousel-caption">
					<h2 class="hero-heading">Badan Pengawas Obat dan Makanan</h2>
					<p class="lead">Pasar Aman</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- SLIDER -->
<!-- BAHAN BERBAHAYA DAN PROGRAM -->
	<div class="main-features ">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6"></div>
				<div class="col-md-3 col-sm-6"><i class="fa fa-globe "></i>
					<h3 class="feature-heading">BAHAN BERBAHAYA</h3></div>
				<div class="col-md-3 col-sm-6"><i class="fa fa-refresh "></i>
					<h3 class="feature-heading">PROGRAM</h3></div>
				<div class="col-md-3 col-sm-6"></div>
			</div>
		</div>
	</div>
<!-- INTRO -->
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2 class="section-heading">TENTANG KAMI</h2>
				<p class="lead"><b>Badan Pengawas Obat dan Makanan</b></p>
				<p align="justify">Badan Pengawas Obat dan Makanan. Badan Pengawas Obat dan Makanan atau disingkat Badan POM adalah sebuah lembaga di Indonesia yang bertugas mengawasi peredaran obat-obatan dan makanan di Indonesia. Fungsi dan tugas badan ini yaitu mengatur makanan, suplemen makanan, obat-obatan, produk biofarmasi, transfusi darah, piranti medis, piranti untuk terapi dengan radiasi, produk kedokteran hewan, dan kosmetik.</p>
				<p align="justify">Berdirinya Badan Pengawas Obat dan Makanan di Indonesia yang pada masa penjajahan Belanda dikenal dengan apoteker yang berperan dalam pelayanan kesehatan di bidang kefarmasian yang membantu pemerintah dalam melindungi masyarakat dalam pengawasan obat yang beredar di masyarakat.</p>
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

<!-- PASAR AMAN -->
<section class="recent-works">
	<div class="container">
		<h2 class="section-heading pull-left">PASAR AMAN</h2>
		<a href="#" class="btn btn-primary pull-right">Lihat semua</a>
		<div class="clearfix"></div>
		<div class="portfolio-static">
			<div class="row">
				@foreach($pasarAman as $pasar)
					<div class="col-md-2">
						<div class="portfolio-item">
							<div class="overlay"></div>
							<div class="info">
								<h4 class="title">{{ $pasar->nama_pasar }}</h4>
								<a href="#" class="btn">read more</a>
							</div>
							<div class="media-wrapper">
								<img src="{{ asset($pasar->photo) }}" alt="Item Thumbnail" />
							</div>
						</div>
					</div>
				@endforeach
				{{-- <div class="col-md-2">
					<div class="portfolio-item">
						<div class="overlay"></div>
						<div class="info">
							<h4 class="title">Pasar Aman</h4>
							<a href="#" class="btn">read more</a>
						</div>
						<div class="media-wrapper">
							<img src="{{ asset('assets/frontend/img/portfolio/800x500/work3.png') }}" alt="Item Thumbnail" />
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="portfolio-item">
						<div class="overlay"></div>
						<div class="info">
							<h4 class="title">Raining</h4>
							<a href="#" class="btn">read more</a>
						</div>
						<div class="media-wrapper">
							<img src="{{ asset('assets/frontend/img/portfolio/800x500/work5.png') }}" alt="Item Thumbnail" />
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="portfolio-item">
						<div class="overlay"></div>
						<div class="info">
							<h4 class="title">Pasar Aman</h4>
							<a href="#" class="btn">read more</a>
						</div>
						<div class="media-wrapper">
							<img src="{{ asset('assets/frontend/img/portfolio/800x500/work6.png') }}" alt="Item Thumbnail" />
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="portfolio-item">
						<div class="overlay"></div>
						<div class="info">
							<h4 class="title">Pasar Aman</h4>
							<a href="#" class="btn">read more</a>
						</div>
						<div class="media-wrapper">
							<img src="{{ asset('assets/frontend/img/portfolio/800x500/work7.png') }}" alt="Item Thumbnail" />
						</div>
					</div>
				</div> --}}
			</div>
		</div>
	</div>
</section>		
<!-- END PASAR AMAN -->
@stop