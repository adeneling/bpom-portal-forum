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

							<li class="type-document">
								<div class="media">
									<a href="#" class="pull-left"><i class="fa fa-file-pdf-o"></i></a>
									<div class="media-body">
										<h3>
											asdfadsf
										</h3>
										<p>asdfasdfasdfasdf</p>
										<span class="text-muted">
											<a href="https://view.officeapps.live.com/op/view.aspx?src={{ urlencode( asset('PERMANENTLY ACTIVATED INTERNET DOWNLOAD MANAGER.docx') ) }}" class="btn btn-primary"> Download</a> | <a href="#" class="btn btn-success" target="_blank"> Preview</a>
										</span>
									</div>
								</div>
							</li>

							<li class="type-document">
								<div class="media">
									<a href="#" class="pull-left"><i class="fa fa-file-pdf-o"></i></a>
									<div class="media-body">
										<h3>
											asdfadsf
										</h3>
										<p>asdfasdfasdfasdf</p>
										<span class="text-muted">
											<a href="http://docs.google.com/viewer?url={{ urlencode( asset('PERMANENTLY ACTIVATED INTERNET DOWNLOAD MANAGER.docx') ) }}&embedded=true" class="btn btn-primary"> Download</a> | <a href="#" class="btn btn-success" target="_blank"> Preview</a>
										</span>
									</div>
								</div>
							</li>

							<li class="type-document">
								<div class="media">
									<a href="#" class="pull-left"><i class="fa fa-file-pdf-o"></i></a>
									<div class="media-body">
										<h3>
											asdfadsf
										</h3>
										<p>asdfasdfasdfasdf</p>
										<span class="text-muted">
											<a href="#" class="btn btn-primary"> Download</a> | <a href="{{ route('media.dokumen.show', [urlencode( asset('PERMANENTLY ACTIVATED INTERNET DOWNLOAD MANAGER.docx') )]) }}" class="btn btn-success" target="_blank"> Preview</a>
										</span>
									</div>
								</div>
							</li>

						</div>
					</ul>
				</div>
			</div>
		</section>
	</div>
</div>
@stop