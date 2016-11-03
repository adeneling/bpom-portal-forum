@extends('layouts.frontend.app')

@section('title', 'Peta Situs')

@section('content')
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">@yield('title')</h1>
		{!! Breadcrumbs::render('peta-situs') !!}
	</div>
</div>
<!-- PAGE CONTENT -->
<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul>
					<li><a href="{{ url('/') }}">Beranda</a></li>
					<li><a href="{{ url('berita') }}">Berita</a></li>
					<li><a href="{{ url('galeri') }}">Galeri</a></li>
					<li>
						Daftar Pasar
						<ul>
							<li><a href="{{ url('pasar-aman') }}">Pasar Aman</a></li>
							<li><a href="{{ url('pasar-pengawasan') }}">Pasar dalam Pengawasan</a></li>
						</ul>
					</li>
					<li>
						Publikasi
						<ul>
							<li><a href="{{ url('program') }}">Program</a></li>
							<li><a href="{{ url('pedoman') }}">Pedoman</a></li>
							<li>
								<a href="{{ url('media-promosi') }}">Media Promosi</a>
								<ul>
									<li><a href="{{ url('media-informasi/video') }}">Video</a></li>
									<li><a href="{{ url('media-informasi/audio') }}">Audio</a></li>
									<li><a href="{{ url('media-informasi/gambar') }}">Gambar</a></li>
									<li><a href="{{ url('media-informasi/dokumen') }}">Dokumen</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="{{ url('forum-fasilitator/thread') }}">Forum Fasilitator</a></li>
					<li><a href="{{ url('faq') }}">FAQ</a></li>
					<li><a href="{{ url('hubungi-kami') }}">Hubungi Kami</a></li>
					<li><a href="{{ url('peta-situs') }}">Peta Situs</a></li>
					<li><a href="http://sipaman.pom.go.id/" target="_blank">SIPAMAN</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- END PAGE CONTENT -->

@stop