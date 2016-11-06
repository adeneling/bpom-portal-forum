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
		<div class="portfolio-static">
			<div class="row">
				@foreach($galeris as $galeri)
					<div class="col-md-3" style="padding-top: 1em; padding-bottom: 1em;">
						<div class="portfolio-item">
							<div class="overlay"></div>
							<div class="info">
								<h4 class="title">{{ $galeri->judul }}</h4>
								<a class="fancybox" rel="group" href="{{ asset(isset($galeri->foto) ? $galeri->foto : '') }}" title="{{ $galeri->judul }}">
									<button class="btn btn-primary">Lihat</button>
								</a>
							</div>
							<div class="media-wrapper">
								<img src="{{ asset($galeri->foto) }}" alt="Item Thumbnail" height="200" width="300" />
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
</section>		
<!-- END PASAR AMAN -->
@stop