@extends('layouts.frontend.app')

@section('title', 'Program')

@section('content')
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">@yield('title')</h1>
		{!! Breadcrumbs::render('program') !!}
	</div>
</div>

<div class="container">
	<div class="multiple-pricing-table">		
		<div class="row">
			@foreach($programs as $program)
				<div class="col-md-4 col-sm-4">
					<div class="pricing-item">
						<a href="{{ route('program.lihat', [base64_encode(config('app.salt').$program->id), str_slug($program->nama, '-')]) }}">
							<img src="{{ asset($program->media_foto) }}" width="300" height="300" alt="{{ $program->nama }}">
						</a>
						<h3>
							<a href="{{ route('program.lihat', [base64_encode(config('app.salt').$program->id), str_slug($program->nama, '-')]) }}" type="{{ $program->nama }}">
								{{ $program->nama }}
							</a>
						</h3>
						<p>{!! substr($program->deskripsi, 0, 100).'...' !!}</p>
					</div>
				</div>
			@endforeach
		</div>		
	</div>
</div>

@stop