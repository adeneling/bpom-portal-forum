@extends('layouts/backend/backend')

@section('title')
	{{ $title }}
@endsection

@section('content')
<!--breadcrumbs start-->
<div id="breadcrumbs-wrapper">
	<div class="container">
		<div class="row">
			<div class="col s12 m12 l12">
				<h5 class="breadcrumbs-title">{!! Breadcrumbs::render('admin.dashboard') !!}</h5>
				
			</div>
		</div>
	</div>
</div>
<!--breadcrumbs end-->
<!--start container-->
<div class="container">
	<div class="section">
		<center>
			<img src="{{ asset('assets/frontend/img/logo-bpom.png') }}" class="img-responsive" alt="Image Intro">
		</center>			
	</div>
</div>
<!--end container-->
@endsection