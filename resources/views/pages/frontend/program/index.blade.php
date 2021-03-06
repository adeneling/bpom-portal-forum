@extends('layouts.frontend.app')

@section('title', 'Program')

@section('content')
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">@yield('title')</h1>
		{!! Breadcrumbs::render('program') !!}
	</div>
</div>

<br>

<div class="container">
	<div class="multiple-pricing-table">		
		<div class="row">
			@foreach($programs as $program)
				<div class="col-md-8">
					<div class="pricing-item">
						<a href="{{ route('program.lihat', [base64_encode(config('app.salt').$program->id), str_slug($program->nama, '-')]) }}">
							<img src="{{ asset($program->media_foto) }}" class="img-responsive" alt="{{ $program->nama }}">
						</a>
						<h3>
							<a href="{{ route('program.lihat', [base64_encode(config('app.salt').$program->id), str_slug($program->nama, '-')]) }}" type="{{ $program->nama }}">
								{{ $program->nama }}
							</a>
						</h3>
						<p>{!! $program->deskripsi !!}</p>
					</div>
				</div>
			@endforeach
			<div class="col-md-4">
				<div class="page-content page-search-result">
					<ul class="list-unstyled list-results">
						@foreach($dokumens as $dokumen)
						<li class="type-document">
							<div class="media">
								<a href="#" class="pull-left"><i class="fa fa-file-pdf-o"></i></a>
								<div class="media-body">
									<h5 style="text-align: justify;">{{ $dokumen->nama }}</h5>
									<span class="text-muted" style="float:left;">
										<a href="{{ asset($dokumen->file) }}" class="btn btn-primary"> Download</a> | 
										<a href="{{ route('program.dokumen.show', [encrypt(urlencode( asset($dokumen->file))) ]) }}" class="btn btn-success" target="_blank"> Preview</a>
									</span>
								</div>
							</div>
						</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>		
	</div>
</div>

@stop