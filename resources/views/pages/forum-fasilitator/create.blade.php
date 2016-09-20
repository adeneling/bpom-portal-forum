@extends('layouts.frontend.app')

@section('title', 'Forum Fasilitator')

@section('content')
<!-- SLIDER -->
<section class="hero-unit-slider slider-responsive no-margin">
	<div id="carousel-hero" class="slick-carousel">
		<div class="carousel-inner" role="listbox">
			<div class="item">
				<img src="{{ asset('assets/frontend/img/sliders/slider2-h500.png') }}" class="img-responsive" alt="Slider Image">
				<div class="carousel-caption">
					<h2 class="hero-heading">FORUM</h2>
					<p class="lead">Badan Pengawasan Obat dan Makanan</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- SLIDER -->

<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">@yield('title')</h1>
		<ol class="breadcrumb">
			<li>Navigasi</li>
			<li class="active">@yield('title')</li>
		</ol>
	</div>
</div>
<!-- END BREADCRUMBS -->
<!-- TOPBAR -->
<!-- PAGE CONTENT -->
<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<input type="text" class="form-control" placeholder="Cari di forum">
			</div>
			<div class="col-md-8">
				<a href="{{ route('forum-fasilitator.create') }}" class="btn btn-primary pull-right"> Buat Thread </a>
			</div>
		</div>
	</div>
</div>

<!-- PAGE CONTENT -->
<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- THREAD BARU -->
				<h2 class="section-heading">Thread Baru</h2>
				<form class="form-horizontal left-aligned" role="form">
					<div class="form-group">
						<label for="judul-thread" class="col-sm-2 control-label">Judul Thread</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="judul-thread" placeholder="Judul Thread">
						</div>
					</div>
					<div class="form-group">
						<label for="konten" class="col-sm-2 control-label">Konten</label>
						<div class="col-sm-10">
							<textarea name="konten" id="konten" class="form-control"></textarea>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-2"></div>
						<div class="col-sm-10">
							<button type="submit" class="btn btn-primary">Buat Thread</button>
						</div>
					</div>
				</form>
				<!-- END THREAD BARU -->
			</div>
		</div>
	</div>
</div>
@stop

@section('js')
	<script src="//cdn.ckeditor.com/4.5.11/full/ckeditor.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			CKEDITOR.replace('konten');
		});
	</script>
@stop