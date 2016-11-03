@extends('layouts.frontend.app')

@section('title', 'Pasar Aman')

@section('content')
<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">@yield('title')</h1>
	</div>
</div>
<!-- END BREADCRUMBS -->

<!-- PAGE CONTENT -->
<div class="page-content page-search-result">
	<div class="container">
		<ul class="list-unstyled list-results">
			@foreach($pasars as $pasar)
				<li class="type-portfolio">
					<div class="media clearfix">
						<a href="{{ route('pasar-aman.lihat', [base64_encode(config('app.salt').$pasar->id), str_slug($pasar->nama_pasar, '-')]) }}" class="pull-left">
							<img src="{{ asset(isset($pasar->photo) ? $pasar->photo : 'assets/frontend/img/logo-bpom.png') }}" class="media-object" alt="{{ $pasar->nama_pasar }}">
						</a>
						<div class="media-body">
							<h3>
								<a href="{{ route('pasar-aman.lihat', [base64_encode(config('app.salt').$pasar->id), str_slug($pasar->nama_pasar, '-')]) }}" type="{{ $pasar->nama_pasar }}">
									{{ $pasar->nama_pasar }}
								</a>
							</h3>
							
							<div class="news-meta">
								<span class="news-datetime"><strong>{{ $pasar->created_at }}</strong></span>
							</div>
						</div>
					</div>
				</li>
			@endforeach
		</ul>
		{{ $pasars->appends(compact('q'))->links() }}
	</div>
</div>
<!-- END PAGE CONTENT -->

@stop