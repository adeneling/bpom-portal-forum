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
			<div class="col-md-4">
				<a href="{{ route('profile.edit', encrypt(auth('forum')->user()->id)) }}" class="btn btn-primary pull-left">Ubah Profile</a>
			</div>
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
				<div class="panel panel-primary">
					<div class="panel-heading">
						Profile
					</div>
					<div class="panel-content">
						<div class="row">
							<div class="row">
								<div class="col-md-2" style="padding-top: 2em; padding-bottom: 2em;">
									<center>
										<div class="user-info" href="#">
											<img class="avatar img-circle img-thumbnail" src="http://snipplicious.com/images/guest.png"
												width="64" alt="Generic placeholder image"><br>
											<strong><a href="user.html">asdasd</a></strong>
											<small>Member</small>
											<br>
											<small class="btn-group btn-group-xs">
											<a class="btn btn-default"><i class="fa fa-thumbs-o-up"></i></a>
											<a class="btn btn-default"><i class="fa fa-thumbs-o-down"></i></a>
											<strong class="btn btn-success">+451</strong>
											</small>
										</div>
									</center>
								</div>

								<div class="col-md-10" style="padding: 2em 2em 2em 2em;">
									<table class="table">
										<thead>
											<th>Topik</th>
											<th>Post</th>
											<th>Komentar Terakhir</th>
											<th>Komentar</th>
										</thead>
										<tbody>
											@foreach($user->thread as $thread)
												<?php
													$countComment = $thread->comment()->commentThread($thread->id)->count();
												?>
												<tr>
													<td><b><a href="{{ App\Helpers\AppHelpers::urlThreadForum($thread->id, $thread->judulThread) }}">{{ $thread->judulThread }}</a></b></td>
													<td>{{ date("d F Y", strtotime($thread->created_at)) }}</td>
													<td>12 Agustus 2016</td>
													<td><span class="badge">{{ $countComment }}</span></td>
												</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop