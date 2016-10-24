@extends('layouts.frontend.app')

@section('title', 'Pedoman')

@section('content')
<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">@yield('title')</h1>
		{!! Breadcrumbs::render('pedoman') !!}
	</div>
</div>
<!-- END BREADCRUMBS -->

<!-- PAGE CONTENT -->
<div class="page-content page-search-result">
	<div class="container">
		<ul class="list-unstyled list-results">
			@foreach($pedomans as $pedoman)
				<li class="type-document">
					<div class="media">
						<a href="#" class="pull-left"><i class="fa fa-file-pdf-o"></i></a>
						<div class="media-body">
							<h3>
								{{ $pedoman->judul }}
							</h3>
							<p>{!! substr($pedoman->konten, 0, 400).'...' !!}</p>
							<span class="text-muted">
								<a href="{{ asset($pedoman->media_dokumen) }}" class="btn btn-primary"> Download</a> | <a href="{{ asset($pedoman->media_dokumen) }}" class="btn btn-success" target="_blank"> Preview</a>
							</span>
						</div>
					</div>
				</li>
			@endforeach
		</ul>
		{{ $pedomans->appends(compact('q'))->links() }}
	</div>
</div>

@stop