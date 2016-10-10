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
					{!! Breadcrumbs::render('admin.berita.create') !!}
				</div>
			</div>
		</div>
	</div>
<!--breadcrumbs end-->
<!--start container-->
	<div class="container">
		<div class="section">
			<!--Input fields-->
			<div id="input-fields">
				<h4 class="header">Input fields</h4>
				<div class="row">
					<form class="col s12">
						<div class="row">
							<div class="input-field col s6">
								<input placeholder="Placeholder" id="first_name" type="text" class="validate">
								<label for="first_name">First Name</label>
							</div>
							<div class="input-field col s6">
								<input id="last_name" type="text" class="validate">
								<label for="last_name">Last Name</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input disabled value="I am not editable" id="disabled" type="text" class="validate">
								<label for="disabled">Disabled</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input id="password" type="password" class="validate">
								<label for="password">Password</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input id="email" type="email" class="validate">
								<label for="email">Email</label>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<!--end container-->
@endsection