@extends('layouts.frontend.app')

@section('title', 'Berita')

@section('content')
<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">@yield('title')</h1>
		{!! Breadcrumbs::render('berita') !!}
	</div>
</div>
<!-- END BREADCRUMBS -->

<div class="page-content page-search-result">
	<div class="container">
		<ul class="list-unstyled list-results">
			@foreach($beritas as $berita)
				<li class="type-portfolio">
					<div class="media clearfix">
						<a href="{{ route('berita.lihat', [base64_encode(config('app.salt').$berita->id), str_slug($berita->judul, '-')]) }}" class="pull-left">
							<img src="{{ asset($berita->foto) }}" class="media-object" alt="{{ $berita->judul }}">
						</a>
						<div class="media-body">
							<h3><a href="{{ route('berita.lihat', [base64_encode(config('app.salt').$berita->id), str_slug($berita->judul, '-')]) }}" type="{{ $berita->judul }}">
								{{ $berita->judul }}</a>
							</h3>
							<p>{!! substr($berita->konten, 0, 400).'...' !!}</p>
							<div class="news-meta">
								<span class="news-datetime"><strong>{{ $berita->created_at }}</strong></span>
							</div>
						</div>
					</div>
				</li>
			@endforeach
		</ul>
		{{ $beritas->appends(compact('q'))->links() }}
	</div>
</div>
<!-- END PAGE CONTENT -->
@stop