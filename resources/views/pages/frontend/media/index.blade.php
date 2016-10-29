@extends('layouts.frontend.app')

@section('title', 'Media')

@section('content')
<div class="shop-main">
	<div class="container">
		<section class="tabbed-content">
			<h2 class="section-heading">MEDIA PROMOSI</h2>
			<div class="custom-tabs-line tabs-line-bottom left-aligned product-carousel-tab">
				<ul class="nav" role="tablist">
					<li class="active"><a href="#tab-top1" role="tab" data-toggle="tab">Video</a></li>
					<li><a href="#tab-top2" role="tab" data-toggle="tab">Gambar</a></li>
					<li><a href="#tab-top3" role="tab" data-toggle="tab">Audio</a></li>
					<li><a href="#tab-top4" role="tab" data-toggle="tab">Dokumen</a></li>
				</ul>
			</div>
			<div class="tab-content product-carousel-content">
				<!-- tab pane -->
				<div class="tab-pane fade in active" id="tab-top1">
					<!-- HERO UNIT -->
					{{-- <center>
						<iframe width="620" height="400" src="https://www.youtube.com/embed/XGSy3_Czz8k"></iframe>
					</center> --}}

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
				<!-- end tab pane -->
				<!-- tab pane -->
				<div class="tab-pane fade" id="tab-top2">
					<div class="product-carousel" id="product-carousel2">
						<div class="product-item">
							<a href="single-product-page.html"><img src="{{ asset('assets/frontend/img/news/news1.png') }}" class="img-responsive center-block" alt="Product Item"></a>
							<div class="info">
								<h3 class="title"><a href="single-product-page.html" title="Casual Bag (Brown)">Casual Bag (Brown)</a></h3>
								<div class="price">
									<s class="old-price">$150</s> <strong>$75</strong></div>
							</div>
						</div>
						<div class="product-item">
							<a href="single-product-page.html"><img src="{{ asset('assets/frontend/img/news/news1.png') }}" class="img-responsive center-block" alt="Product Item"></a>
							<div class="info">
								<h3 class="title"><a href="single-product-page.html" title="Stylish Shoes">Stylish Shoes</a></h3>
								<div class="price">
									<s class="old-price">$120</s> <strong>$90</strong></div>
							</div>
						</div>
						<div class="product-item">
							<a href="single-product-page.html"><img src="{{ asset('assets/frontend/img/news/news1.png') }}" class="img-responsive center-block" alt="Product Item"></a>
							<div class="info">
								<h3 class="title"><a href="single-product-page.html" title="Holiday Season Outfit">Holiday Season Outfit</a></h3>
								<div class="price"><strong>$139.99</strong></div>
							</div>
						</div>
						<div class="product-item">
							<a href="single-product-page.html"><img src="{{ asset('assets/frontend/img/news/news1.png') }}" class="img-responsive center-block" alt="Product Item"></a>
							<div class="info">
								<h3 class="title"><a href="single-product-page.html" title="Everyday Apparel">Everyday Apparel</a></h3>
								<div class="price"><strong>$82.99</strong></div>
							</div>
						</div>
					</div>
				</div>
				<!-- end tab pane -->
				<!-- tab pane -->
				<div class="tab-pane fade" id="tab-top3">

				</div>
				<div class="tab-pane fade" id="tab-top4">

				</div>
				<!-- end tab pane -->
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