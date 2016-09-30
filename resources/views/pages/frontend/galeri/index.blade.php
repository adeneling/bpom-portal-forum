@extends('layouts.frontend.app')

@section('title', 'Galeri')

@section('content')
<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">@yield('title')</h1>
		{!! Breadcrumbs::render('galeri') !!}
	</div>
</div>
<!-- END BREADCRUMBS -->
<br>
<!-- PASAR AMAN -->
<section class="recent-works">
	<div class="container">
		<h2 class="section-heading pull-left">Galeri</h2>
		<div class="clearfix"></div>
		<div class="portfolio-static">
			<div class="row">
				<div class="col-md-3">
					<div class="portfolio-item">
						<div class="overlay"></div>
						<div class="info">
							<h4 class="title">Pasar Aman</h4>
							<a href="#" class="btn">Lihat</a>
						</div>
						<div class="media-wrapper">
							<img src="{{ asset('assets/frontend/img/portfolio/800x500/work1.png') }}" alt="Item Thumbnail" />
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="portfolio-item">
						<div class="overlay"></div>
						<div class="info">
							<h4 class="title">Pasar Aman</h4>
							<a href="#" class="btn">Lihat</a>
						</div>
						<div class="media-wrapper">
							<img src="{{ asset('assets/frontend/img/portfolio/800x500/work2.png') }}" alt="Item Thumbnail" />
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="portfolio-item">
						<div class="overlay"></div>
						<div class="info">
							<h4 class="title">Pasar Aman</h4>
							<a href="#" class="btn">Lihat</a>
						</div>
						<div class="media-wrapper">
							<img src="{{ asset('assets/frontend/img/portfolio/800x500/work3.png') }}" alt="Item Thumbnail" />
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="portfolio-item">
						<div class="overlay"></div>
						<div class="info">
							<h4 class="title">Pasar Aman</h4>
							<a href="#" class="btn">Lihat</a>
						</div>
						<div class="media-wrapper">
							<img src="{{ asset('assets/frontend/img/portfolio/800x500/work3.png') }}" alt="Item Thumbnail" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>		
<!-- END PASAR AMAN -->
@stop