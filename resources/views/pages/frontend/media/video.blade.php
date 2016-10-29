@extends('layouts.frontend.app')

@section('title', 'Video')

@section('content')
<div class="shop-main">
	<div class="container">
		<section class="tabbed-content">
			<h2 class="heading">MEDIA PROMOSI</h2>
			@include('pages.frontend.media._tab')
			<div class="tab-content product-carousel-content">
				<!-- tab pane -->
				<div class="tab-pane fade in active">
					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<div class="embed-responsive embed-responsive-16by9" id="video-container">
								<iframe width="620" height="400" class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $videos[0]['id'] }}"></iframe>
							</div>	
						</div>
						<div class="col-md-2"></div>
					</div>
					<!-- END HERO UNIT -->
					<div class="product-carousel" id="product-carousel1">
						@foreach($videos as $video)				
							<div class="product-item">
								<a href="#" id="video-image" data-id="{{ $video['id'] }}"><img src="https://i.ytimg.com/vi/{{ $video['id'] }}/sddefault.jpg" class="img-responsive center-block" alt="Product Item"></a>
								<div class="info">
									<h3 class="title"><a href="#" id="video-title" title="{{ $video['title'] }}" data-id="{{ $video['id'] }}">{{ $video['title'] }}</a></h3>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
@stop

@section('js')
	<script type="text/javascript">
		$(document).ready(function(){
			$(document).on('click', '#video-image', function(e){
				e.preventDefault();
				var id = this.getAttribute('data-id');
				$('#video-container').html('<iframe width="620" height="400" class="embed-responsive-item" src="https://www.youtube.com/embed/'+id+'"></iframe>');
			});

			$(document).on('click', '#video-title', function(e){
				e.preventDefault();
				var id = this.getAttribute('data-id');
				$('#video-container').html('<iframe width="620" height="400" class="embed-responsive-item" src="https://www.youtube.com/embed/'+id+'"></iframe>');
			});
		});
	</script>
@endsection