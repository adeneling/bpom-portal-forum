@extends('layouts.frontend.app')

@section('title', 'Media Promosi')

@section('content')
<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">@yield('title')</h1>
		{!! Breadcrumbs::render('media-promosi') !!}
	</div>
</div>
<!-- END BREADCRUMBS -->

<!-- PAGE CONTENT -->
<div class="page-content">
	<div class="container">
		<div class="multiple-pricing-table">
			<div class="row">
				<div class="col-md-4">
					<a href="{{ route('media.video') }}">
						<div class="pricing-item">
							<i class="fa fa-video-camera plan-icon"></i>
							<strong class="price">AUDIOVISUAL</strong>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="{{ route('media.audio') }}">
						<div class="pricing-item">
							<i class="fa fa-file-audio-o plan-icon"></i>
							<strong class="price">AUDIO</strong>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="{{ route('media.visual') }}">
						<div class="pricing-item">
							<i class="fa fa-picture-o plan-icon"></i>
							<strong class="price">VISUAL</strong>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END PAGE CONTENT -->


@stop