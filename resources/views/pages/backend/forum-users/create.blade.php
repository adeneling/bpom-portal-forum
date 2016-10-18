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
					{!! Breadcrumbs::render('admin.pengguna-forum.create') !!}
				</div>
			</div>
		</div>
	</div>
<!--breadcrumbs end-->
<!--start container-->
	<div class="container">
		<div class="section">
			<div id="input-fields">
				<div class="row">
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
								<textarea id="alamat_pasar" name="alamat_pasar" class="materialize-textarea">{{ old('alamat_pasar') }}</textarea>
								<label for="alamat_pasar">Alamat Pasar</label>
							</div>
						</div>
						<div class="row">
							<div class="file-field input-field col s12">
								<div class="btn">
									<span>Photo</span>
									<input type="file" name="photo">
								</div>
								<div class="file-path-wrapper">
									<input class="file-path validate" type="text">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col s12">
								{!! Recaptcha::render() !!}
							</div>
						</div>
						<div class="row">
							<div class="col s12">
								<button class="btn waves-effect waves-light blue" type="submit" name="action">Submit</button>
							</div>
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
<!--end container-->
@endsection