@extends('layouts.frontend.app')

@section('title', 'Beranda')

@section('content')
<!-- SLIDER -->
<section class="hero-unit-slider slider-responsive no-margin">
	<div id="carousel-hero" class="slick-carousel">
		<div class="carousel-inner" role="listbox">
			@foreach($banner as $val)
				<div class="item {{ $loop->first ? 'active' : '' }}">
					<img src="{{ asset($val->banner) }}" class="img-responsive" alt="{{ $val->hero }}">
					<div class="carousel-caption">
						<h2 class="hero-heading">{{ $val->hero }}</h2>
						<p class="lead">{{ $val->lead }}</p>
					</div>
				</div>
			@endforeach
		</div>
	</div>
</section>

<!-- BAHAN BERBAHAYA DAN PROGRAM -->
<div class="main-features ">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6"></div>
			<a href="{{ url('bahan-berbahaya') }}" class="col-md-3 col-sm-6">
				<i class="fa fa-warning "></i>
				<h3 class="feature-heading">BAHAN BERBAHAYA</h3>
			</a>
			<a href="{{ url('program') }}" class="col-md-3 col-sm-6">
				<i class="fa fa-list-alt "></i>
				<h3 class="feature-heading">PROGRAM</h3>
			</a>
			<div class="col-md-3 col-sm-6"></div>
		</div>
	</div>
</div>

<!-- LATEST NEWS -->
<section>
	<div class="container">
		<h2 class="heading">BERITA TERBARU</h2>
		<div class="row">
			<div class="col-md-8">
				<?php $idx = 0; $i = 1; ?>
				@foreach($berita as $val)
					@if($idx == 0 || $idx % 2 == 0)
						<div class="row">
					@endif

					<div class="col-md-6" style="padding-top: 1em; padding-bottom: 1em;">
						<div class="news-item news-featured">
							<a href="{{ route('berita.lihat', [base64_encode(config('app.salt').$val->id), str_slug($val->judul, '-')]) }}">
								<img src="{{ asset($val->foto) }}" class="Item Thumbnail" alt="{{ $val->judul }}" width="50" height="200" >
							</a>
							<h3><a href="{{ route('berita.lihat', [base64_encode(config('app.salt').$val->id), str_slug($val->judul, '-')]) }}" type="{{ $val->judul }}">{{ $val->judul }}</a>
							</h3>
							<p>{!! substr($val->konten, 0, 200).'...' !!}</p>
							<div class="news-meta">
								<span class="news-datetime">{{ $val->created_at }}</span>
							</div>
						</div>
					</div>

					@if($i == 2)
						</div>
						<?php $i = 1; ?>
					@else
						<?php $i++; ?>
					@endif

					<?php $idx++; ?>
				@endforeach
			</div>
			<div class="col-md-4">
				tes
			</div>
		</div>
	</div>
</section>
<!-- END LATEST NEWS -->

<!-- PASAR AMAN -->
<section class="recent-works">
	<div class="container">
		<h2 class="heading pull-left">PASAR AMAN</h2>
		<a href="{{ url('pasar-aman') }}" class="btn btn-primary pull-right">Lihat semua</a>
		<div class="clearfix"></div>
		<div class="portfolio-static">
			<div class="row">
				<div class="col-md-8">
					<?php $idx = 0; $i = 1; ?>
					@foreach($pasarAman as $pasar)

						@if($idx == 0 || $idx % 4 == 0)
							<div class="row">
						@endif

						<div class="col-md-3">
							<div class="portfolio-item">
								<div class="overlay"></div>
								<div class="info">
									<h4 class="title">{{ $pasar->nama_pasar }}</h4>
									<a class="fancybox" rel="group" href="{{ asset(isset($pasar->photo) ? $pasar->photo : 'assets/frontend/img/logo-bpom.png') }}" title="{{ $pasar->nama_pasar }}">
										<button class="btn btn-primary">Lihat</button>
									</a>
								</div>
								<div class="media-wrapper">
									<img src="{{ asset(isset($pasar->photo) ? $pasar->photo : 'assets/frontend/img/logo-bpom.png') }}" alt="Item Thumbnail" width="180" height="140" />
									<br><center>{{ $pasar->nama_pasar }}</center>
								</div>
							</div>
						</div>

						@if($i == 4)
							</div>
							<?php $i = 1; ?>
						@else
							<?php $i++; ?>
						@endif

						<?php $idx++; ?>
					@endforeach

				</div>
				
				<div class="col-md-4">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h2 class="panel-title section-heading no-margin">Bagaimana pendapat Anda tentang tampilan dan konten website BPOM?</h2>
						</div>
						<div class="panel-body" id="formPollingContainer">
							@include('pages.frontend.beranda._css')
							@include('pages.frontend.beranda._polling')
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>		
<!-- END PASAR AMAN -->
@stop

@section('js')
	<script type="text/javascript">
		$(document).ready(function(){
			$(document).on('submit', '#formPolling', function(e){
				e.preventDefault();

				if($('#masukan').val() == '' && $('rating-input-1-5').val() == '' && $('rating-input-1-4').val() == '' && $('rating-input-1-3').val() == '' && $('rating-input-1-2').val() == '' && $('rating-input-1-1').val() == ''){
					swal("Oops!", "Silahkan isi semua form.", "danger");
				}else{
					$.ajax({
						method: "POST",
						url: "{{ route('polling.store') }}",
						data: $('#formPolling').serialize(),
						cache: false,
						success: function(data){
							$('#formPollingContainer').html(data);
							swal({
								title: "Terima Kasih",
								text: "Atas Polling yang sudah diberikan",
								type: "success"
							}, function(){
								window.location.href = '{{ url('/') }}';
							});
						}
					});
				}
			});
		});
	</script>
@stop