@extends('layouts.frontend.app')

@section('title')Pasar Aman
@stop

@section('content')
<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">PASAR AMAN</h1>
		<ol class="breadcrumb">
			<li><a href="#">Navigasi</a></li>
			<li class="active">@yield('title')</li>
		</ol>
	</div>
</div>
<!-- END BREADCRUMBS -->
<!-- PAGE CONTENT -->
<div class="page-content page-search-result">
	<div class="container">
		<h2>Cari Pasar</h2>
		<!-- Search Form -->
		<form class="form form-horizontal">
			<div class="input-group input-group-lg">
				<input class="form-control input-lg" type="search" placeholder="tulis pasar yang dicari.."/>
				<span class="input-group-btn">
				<button type="submit" class="btn btn-primary btn-lg"><i class="icon ion-android-search"></i> Cari Pasar Aman</button>
			</span>
			</div>
		</form>
		<!-- End Search Form -->
		<!-- Search Results -->
		<ul class="list-unstyled list-results">
			<li class="type-portfolio">
				<div class="media clearfix">
					<a href="#" class="pull-left"><img src="{{ asset('assets/frontend/img/portfolio/800x500/work3.png') }}" alt="Search Result" class="media-object"></a>
					<div class="media-body">
						<h3><a href="#">Pasar Aman X</a></h3>
						<p>pasar aman saat ini....</p>
					</div>
				</div>
			</li>
			<li class="type-portfolio">
				<div class="media clearfix">
					<a href="#" class="pull-left"><img src="{{ asset('assets/frontend/img/portfolio/800x500/work3.png') }}" alt="Search Result" class="media-object"></a>
					<div class="media-body">
						<h3><a href="#">Pasar Aman X</a></h3>
						<p>pasar aman saat ini....</p>
					</div>
				</div>
			</li>
			<li class="type-portfolio">
				<div class="media clearfix">
					<a href="#" class="pull-left"><img src="{{ asset('assets/frontend/img/portfolio/800x500/work3.png') }}" alt="Search Result" class="media-object"></a>
					<div class="media-body">
						<h3><a href="#">Pasar Aman X</a></h3>
						<p>pasar aman saat ini....</p>
					</div>
				</div>
			</li>
			<li class="type-portfolio">
				<div class="media clearfix">
					<a href="#" class="pull-left"><img src="{{ asset('assets/frontend/img/portfolio/800x500/work3.png') }}" alt="Search Result" class="media-object"></a>
					<div class="media-body">
						<h3><a href="#">Pasar Aman X</a></h3>
						<p>pasar aman saat ini....</p>
					</div>
				</div>
			</li>
			<li class="type-portfolio">
				<div class="media clearfix">
					<a href="#" class="pull-left"><img src="{{ asset('assets/frontend/img/portfolio/800x500/work3.png') }}" alt="Search Result" class="media-object"></a>
					<div class="media-body">
						<h3><a href="#">Pasar Aman X</a></h3>
						<p>pasar aman saat ini....</p>
					</div>
				</div>
			</li>
		</ul>
		<!-- End Search Results -->
		<!-- Pagination -->
		<div class="text-center">
			<ul class="pagination">
				<li class="disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>
				<li><a href="#">1</a></li>
				<li class="active"><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
			</ul>
		</div>
		<!-- Pagination -->
	</div>
</div>
<!-- END PAGE CONTENT -->

@stop