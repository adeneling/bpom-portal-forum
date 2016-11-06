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
					<p class="lead">{{ config('app.name') }}</p>
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
		{!! Breadcrumbs::render('tanggapi-thread', $thread) !!}
	</div>
</div>
<!-- END BREADCRUMBS -->
<!-- TOPBAR -->
<!-- PAGE CONTENT -->
<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				{{-- ALERT ERROR --}}
				@if(count($errors) > 0)
					<div class="alert alert-danger alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<ul>
							@foreach($errors->all() as $message)
								<li>{{ $message }}</li>
							@endforeach
						</ul>
					</div>
				@endif
				{{-- END ALERT ERROR --}}

				<!-- THREAD BARU -->
				<h2 class="section-heading"> Tanggapi Thread</h2>
				{!! Form::open(['route' => 'comment.store', 'class' => 'form-horizontal left-aligned', 'role' => 'form']) !!}
					{!! Form::hidden('id', base64_encode(config('app.salt').$thread->id)) !!}
					<div class="form-group">
						<label for="komentar" class="col-sm-2 control-label">Komentar</label>
						<div class="col-sm-10">
							{!! Form::textarea('komentar', old('komentar'), ['id' => 'komentar', 'class' => 'form-control']) !!}
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
							<button type="submit" class="btn btn-primary">Submit Reply</button>
						</div>
					</div>
				{!! Form::close() !!}
				<!-- END THREAD BARU -->
			</div>
		</div>
		<hr>
		@if($comments != null)
			@foreach($comments as $comment)

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-primary">
									<div class="panel-heading">
										{{ date('d F Y', strtotime($comment->created_at)) }} &nbsp;&nbsp;&nbsp;&nbsp; {{ date('H:i:s', strtotime($comment->created_at)) }}
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
														<br>
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
											@if(auth('forum')->check())
												@if($comment->forum_user_id == auth('forum')->user()->id)
													<a href="{{ route('comment.edit', encrypt($comment->id)) }}">Edit</a>
												@endif
												&nbsp;&nbsp;&nbsp;
												<a href="{{ route('comment.quote', encrypt($comment->id)) }}">Reply</a>
											@endif
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
@stop

@section('js')
	<script src="//cdn.ckeditor.com/4.5.11/full/ckeditor.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			CKEDITOR.replace('komentar');
		});
	</script>
@stop