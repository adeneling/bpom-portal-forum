@extends('layouts.frontend.app')

@section('title', 'Visual')

@section('content')
<div class="shop-main">
	<div class="container">
		<section class="tabbed-content">
			<h2 class="heading">VISUAL</h2>
			@include('pages.frontend.media._tab')
			<div class="tab-content product-carousel-content">
				<div class="tab-pane fade in active">
					<div class="page-content page-search-result">
						<ul class="list-unstyled list-results">

							@foreach($docs as $doc)
								<li class="type-document">
									<div class="media">
										<a href="#" class="pull-left"><i class="fa fa-file-pdf-o"></i></a>
										<div class="media-body">
											<h3>
												{{ $doc->nama }}
											</h3>
											<p>{{ $doc->deskripsi }}</p>
											<span class="text-muted">
												<a href="{{ asset($doc->lokasi) }}" class="btn btn-primary"> Download</a> | <a href="{{ route('media.dokumen.show', [encrypt(urlencode( asset($doc->lokasi))) ]) }}" class="btn btn-success" target="_blank"> Preview</a>
											</span>
										</div>
									</div>
								</li>
							@endforeach

						</div>
					</ul>
				</div>
			</div>
		</section>
	</div>
</div>

<div class="shop-main">
	<div class="container">
		<section class="tabbed-content">
			<h2 class="heading">GAMBAR</h2>
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