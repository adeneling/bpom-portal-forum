@extends('layouts.frontend.app')

@section('title')Forum Fasilitator
@stop

@section('content')



<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">{!! strlen($thread->judulThread) > 56 ? substr($thread->judulThread, 0, 56)."<br>".substr($thread->judulThread, 56, strlen($thread->judulThread)) : $thread->judulThread !!}</h1>
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
								{{ date('d F Y', strtotime($thread->created_at)) }} &nbsp;&nbsp;&nbsp;&nbsp; {{ date('H:i:s', strtotime($thread->created_at)) }}
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
								@if(auth('forum')->check())
									@if($thread->forum_user_id == auth('forum')->user()->id || auth('forum')->user()->admin == 2)
										<div class="pull-right">
											<a href="{{ route('thread.edit', base64_encode(config('app.salt').$thread->id)) }}">Edit</a>
											&nbsp;&nbsp;&nbsp;
										</div>
									@endif
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
												@if($comment->forum_user_id == auth('forum')->user()->id  || auth('forum')->user()->admin == 2)
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

	</div>
</div>
<!-- END PAGE CONTENT -->
@stop