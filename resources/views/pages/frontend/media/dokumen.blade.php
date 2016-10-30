@extends('layouts.frontend.app')

@section('title', 'Dokumen')

@section('content')
<div class="shop-main">
	<div class="container">
		<section class="tabbed-content">
			<h2 class="heading">MEDIA PROMOSI</h2>
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
												<a href="#" class="btn btn-primary"> Download</a> | <a href="{{ route('media.dokumen.show', [encrypt(urlencode( asset($doc->lokasi))) ]) }}" class="btn btn-success" target="_blank"> Preview</a>
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
@stop