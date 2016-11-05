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
					{!! Breadcrumbs::render('admin.bahan-berbahaya.edit', $bahanBerbahaya) !!}
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
				{!! Form::model($bahanBerbahaya, ['route' => ['admin.bahan-berbahaya.update', $bahanBerbahaya],'method' =>'put','role'=>'form','class'=>'col s12','files' => true])!!}
					{{ csrf_field() }}
					
					<div class="row">
						<div class="input-field col s8">
							{!! Form::text('nama', $bahanBerbahaya->nama, ['class'=>'validate']) !!}
							<label for="first_name">Nama Bahan Berbahaya</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s8">
							{!! Form::textarea('deskripsi', $bahanBerbahaya->deskripsi, ['class'=>'materialize-textarea']) !!}
							<label for="textarea1">Deskripsi</label>
						</div>
					</div>
					<div class="row">
						<div class="col s6">
							<div class="file-field input-field">
								<div class="btn">
									<span>Foto</span>
									{!! Form::file('media_foto', null) !!}
								</div>
								<div class="file-path-wrapper">
									<input class="file-path validate" type="text" value="{{ $bahanBerbahaya->media_foto }}">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<center>
							<button class="btn waves-effect waves-light indigo" type="submit" name="action">Submit
					        	<i class="mdi-content-send right"></i>
					      	</button>
						</center>
					</div>

				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
<!--end container-->
@endsection