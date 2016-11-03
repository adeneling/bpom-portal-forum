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
		<h1 class="page-title pull-left">{{ $thread->judulThread }}</h1>
		{!! Breadcrumbs::render('thread', $thread) !!}
	</div>
</div>
<!-- END BREADCRUMBS -->
<!-- TOPBAR -->
<!-- PAGE CONTENT -->
@if(auth('forum')->check())
	<div class="page-content">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					@if($thread->tipe == 'umum')
						<a href="{{ route('comment.create', base64_encode(config('app.salt').$thread->id)) }}" class="btn btn-primary pull-left">Tanggapi Thread</a>
					@endif
				</div>
				<div class="col-md-8">
					<div class="row">
						<div class="col-sm-8">
							<a href="{{ route('thread.create') }}" class="btn btn-primary pull-right">Buat Thread</a>
						</div>
						<div class="col-sm-4">
							<input type="text" class="form-control" placeholder="Cari di forum">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endif

<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-primary">
							<div class="panel-heading">
								{{ date('d F Y', strtotime($thread->created_at)) }} &nbsp;&nbsp;&nbsp;&nbsp; 18:30:19
								<div class="pull-right">
									#1
								</div>
							</div>
							<div class="panel-content">
								<div class="row">
									<div class="col-md-2" style="padding-top: 2em; padding-bottom: 2em;">
										<center>
											<div class="user-info" href="#">
												<img class="avatar img-circle img-thumbnail" src="{{ App\Helpers\AppHelpers::photoProfile($thread->forumUsers->email) }}"
													width="64" alt="Generic placeholder image"><br>
												<strong>{{ $thread->forumUsers->name }}</strong>
												<br>
												<small>{{ $thread->forumUsers->admin == 1 ? 'Member' : 'Administrator' }}</small>
												<br>
												</small>
											</div>
										</center>
									</div>

									<div class="col-md-10" style="padding: 2em 2em 2em 2em;">
										{!! $thread->konten !!}
									</div>
								</div>
							</div>
							<div class="panel-footer">
								&nbsp;
								@if($thread->forum_user_id == auth('forum')->user()->id)
									<div class="pull-right">
										<a href="{{ route('thread.edit', base64_encode(config('app.salt').$thread->id)) }}">Edit</a>
										&nbsp;&nbsp;&nbsp;
									</div>
								@endif
							</div>
						</div>
					</div>
				</div>

				<hr>

				@if($comments != null)
					@foreach($comments as $comment)

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-primary">
									<div class="panel-heading">
										{{ date('d F Y', strtotime($comment->created_at)) }} &nbsp;&nbsp;&nbsp;&nbsp; 18:30:19
										<div class="pull-right">
											#{{ $comment->counter+1 }}
										</div>
									</div>
									<div class="panel-content">
										<div class="row">
											<div class="col-md-2" style="padding-top: 2em; padding-bottom: 2em;">
												<center>
													<div class="user-info" href="#">
														<img class="avatar img-circle img-thumbnail" src="{{ App\Helpers\AppHelpers::photoProfile($comment->forumUsers->email) }}"
															width="64" alt="Generic placeholder image"><br>
														<strong>{{ $comment->forumUsers->name }}</strong>
														<small>{{ $comment->forumUsers->admin == 1 ? 'Member' : 'Administrator' }}</small>
														<br>
													</div>
												</center>
											</div>
											<div class="col-md-10" style="padding: 2em 2em 2em 2em;">
												{!! $comment->comment !!}
											</div>
										</div>
									</div>
									<div class="panel-footer">
										&nbsp;
										<div class="pull-right">
											@if($comment->forum_user_id == auth('forum')->user()->id)
												<a href="{{ route('comment.edit', encrypt($comment->id)) }}">Edit</a>
											@endif
											&nbsp;&nbsp;&nbsp;
											<a href="{{ route('comment.quote', encrypt($comment->id)) }}">Reply</a>
										</div>
									</div>
								</div>
							</div>
						</div>

					@endforeach
					{{ $comments->links() }}
				@endif

			</div>
		</div>

	</div>
</div>
<!-- END PAGE CONTENT -->
@stop