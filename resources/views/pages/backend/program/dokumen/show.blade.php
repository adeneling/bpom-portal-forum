@extends('layouts/backend/backend')

@section('title', $title)

@section('content')
<!--breadcrumbs start-->
	<div id="breadcrumbs-wrapper">
		<!-- Search for small screen -->
		<div class="header-search-wrapper grey hide-on-large-only">
			<i class="mdi-action-search active"></i>
			<input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
		</div>
	</div>
<!--breadcrumbs end-->
<!--start container-->
<div class="container">
	<div class="section">
	</div>
	<div id="input-fields">
		<div class="row">
			<div class="col s12">
				<h4 class="header">{{ $program->nama }}</h4>
				<hr>
				<div class="row">
					<div class="col s12">
						<center>
							<img src="{{ asset($program->media_foto) }}" width="400">
						</center>						
					</div>
				</div>
				<div class="row">
					<div class="col s12">
						{{ $program->deskripsi }}
					</div>
				</div>
				
				<div class="row">
					<center>
						<a href="{{ url('admin/program') }}" class="btn waves-effect waves-light indigo"> KEMBALI </a>
					</center>
				</div>
			</div>
		</div>
	</div>
</div>
<!--end container-->
@endsection