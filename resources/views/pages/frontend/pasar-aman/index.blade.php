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
		<div class="panel panel-primary">
			<div class="panel-body">
				<h3 align="justify">Pasar Aman adalah pasar percontohan yang diintervensi oleh Badan POM, dimana secara periodik dilakukan pengawasan terhadap pangan yang diduga mengandung bahan berbahaya dan dalam periode pengawasan terakhir tidak ditemukan adanya penyalahgunaan bahan berbahaya dalam pangan.</h3>
			</div>
		</div>
		
		<ul class="list-unstyled list-results">
			@foreach($pasars as $pasar)
				<?php $pasarRemote = App\Models\Remote\Pasar::find($pasar->kode_pasar); ?>
				<li class="type-portfolio">
					<div class="media clearfix">
						<a href="{{ route('pasar-aman.lihat', [base64_encode(config('app.salt').$pasarRemote->kode_pasar), str_slug($pasarRemote->nama_pasar, '-')]) }}" class="pull-left">
							<img src="{{ $pasarRemote->photo != '' ? str_replace('../', 'http://sipaman.pom.go.id/sipaman/', $pasarRemote->photo) : asset('assets/frontend/img/logo-bpom.png') }}" title="{{ $pasarRemote->nama_pasar }}" class="media-object" alt="{{ $pasarRemote->nama_pasar }}">
						</a>
						<div class="media-body">
							<h3>
								<a href="{{ route('pasar-aman.lihat', [base64_encode(config('app.salt').$pasarRemote->kode_pasar), str_slug($pasarRemote->nama_pasar, '-')]) }}" type="{{ $pasarRemote->nama_pasar }}">
									{{ $pasarRemote->nama_pasar }}
								</a>
							</h3>
							<p>
								Provinsi: {{ $pasarRemote->nama_prop != '' ? $pasarRemote->nama_prop : '-' }}
								<br>
								Kab./Kota/Kecamatan: {{ $pasarRemote->nama_kab != '' ? $pasarRemote->nama_kab : '-' }}
								<br>
								Alamat Pasar: {{ $pasarRemote->alamat_pasar != '' ? $pasarRemote->alamat_pasar : '-' }}
								<br>
							</p>
							<div class="news-meta">
								<span class="news-datetime"><strong>{{ 'Periode pengawasan: '. $periode['periode'] }}</strong></span>
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