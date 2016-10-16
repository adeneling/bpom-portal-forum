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
					{!! Breadcrumbs::render('admin.program') !!}
				</div>
			</div>
		</div>
	</div>
<!--breadcrumbs end-->
<!--start container-->
	<div class="container">
		<div class="section">
			<div id="table-datatables">
				<h4 class="header">DAFTAR PROGRAM</h4>
				<div class="row">
					<div class="col s12 m12 l12">
						<table id="data-table-simple" class="responsive-table display" cellspacing="0">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Program</th>
									<th>Tanggal dibuat</th>
									<th width="35%">Aksi</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th>No</th>
									<th>Nama Program</th>
									<th>Tanggal dibuat</th>
									<th>Aksi</th>
								</tr>
							</tfoot>

							<tbody>
								<?php $no=1 ?>
								@foreach($programs as $program)
								<tr>
									<td>{{ $no++ }}</td>
									<td>{{ $program->nama}}</td>
									<td>{{ $program->created_at }}</td>
									<td>
										{!! Form::model($program, ['route' => ['admin.program.destroy', $program], 'method' => 'delete'] ) !!}
										<a href="{{ route('admin.program.show', encrypt($program->id))}}" class="btn waves-effect waves-light teal">Lihat</a>
                         				<a href="{{ route('admin.program.edit', encrypt($program->id))}}" class="btn waves-effect waves-light blue">Edit</a>
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
			<a class="btn-floating btn-large" href="{{ route('admin.program.create') }}">
				<i class="mdi-content-add-circle"></i>
			</a>
		</div>
		<!-- Floating Action Button -->
	</div>
<!--end container-->
@endsection