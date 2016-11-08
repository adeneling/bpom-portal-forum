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
			<a class="btn btn-primary" style="float:right;" href="{{ route('admin.program.create') }}">Tambah Program</a>
			<div class="row">
				<div class="col s12 m12 l12" id="tableProgram_container">
					@include('pages.backend.program._tableProgram')
					{{ $programs->links() }}
				</div>
			</div>
		</div> 
	</div>
</div>

<hr>

<div class="container">
	<div class="section">
		<div id="striped-table">
			<h4 class="header">DAFTAR DOKUMEN PROGRAM</h4>
			<a class="btn btn-primary" style="float:right;" href="{{ route('admin.program-dokumen.create') }}">Tambah Dokumen Program</a>
			<div class="row">
				<div class="col s12" id="tableDokumenProgram_container">
					@include('pages.backend.program._tableDokumenProgram')
					{{ $dokumens->links() }}
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@section('js')
	<script type="text/javascript">
		$(document).ready(function(){
			$(document).on('click', '#enabledProgram', function(e){
				var enabled = '';
				if (!$(this).is(':checked')) {
					enabled = 0;
				}else{
					enabled = 1;
				};

				$.ajax({
					method: "POST",
					url: "{{ url('admin/program/enabled') }}"+"/"+this.getAttribute('data-id')+"/"+enabled,
					data: {_token: this.getAttribute('data-token')},
					cache: false,
					success: function(data){
						$('#tableProgram_container').html(data);	
					}
				});
			});

			$(document).on('click', '#delete-program', function(e){
				e.preventDefault();
				var id = $(this).attr('data-id');
				swal({
					title: "Are you sure?",   
					text: "You will not be able to recover this imaginary file!",   
					type: "warning",   
					showCancelButton: true,   
					confirmButtonColor: "#DD6B55",   
					confirmButtonText: "Yes, delete it!",   
					cancelButtonText: "No, cancel plx!",   
					closeOnConfirm: false,   
					closeOnCancel: false }, 
					function(isConfirm){   
					if (isConfirm) {     
						$.ajax({
							type: "DELETE",
							url: "{{ url('admin/program') }}"+"/"+id,
							data: {_token: "{{ csrf_token() }}"},
							cache: false,
							success: function(data){
								swal({
									title: "Deleted!",
									text: "Your imaginary file has been deleted.",
									type: "success"
								}, function(){
									window.location.href = '{{ url()->current() }}';
								});
								$('#tableProgram_container').html(data);
							}
						});
					} else {
						swal("Cancelled", "Your imaginary file is safe :)", "error");   
					} 
				});
			});

			$(document).on('click', '#delete-program-dokumen', function(e){
				e.preventDefault();
				var id = $(this).attr('data-id');
				swal({
					title: "Are you sure?",   
					text: "You will not be able to recover this imaginary file!",   
					type: "warning",   
					showCancelButton: true,   
					confirmButtonColor: "#DD6B55",   
					confirmButtonText: "Yes, delete it!",   
					cancelButtonText: "No, cancel plx!",   
					closeOnConfirm: false,   
					closeOnCancel: false }, 
					function(isConfirm){   
					if (isConfirm) {     
						$.ajax({
							type: "DELETE",
							url: "{{ url('admin/program-dokumen') }}"+"/"+id,
							data: {_token: "{{ csrf_token() }}"},
							cache: false,
							success: function(data){
								swal({
									title: "Deleted!",
									text: "Your imaginary file has been deleted.",
									type: "success"
								}, function(){
									window.location.href = '{{ url()->current() }}';
								});
								$('#tableDokumenProgram_container').html(data);
							}
						});
					} else {
						swal("Cancelled", "Your imaginary file is safe :)", "error");   
					} 
				});
			});
		});
	</script>
@endsection