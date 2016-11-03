@extends('layouts.frontend.app')

@section('title', 'Pasar Aman')

@section('content')
<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">@yield('title')</h1>
		{!! Breadcrumbs::render('pasar-aman') !!}
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
							<p>
								Kota: {{ isset($pasar->kota['kota']) ? $pasar->kota['kota'] : '-' }}
								<br>
								Provinsi: {{ isset($pasar->provinsi['provinsi']) ? $pasar->provinsi['provinsi'] : '-' }}
								<br>
								Kecamatan: {{ isset($pasar->kecamatan['kecamatan']) ? $pasar->kecamatan['kecamatan'] : '-' }}
								<br>
								Alamat Pasar: {{ isset($pasar->alamat_pasar) ? $pasar->alamat_pasar : '-' }}
							</p>
							<div class="news-meta">
								<span class="news-datetime"><strong>{{ date("d F Y", strtotime($pasar->created_at)) }}</strong></span>
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