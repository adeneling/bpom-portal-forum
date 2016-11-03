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
		<div class="container">
			<div class="row">
				<div class="col s12 m12 l12">
					<h5 class="breadcrumbs-title">{{ $title }}</h5>
					{!! Breadcrumbs::render('admin.galeri.edit', $galeri) !!}
				</div>
			</div>
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
				{!! Form::model($galeri, ['route' => ['admin.galeri.update', $galeri],'method' =>'put','role'=>'form','class'=>'col s12','files' => true])!!}
				{{ csrf_field() }}
					@include('pages.backend.galeri._form')
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
<!--end container-->
@endsection