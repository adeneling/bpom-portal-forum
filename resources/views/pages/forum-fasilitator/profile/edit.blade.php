@extends('layouts.frontend.app')

@section('title', 'Profile')

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
		{!! Breadcrumbs::render('profile') !!}
	</div>
</div>

<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-8">
				<div class="row">
					<div class="col-sm-8">
						<a href="{{ route('thread.create') }}" class="btn btn-primary pull-right"> Buat Thread </a>
					</div>
					<div class="col-sm-4">
						<input type="text" class="form-control" placeholder="Cari di forum">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END BREADCRUMBS -->
<!-- PAGE CONTENT -->
<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="section-heading">Ubah Profile</h2>
				{!! Form::model($user, ['route' => ['profile.update', encrypt($user->id)], 'class' => 'form-horizontal left-aligned', 'id' => 'formEditUser', 'name' => 'formEditUser' ,'role' => 'form', 'files' => true]) !!}
					<div class="form-group">
						<label for="judul-thread" class="col-sm-2 control-label">Photo Profile</label>
						<div class="col-sm-10">
							<image src="{{ App\Helpers\AppHelpers::photoProfile(auth('forum')->user()->email) }}">
						</div>
					</div>
					<div class="form-group">
						<label for="konten" class="col-sm-2 control-label">Nama Lengkap</label>
						<div class="col-sm-10">
							{!! Form::text('namaLengkap', $user->name, ['class' => 'form-control', 'id' => 'namaLengkap']) !!}
						</div>
					</div>
					<div class="form-group">
						<label for="exampleInputFile" class="col-md-2 control-label">File input</label>
						<div class="col-md-3">
							{!! Form::file('image', ['id' => 'image']) !!}
							<p class="help-block">
								<em>Example block-level help text here.</em>
							</p>
						</div>
						<div class="col-md-7">
							<button class="btn btn-primary btn-xs" id="btnUploadImage" >Upload Image</button>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-2"></div>
						<div class="col-sm-10">
							<button class="btn btn-primary" id="btnLihatGallery" >Lihat Gallery</button>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-2"></div>
						<div class="col-sm-10">
							{!! Recaptcha::render() !!}
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-2"></div>
						<div class="col-sm-10">
							<button type="submit" class="btn btn-primary">Buat Thread</button>
						</div>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@stop