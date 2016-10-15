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
					{!! Breadcrumbs::render('admin.pasar-aman.create') !!}
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
				<div class="row">
					<form class="col s12">
					{!! Form::open(['route' => ['admin.pasar-aman.store'], 'class' => 'col s12', 'files' => true]) !!}
						<div class="row">
							<div class="input-field col s12">
								{!! Form::text('nama_pasar', old('nama_pasar'), ['id' => 'nama_pasar', 'class' => 'validate', 'placeholder' => 'Nama Pasar']) !!}
								<label for="nama_pasar">Nama Pasar</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								{!! Form::text('kepala_pasar', old('kepala_pasar'), ['id' => 'kepala_pasar', 'class' => 'validate', 'placeholder' => 'Kepala Pasar']) !!}
								<label for="kepala_pasar">Kepala Pasar</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								{!! Form::text('petugas_pasar', old('petugas_pasar'), ['id' => 'petugas_pasar', 'class' => 'validate', 'placeholder' => 'Petugas Pasar']) !!}
								<label for="petugas_pasar">Petugas Pasar</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								{!! Form::text('petugas_pasar', old('petugas_pasar'), ['id' => 'petugas_pasar', 'class' => 'validate', 'placeholder' => 'Petugas Pasar']) !!}
								<label for="petugas_pasar">Petugas Pasar</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input id="email" type="email" class="validate">
								<label for="email">Email</label>
							</div>
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
<!--end container-->
@endsection