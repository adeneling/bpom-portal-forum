@extends('layouts.frontend.app')

@section('title')Forum Fasilitator
@stop

@section('content')



<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">@yield('title')</h1>
		{!! Breadcrumbs::render('forum-fasilitator') !!}
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
			@if(auth('forum')->check())
				<div class="col-md-8">
					<a href="{{ route('thread.create') }}" class="btn btn-primary pull-right"> Buat Thread </a>
				</div>
			@endif
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
										</thead>
										<tbody>
											@foreach($guides as $guide)
												<?php
													$countComment = $guide->comment()->commentThread($guide->id)->count();
												?>
												<tr>
													<td>
														<b><a href="{{ App\Helpers\AppHelpers::urlGuideForum($guide->id, $guide->judulThread) }}">{{ $guide->judulThread }}</a></b><br>
														<small>By {{ $guide->forumUsers->name }}</small>
													</td>
													<td>{{ date("d F Y", strtotime($guide->created_at)) }}</td>
												</tr>
											@endforeach
										</tbody>
									</table>
									<a href="{{ route('guides.all') }}" class="btn btn-primary pull-right"> Tampilkan Semua </a>
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
											@foreach($threads as $thread)
												<?php
													$countComment = $thread->comment()->commentThread($thread->id)->count();
												?>
												<tr>
													<td>
														<b><a href="{{ App\Helpers\AppHelpers::urlThreadForum($thread->id, $thread->judulThread) }}">{{ $thread->judulThread }}</a></b><br>
														<small>By {{ $thread->forumUsers->name }}</small>
													</td>
													<td>{{ date("d F Y", strtotime($thread->created_at)) }}</td>
													<td>{{ $countComment != 0 ? date("d F Y", strtotime($thread->comment()->lastComment($thread->id)->first()['created_at'])) : '-' }}</td>
													<td><span class="badge">{{ $countComment }}</span></td>
												</tr>
											@endforeach
										</tbody>
									</table>
									<a href="{{ route('threads.all') }}" class="btn btn-primary pull-right"> Tampilkan Semua </a>
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
@stop