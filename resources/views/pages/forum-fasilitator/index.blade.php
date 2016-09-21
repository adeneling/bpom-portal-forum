@extends('layouts.frontend.app')

@section('title')Forum Fasilitator
@stop

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
				@if(auth('forum')->check())
					<a href="{{ route('forum-fasilitator.create') }}" class="btn btn-primary pull-right"> Buat Thread </a>
				@else
					<button class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal"> Login </button>
				@endif
			</div>
		</div>
	</div>
</div>

<!-- PAGE CONTENT -->
<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2 class="panel-title section-heading no-margin">Guide</h2>
					</div>
					<div class="panel-body">
						<div class="form-horizontal">
							<div class="form-group">
								<div class="col-md-12">
									<table class="table">
										<thead>
											<th>Topik</th>
											<th>Post</th>
											<th>Komentar Terakhir</th>
											<th>Komentar</th>
										</thead>
										<tbody>
											<tr>
												<td><b>Judul forum yang dibuat oleh admin</b></td>
												<td>12 Agustus 2016</td>
												<td>12 Agustus 2016</td>
												<td><span class="badge">42</span></td>
											</tr>
											<tr>
												<td><b>Judul forum yang dibuat oleh admin</b></td>
												<td>12 Agustus 2016</td>
												<td>12 Agustus 2016</td>
												<td><span class="badge">42</span></td>
											</tr>
											<tr>
												<td><b>Judul forum yang dibuat oleh admin</b></td>
												<td>12 Agustus 2016</td>
												<td>12 Agustus 2016</td>
												<td><span class="badge">42</span></td>
											</tr>
											<tr>
												<td><b>Judul forum yang dibuat oleh admin</b></td>
												<td>12 Agustus 2016</td>
												<td>12 Agustus 2016</td>
												<td><span class="badge">42</span></td>
											</tr>
											<tr>
												<td><b>Judul forum yang dibuat oleh admin</b></td>
												<td>12 Agustus 2016</td>
												<td>12 Agustus 2016</td>
												<td><span class="badge">42</span></td>
											</tr>
										</tbody>
									</table>
									<a href="" class="btn btn-primary pull-right"> Tampilkan Semua </a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		{{-- UMUM --}}
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2 class="panel-title section-heading no-margin">Umum</h2>
					</div>
					<div class="panel-body">
						<div class="form-horizontal">
							<div class="form-group">
								<div class="col-md-12">
									<table class="table">
										<thead>
											<th>Topik</th>
											<th>Post</th>
											<th>Komentar Terakhir</th>
											<th>Komentar</th>
										</thead>
										<tbody>
											<tr>
												<td><b>Judul forum yang dibuat oleh admin</b><br>By Kecamatan Banjar</td>
												<td>12 Agustus 2016</td>
												<td>12 Agustus 2016</td>
												<td><span class="badge">42</span></td>
											</tr>
											<tr>
												<td><b>Judul forum yang dibuat oleh admin</b><br>By Kecamatan Banjar</td>
												<td>12 Agustus 2016</td>
												<td>12 Agustus 2016</td>
												<td><span class="badge">42</span></td>
											</tr>
											<tr>
												<td><b>Judul forum yang dibuat oleh admin</b><br>By Kecamatan Banjar</td>
												<td>12 Agustus 2016</td>
												<td>12 Agustus 2016</td>
												<td><span class="badge">42</span></td>
											</tr>
											<tr>
												<td><b>Judul forum yang dibuat oleh admin</b><br>By Kecamatan Banjar</td>
												<td>12 Agustus 2016</td>
												<td>12 Agustus 2016</td>
												<td><span class="badge">42</span></td>
											</tr>
											<tr>
												<td><b>Judul forum yang dibuat oleh admin</b><br>By Kecamatan Banjar</td>
												<td>12 Agustus 2016</td>
												<td>12 Agustus 2016</td>
												<td><span class="badge">42</span></td>
											</tr>
										</tbody>
									</table>
									<a href="" class="btn btn-primary pull-right"> Tampilkan Semua </a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END PAGE CONTENT -->

<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Login</h4>
			</div>
			<div class="modal-body">
				{!! Form::open(['url' => 'forum/login', 'class' => 'form-horizontal left-aligned', 'role' => 'form']) !!}
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<div class="input-group">
								{!! Form::email('email', old('email'), ['class' => 'form-control', 'id' => 'email']) !!}
								<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="password" class="col-sm-2 control-label">Password</label>
						<div class="col-sm-10">
							<div class="input-group">
								{!! Form::password('password', ['class' => 'form-control', 'id' => 'password']) !!}
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<label class="fancy-checkbox">
								<input type="checkbox">
								<span>Remember me</span>
							</label>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Sign in</button>
						</div>
					</div>
				{!! Form::close() !!}
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
@stop