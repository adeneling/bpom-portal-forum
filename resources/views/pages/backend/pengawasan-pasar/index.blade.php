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
					{!! Breadcrumbs::render('admin.pengawasan-pasar') !!}
				</div>
			</div>
		</div>
	</div>
<!--breadcrumbs end-->
{!! Form::open(['url' => 'admin.pengawasan-pasar.store']) !!}
	<div class="container">
		<div class="section">
			<div id="striped-table">
				<div class="row">
					<div class="input-field col s2">
						{!! Form::text('awal_periode', null, ['class'=>'materialize']) !!}
						<label>Awal Periode</label>
					</div>
					<div class="input-field col s2">
						{!! Form::text('akhir_periode', null, ['class'=>'materialize']) !!}
						<label>Akhir Periode</label>
					</div>
					<div class="input-field col s8">
						<button class="btn waves-effect waves-light indigo right " type="submit" name="action">Submit
				        	<i class="mdi-content-send right"></i>
				      	</button>
					</div>
				</div>
			</div>
		</div>
	</div>
<!--start container-->
	<div class="container">
		<div class="section">
			<div id="striped-table">
				<div class="row">
					<div class="col s12">
						<div id="table-container">
							@include('pages.backend.pengawasan-pasar._table')
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!--end container-->
{!! Form::close() !!}
@endsection