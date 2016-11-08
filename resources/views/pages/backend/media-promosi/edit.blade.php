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
				{!! Breadcrumbs::render('admin.media-promosi.edit', $media) !!}
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
				{!! Form::model($media, ['route' => ['admin.media-promosi.update', encrypt($media->id)],'class' =>'col s12','files' => true, 'method' => 'PUT']) !!}
					{{ csrf_field() }}
					<div class="row">
						<div class="input-field col s9">
							{!! Form::text('nama', $media->nama, ['class'=>'validate', 'required']) !!}
							<label for="nama">Nama</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s9">
							{!! Form::textarea('deskripsi', $media->deskripsi, ['class'=>'materialize-textarea']) !!}
							<label for="textarea1">Deskripsi</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s2">
							<div class="input-field col s12">
								{!! Form::select('tipe', ['audio' => 'Audio', 'gambar' => 'Gambar', 'dokumen' => 'Dokumen'], $media->tipe, ['placeholder' => 'Pilih Tipe']) !!}
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col s6">
							<div class="file-field input-field">
								<div class="btn">
									<span>File</span>
									{!! Form::file('file', null) !!}
								</div>
								<div class="file-path-wrapper">
									<input class="file-path validate" type="text" value="{{ $media->lokasi }}">
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

@section('js')
	<script type="text/javascript">
		$(document).ready(function(){
			Materialize.updateTextFields();
		});
	</script>
@endsection