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
					{!! Breadcrumbs::render('admin.pedoman.edit', $pedoman) !!}
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
				@if(sizeof($errors) > 0)
					<div id="card-alert" class="card red">
						<div class="card-content white-text">
							<p><i class="mdi-alert-error"></i> PERHARTIAN, Terjadi Kesalahan Input Data!</p>
							<p>
								<ol>
									@foreach($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ol>
							</p>
						</div>
						<button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
				@endif
				{!! Form::model($pedoman, ['route' => ['admin.pedoman.update', $pedoman],'method' =>'put','role'=>'form','class'=>'col s12','files' => true])!!}
				{{ csrf_field() }}
					@include('pages.backend.pedoman._form')
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
<!--end container-->
@endsection