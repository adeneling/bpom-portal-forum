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
					<div class="product-carousel" id="product-carousel2">
						@foreach($pictures as $picture)
							<div class="product-item">
								<a href="{{ asset(isset($picture->lokasi) ? $picture->lokasi : '') }}" class="fancybox" rel="group"><img src="{{ asset(isset($picture->lokasi) ? $picture->lokasi : '') }}" class="img-responsive center-block" alt="{{ $picture->nama }}"></a>
								<div class="info">
									<h3 class="title"><a href="{{ asset(isset($picture->lokasi) ? $picture->lokasi : '') }}" title="{{ $picture->nama }}" class="fancybox" rel="group">{{ $picture->nama }}</a></h3>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
@stop