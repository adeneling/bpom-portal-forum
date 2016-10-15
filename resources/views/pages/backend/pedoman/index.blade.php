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
					{!! Breadcrumbs::render('admin.pedoman') !!}
				</div>
			</div>
		</div>
	</div>
<!--breadcrumbs end-->
<!--start container-->
	<div class="container">
		<div class="section">
			<div id="table-datatables">
				<h4 class="header">DAFTAR PEDOMAN</h4>
				<div class="row">
					<div class="col s12 m12 l12">
						<table id="data-table-simple" class="responsive-table display" cellspacing="0">
							<thead>
								<tr>
									<th>No</th>
									<th>Judul Pedoman</th>
									<th>Tanggal dibuat</th>
									<th width="35%">Aksi</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th>No</th>
									<th>Judul Pedoman</th>
									<th>Tanggal dibuat</th>
									<th>Aksi</th>
								</tr>
							</tfoot>

							<tbody>
								<?php $no=1 ?>
								@foreach($pedomans as $pedoman)
								<tr>
									<td>{{ $no++ }}</td>
									<td>{{ $pedoman->judul}}</td>
									<td>{{ $pedoman->created_at }}</td>
									<td>
										{!! Form::model($pedoman, ['route' => ['admin.pedoman.destroy', $pedoman], 'method' => 'delete'] ) !!}
										<a href="{{ route('admin.pedoman.show', encrypt($pedoman->id))}}" class="btn waves-effect waves-light teal">Lihat</a>
                         				<a href="{{ route('admin.pedoman.edit', encrypt($pedoman->id))}}" class="btn waves-effect waves-light blue">Edit</a>
                         				<button type="submit" class="btn waves-effect waves-light red">Hapus</button>
                         				{!! Form::close()!!}
									</td>
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
			<a class="btn-floating btn-large" href="{{ route('admin.pedoman.create') }}">
				<i class="mdi-content-add-circle"></i>
			</a>
		</div>
		<!-- Floating Action Button -->
	</div>
<!--end container-->
@endsection