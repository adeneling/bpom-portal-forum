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
			<div class="col-md-12">
				<div class="row">
					<div class="col-sm-12">
						<a href="{{ route('profile.index') }}" class="btn btn-primary"> Back </a>
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
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h2 class="panel-title section-heading no-margin">Ubah Profile</h2>
				</div>
				<div class="panel-body">
					<div class="form-horizontal">
						<div class="col-md-12">
							{!! Form::model($user, ['route' => ['profile.update', encrypt($user->id)], 'class' => 'form-horizontal left-aligned', 'id' => 'formEditUser', 'name' => 'formEditUser' ,'role' => 'form', 'files' => true]) !!}
								<div class="form-group">
									<label for="judul-thread" class="col-sm-2 control-label">Photo Profile</label>
									<div class="col-sm-10">
										<image src="{{ App\Helpers\AppHelpers::photoProfile(auth('forum')->user()->email) }}">
									</div>
								</div>
								<div class="form-group">
									<label for="konten" class="col-sm-2 control-label">Gravatar</label>
									<div class="col-sm-6">
										{{ Form::checkbox('name', 'value', true, ['class' => 'form-control', 'id' => 'gravatar']) }} Gunakan Gravatar
									</div>
								</div>
								<div class="form-group">
									<label for="konten" class="col-sm-2 control-label">Nama Lengkap</label>
									<div class="col-sm-6">
										{!! Form::text('namaLengkap', $user->name, ['class' => 'form-control', 'id' => 'namaLengkap']) !!}
									</div>
								</div>
								<div class="form-group">
									<label for="konten" class="col-sm-2 control-label">Password</label>
									<div class="col-sm-5">
										{!! Form::password('password', ['class' => 'form-control', 'id' => 'password']) !!}
									</div>
								</div>
								<div class="form-group">
									<label for="exampleInputFile" class="col-md-2 control-label">Upload Profile Picture</label>
									<div class="col-md-3">
										{!! Form::file('image', ['id' => 'image']) !!}
										<p class="help-block">
											<em>Upload your profile picture</em>
										</p>
									</div>
								</div>
								<hr>
								<div class="form-group">
									<div class="col-sm-12">
										<center>
											<button type="submit" class="btn btn-primary">Ubah Profile</button>
										</center>										
									</div>
								</div>
							{!! Form::close() !!}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop