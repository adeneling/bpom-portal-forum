@extends('layouts.frontend.app')

@section('title', 'Gambar')

@section('content')
<div class="shop-main">
	<div class="container">
		<section class="tabbed-content">
			<h2 class="heading">MEDIA PROMOSI</h2>
			@include('pages.frontend.media._tab')
			<div class="tab-content product-carousel-content">
				<div class="tab-pane fade in active">
					@foreach($pictures as $picture)
						<div class="col-md-3" style="padding-top: 1em; padding-bottom: 1em;">
							<div class="portfolio-item">
								<div class="overlay"></div>
								<div class="info">
									<h4 class="title">{{ $picture->nama }}</h4>
									<a class="fancybox" rel="group" href="{{ asset(isset($picture->lokasi) ? $picture->lokasi : '') }}">
										<button class="btn btn-primary">Lihat</button>
									</a>
								</div>
								<div class="media-wrapper">
									<img src="{{ asset(isset($picture->lokasi) ? $picture->lokasi : '') }}" alt="{{ $picture->nama }}" height="200" width="300" />
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</section>
	</div>
</div>
@stop