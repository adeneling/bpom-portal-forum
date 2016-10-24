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
								<a href="{{ route('pedoman.lihat', [base64_encode(config('app.salt').$pedoman->id), str_slug($pedoman->judul, '-')]) }}">
									{{ $pedoman->judul }}
								</a>
							</h3>
							<p>{!! substr($pedoman->konten, 0, 400).'...' !!}</p>
							<span class="text-muted">
								<a href="" class="btn btn-primary"> Preview</a> | <a href="" class="btn btn-success"> Download</a>
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