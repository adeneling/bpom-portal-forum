@extends('layouts.frontend.app')

@section('title')Pedoman
@stop

@section('content')
<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">@yield('title')</h1>
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
		<h2>Cari Pedoman</h2>
		<!-- Search Form -->
		<form class="form form-horizontal">
			<div class="input-group input-group-lg">
				<input class="form-control input-lg" type="search" placeholder="tulis dokumen pedoman yang dicari.."/>
				<span class="input-group-btn">
				<button type="submit" class="btn btn-primary btn-lg"><i class="icon ion-android-search"></i> Cari dokumen</button>
			</span>
			</div>
		</form>
		<!-- End Search Form -->
		<!-- Search Results -->
		<ul class="list-unstyled list-results">
			<li class="type-document">
				<div class="media">
					<a href="#" class="pull-left"><i class="fa fa-file-pdf-o"></i></a>
					<div class="media-body">
						<h3><a href="#">Compellingly target state of the art materials for business services</a></h3>
						<span class="result-url">http://www.sourcesite.com</span>
						<p>Distinctively administrate B2C methods of empowerment with cost effective internal or "organic" sources. Collaboratively brand intuitive e-commerce after business architectures. </p>
						<span class="text-muted">File size: 857 KB</span>
					</div>
				</div>
			</li>
			<li class="type-document">
				<div class="media">
					<a href="#" class="pull-left"><i class="fa fa-file-pdf-o"></i></a>
					<div class="media-body">
						<h3><a href="#">Compellingly target state of the art materials for business services</a></h3>
						<span class="result-url">http://www.sourcesite.com</span>
						<p>Distinctively administrate B2C methods of empowerment with cost effective internal or "organic" sources. Collaboratively brand intuitive e-commerce after business architectures. </p>
						<span class="text-muted">File size: 857 KB</span>
					</div>
				</div>
			</li>
			<li class="type-document">
				<div class="media">
					<a href="#" class="pull-left"><i class="fa fa-file-pdf-o"></i></a>
					<div class="media-body">
						<h3><a href="#">Compellingly target state of the art materials for business services</a></h3>
						<span class="result-url">http://www.sourcesite.com</span>
						<p>Distinctively administrate B2C methods of empowerment with cost effective internal or "organic" sources. Collaboratively brand intuitive e-commerce after business architectures. </p>
						<span class="text-muted">File size: 857 KB</span>
					</div>
				</div>
			</li>
			<li class="type-document">
				<div class="media">
					<a href="#" class="pull-left"><i class="fa fa-file-pdf-o"></i></a>
					<div class="media-body">
						<h3><a href="#">Compellingly target state of the art materials for business services</a></h3>
						<span class="result-url">http://www.sourcesite.com</span>
						<p>Distinctively administrate B2C methods of empowerment with cost effective internal or "organic" sources. Collaboratively brand intuitive e-commerce after business architectures. </p>
						<span class="text-muted">File size: 857 KB</span>
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