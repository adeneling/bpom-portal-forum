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
<!-- SLIDER -->
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
<!-- INTRO -->
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2 class="heading">TENTANG KAMI</h2>
				<p class="lead"><b>Badan Pengawas Obat dan Makanan</b></p>
				<p align="justify">Badan Pengawas Obat dan Makanan. Badan Pengawas Obat dan Makanan atau disingkat Badan POM adalah sebuah lembaga di Indonesia yang bertugas mengawasi peredaran obat-obatan dan makanan di Indonesia. Fungsi dan tugas badan ini yaitu mengatur makanan, suplemen makanan, obat-obatan, produk biofarmasi, transfusi darah, piranti medis, piranti untuk terapi dengan radiasi, produk kedokteran hewan, dan kosmetik.</p>
				<p align="justify">Berdirinya Badan Pengawas Obat dan Makanan di Indonesia yang pada masa penjajahan Belanda dikenal dengan apoteker yang berperan dalam pelayanan kesehatan di bidang kefarmasian yang membantu pemerintah dalam melindungi masyarakat dalam pengawasan obat yang beredar di masyarakat.</p>
			</div>
			<div class="col-md-6">
				<img src="{{ asset('assets/frontend/img/logo-bpom.png') }}" class="img-responsive" alt="Image Intro">
			</div>
		</div>
	</div>
</section>
<!-- END INTRO -->

<!-- LATEST NEWS -->
<section>
	<div class="container">
		<h2 class="heading">BERITA TERBARU</h2>
		<div class="row">
			@foreach($berita as $val)
				<div class="col-md-4">
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
			@endforeach
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
				@foreach($pasarAman as $pasar)
					<div class="col-md-2">
						<div class="portfolio-item">
							<div class="overlay"></div>
							<div class="info">
								<h4 class="title">{{ $pasar->nama_pasar }}</h4>
								<a class="fancybox" rel="group" href="{{ asset(isset($pasar->photo) ? $pasar->photo : '') }}" title="{{ $pasar->nama_pasar }}">
									<button class="btn btn-primary">Lihat</button>
								</a>
							</div>
							<div class="media-wrapper">
								<img src="{{ asset($pasar->photo) }}" alt="Item Thumbnail" width="180" height="140" />
								<br><center>{{ $pasar->nama_pasar }}</center>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
</section>		
<!-- END PASAR AMAN -->

{{-- override css --}}
@include('pages.frontend.beranda._css')

<section>
	<div class="container">
		<h2 class="heading">POLLING</h2>
		<div class="row">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title section-heading no-margin">Bagaimana pendapat Anda tentang tampilan dan konten website BPOM?</h2>
				</div>
				<div class="panel-body">
					<div class="form-horizontal">
						<div class="form-group">
							<label class="col-md-1 control-label">Rate </label>
							<div class="col-md-11">
								<span class="rating">
									<input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1"/>
									<label for="rating-input-1-5" class="rating-star"></label>
									<input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1"/>
									<label for="rating-input-1-4" class="rating-star"></label>
									<input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1"/>
									<label for="rating-input-1-3" class="rating-star"></label>
									<input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1"/>
									<label for="rating-input-1-2" class="rating-star"></label>
									<input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1"/>
									<label for="rating-input-1-1" class="rating-star"></label>
								</span>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-1 control-label">Hasil </label>
							<div class="col-md-2">
								<span class="label label-success">0%</span>
								<i class="fa fa-star" aria-hidden="true"></i>
								<br>
								<span class="label label-success">0%</span>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<br>
								<span class="label label-success">0%</span>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<br>
								<span class="label label-success">0%</span>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<br>
								<span class="label label-success">0%</span>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
							</div>		
						</div>
						<div class="form-group">
							<label class="col-md-1 control-label">Masukkan</label>
							<div class="col-md-11">
								<textarea class="form-control" placeholder="Saran dan masukan" rows="4"></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<center>
									<button class="btn btn-primary">SUBMIT</button>
								</center>								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@stop