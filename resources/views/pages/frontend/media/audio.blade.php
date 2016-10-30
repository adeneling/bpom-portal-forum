@extends('layouts.frontend.app')

@section('title', 'Audio')

@section('content')
<div class="shop-main">
	<div class="container">
		<section class="tabbed-content">
			<h2 class="heading">MEDIA PROMOSI</h2>
			@include('pages.frontend.media._tab')
			<div class="tab-content product-carousel-content">
				<div class="tab-pane fade in active">
					<?php $idx = 0;?>
					@foreach($audios as $audio)
						<div class="row">
							<div class="col-md-10">
								<paper-audio-player src="{{ asset($audio->lokasi) }}" title="{{ $audio->nama }}" color="{{ $idx++ % 2 == 0 ? '#F05C38' : '' }}"></paper-audio-player>
							</div>
							<div class="col-md-1">
								<button class="btn btn-lg btn-primary">Download</button>
							</div>
						</div>
						<br>
					@endforeach
				</div>
			</div>
		</section>
	</div>
</div>
@stop