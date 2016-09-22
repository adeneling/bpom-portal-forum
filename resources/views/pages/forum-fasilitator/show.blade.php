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
				<a href="" class="btn btn-primary pull-left">Tanggapi Thread</a>
			</div>
			<div class="col-md-8">
				<div class="row">
					<div class="col-sm-8">
						<a href="{{ route('forum-fasilitator.create') }}" class="btn btn-primary pull-right">Buat Thread</a>
					</div>
					<div class="col-sm-4">
						<input type="text" class="form-control" placeholder="Cari di forum">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<ul class="media-list forum">
					<li class="media well">
						<div class="pull-left user-info" href="#">
							<img class="avatar img-circle img-thumbnail" src="http://snipplicious.com/images/guest.png"
								width="64" alt="Generic placeholder image">
							<strong><a href="user.html">{{ $thread->forumUsers->name }}</a></strong>
							<small>Member</small>
							<br>
							<small class="btn-group btn-group-xs">
							<a class="btn btn-default"><i class="fa fa-thumbs-o-up"></i></a>
							<a class="btn btn-default"><i class="fa fa-thumbs-o-down"></i></a>
							<strong class="btn btn-success">+451</strong>
							</small>
							<hr>
						</div>
						<div class="media-body">
							<!-- Post Info Buttons -->
							<div class="forum-post-panel btn-group btn-group-xs">
								<a href="#" class="btn btn-default"><i class="fa fa-clock-o"></i> Posted 3 weeks ago</a>
								<a href="#" class="btn btn-danger"><i class="fa fa-warning"></i> Report post</a>
							</div>
							<!-- Post Info Buttons END -->
							<!-- Post Text -->
							{!! $thread->konten !!}
							<!-- Post Text EMD -->
						</div>
					</li>

					<hr>

					@foreach($thread->comment as $comment)

						<li class="media well">
							<div class="pull-left user-info" href="#">
								<img class="avatar img-circle img-thumbnail" src="http://snipplicious.com/images/guest.png"
									width="64" alt="Generic placeholder image">
								<strong><a href="user.html">{{ $comment->forumUsers->name }}</a></strong>
								<small>Member</small>
								<br>
								<small class="btn-group btn-group-xs">
								<a class="btn btn-default"><i class="fa fa-thumbs-o-up"></i></a>
								<a class="btn btn-default"><i class="fa fa-thumbs-o-down"></i></a>
								<strong class="btn btn-success">+451</strong>
								</small>
							</div>
							<div class="media-body">
								<!-- Post Info Buttons -->
								<div class="forum-post-panel btn-group btn-group-xs">
									<a href="#" class="btn btn-default"><i class="fa fa-clock-o"></i> Posted 3 weeks ago</a>
									<a href="#" class="btn btn-danger"><i class="fa fa-warning"></i> Report post</a>
								</div>
								<!-- Post Info Buttons END -->
								<!-- Post Text -->
								{!! $comment->comment !!}
								<!-- Post Text EMD -->
							</div>
							<div class="media footer">
								<div class="pull-right">
									sdad
								</div>
							</div>
						</li>
					@endforeach

				</ul>

			</div>
		</div>

	</div>
</div>
<!-- END PAGE CONTENT -->
@stop