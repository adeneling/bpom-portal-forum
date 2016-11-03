@extends('layouts.frontend.app')

@section('title', 'Bahan Berbahaya')

@section('content')


<div class="page-content page-search-result">
	<div class="container">
		<h2>Cari Bahan Berbahaya</h2>
		<!-- Search Form -->
		<form class="form form-horizontal" method="GET" action="{{ url('bahan-berbahaya') }}">
			<div class="input-group input-group-lg">
				<input class="form-control input-lg" type="search" name="q" placeholder="Cari bahan berbahaya"/>
				<span class="input-group-btn">
				<button type="submit" class="btn btn-primary btn-lg"><i class="icon ion-android-search"></i> Cari</button>
			</span>
			</div>
		</form>
		<ul class="list-unstyled list-results">
			@foreach($bahans as $bahan)
				<li class="type-portfolio">
					<div class="media clearfix">
						<a href="{{ route('bahan-berbahaya.lihat', [base64_encode(config('app.salt').$bahan->id), str_slug($bahan->nama, '-')]) }}" class="pull-left">
							<img src="{{ asset($bahan->media_foto) }}" class="media-object" alt="{{ $bahan->nama }}">
						</a>
						<div class="media-body">
							<h3><a href="{{ route('bahan-berbahaya.lihat', [base64_encode(config('app.salt').$bahan->id), str_slug($bahan->nama, '-')]) }}" type="{{ $bahan->nama }}">
								{{ $bahan->nama }}</a>
							</h3>
							<p>{!! substr($bahan->deskripsi, 0, 400).'...' !!}</p>
							<div class="news-meta">
								<span class="news-datetime"><strong>{{ $bahan->created_at }}</strong></span>
							</div>
						</div>
					</div>
				</li>
			@endforeach
		</ul>
		{{ $bahans->appends(compact('q'))->links() }}
	</div>
</div>
<!-- END PAGE CONTENT -->

@stop