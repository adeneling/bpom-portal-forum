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
					<div class="product-carousel" id="product-carousel2">
						<div class="product-item">
							<a href="single-product-page.html"><img src="{{ asset('assets/frontend/img/news/news1.png') }}" class="img-responsive center-block" alt="Product Item"></a>
							<div class="info">
								<h3 class="title"><a href="single-product-page.html" title="Casual Bag (Brown)">Casual Bag (Brown)</a></h3>
								<div class="price">
									<s class="old-price">$150</s> <strong>$75</strong></div>
							</div>


							<paper-audio-player src="{{ asset('01 Born This Way.mp3') }}"></paper-audio-player>
							<paper-audio-player src="{{ asset('01 Born This Way.mp3') }}" title="My Podcast #2"></paper-audio-player>
							<paper-audio-player src="{{ asset('01 Born This Way.mp3') }}" title="PANG! - Cry Me A River" color="#F05C38"></paper-audio-player>
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
			</div>
		</section>
	</div>
</div>
@stop