@extends('layouts.frontend.app')

@section('title', 'Pasar Aman')

@section('content')
<div class="page-content">
	<div class="container">
		<!-- BLOG SINGLE -->
		<div class="blog single full-thumbnail">
			<!-- blog post -->
			<article class="entry-post">
				<header class="entry-header">
					<h2 class="entry-title">
						{{ $pasar->nama_pasar }}
					</h2>
					<div class="meta-line clearfix">
						<div class="meta-tag-comment pull-right">
							<span class="post-comment"><i class="fa fa-calendar"></i> <a href="#">Dibuat: {{ $pasar->created_at }}</a></span>
						</div>
					</div>
				</header>
				<div class="entry-content clearfix">
					<figure class="featured-image">
						<center>
							<img src="{{ $pasar->photo != '' ? str_replace('../', 'http://sipaman.pom.go.id/sipaman/', $pasar->photo) : asset('assets/frontend/img/logo-bpom.png') }}" class="img-responsive" alt="featured-image" />
							<span><strong>Alamat Pasar: {{ $pasar->alamat_pasar }}</strong></span>
						</center>						
					</figure>
					<div class="excerpt">
						<div class="col-md-1">
						</div>
						<div class="col-md-10">
							<p>
								Provinsi: {{ $pasar->nama_prop != '' ? $pasar->nama_prop : '-' }}
								<br>
								Kab./Kota/Kecamatan: {{ $pasar->nama_kab != '' ? $pasar->nama_kab : '-' }}
								<br>
								Alamat Pasar: {{ $pasar->alamat_pasar != '' ? $pasar->alamat_pasar : '-' }}
								<br>
								{!! $pasar->konten !!}
							</p>
						</div>						
						<div class="col-md-1">
						</div>
					</div>
				</div>
				<hr>
				<center>
					<a href="{{ url('pasar-aman') }}" class="btn btn-primary">KEMBALI</a>
				</center>				
			</article>
		</div>
	</div>
</div>
@stop