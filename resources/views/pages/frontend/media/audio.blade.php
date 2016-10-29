@extends('layouts.frontend.app')

@section('title', 'Audio')

@section('content')
<div class="shop-main">
	<div class="container">
		<section class="tabbed-content">
			<h2 class="section-heading">MEDIA PROMOSI</h2>
			@include('pages.frontend.media._tab')
			<div class="tab-content product-carousel-content">
				<div class="tab-pane fade in active">
					<div class="row">
						<div class="col-md-10">
							<paper-audio-player src="{{ asset('01 Born This Way.mp3') }}"></paper-audio-player>
						</div>
						<div class="col-md-1">
							<button class="btn btn-lg btn-primary">Download</button>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-10">
							<paper-audio-player src="{{ asset('01 Born This Way.mp3') }}" title="My Podcast #2"></paper-audio-player>
						</div>
						<div class="col-md-1">
							<button class="btn btn-lg btn-primary">Download</button>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-10">
							<paper-audio-player src="{{ asset('01 Born This Way.mp3') }}" title="PANG! - Cry Me A River" color="#F05C38"></paper-audio-player>
						</div>
						<div class="col-md-1">
							<button class="btn btn-lg btn-primary">Download</button>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
@stop