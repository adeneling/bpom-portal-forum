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
					{!! Breadcrumbs::render('admin.pasar-aman') !!}
				</div>
			</div>
		</div>
	</div>
<!--breadcrumbs end-->
<!--start container-->
	<div class="container">
		<div class="section">
			<div id="striped-table">
				<div class="row">
					<div class="col s12">
						<table class="striped">
						<thead>
							<tr>
							<th data-field="no">No</th>
							<th data-field="photo">Photo</th>
							<th data-field="nama_pasar">Nama Pasar</th>
							<th data-field="provinsi">Provinsi</th>
							<th data-field="kota">Kota</th>
							<th data-field="kabupaten">Kabupaten</th>
							</tr>
						</thead>
						<tbody>
							<?php $no=1;?>
							@foreach($pasarAman as $pasar)
								<tr>
									<td>{{ $no++ }}</td>
									<td><img src="{{ asset($pasar->photo) }}" width=50 height=50></td>
									<td>{{ $pasar->nama_pasar }}</td>
									<td>{{ $pasar->provinsi->provinsi }}</td>
									<td>{{ $pasar->kota->kota }}</td>
									<td>{{ !empty($pasar->kecamatan->kecamatan) ? $pasar->kecamatan->kecamatan : '' }}</td>
								</tr>
							@endforeach
						</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!-- Floating Action Button -->
		<div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
			<a class="btn-floating btn-large" href="{{ route('admin.pasar-aman.create') }}">
				<i class="mdi-content-add-circle"></i>
			</a>
		</div>
		<!-- Floating Action Button -->
	</div>
<!--end container-->
@endsection