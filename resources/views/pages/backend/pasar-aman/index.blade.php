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
						<div id="table-container">
							@include('pages.backend.pasar-aman._table_pasar_aman')
							{{ $pasarAman->links() }}
						</div>
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

@section('js')
	<script type="text/javascript">
		$(document).ready(function(){

			$(document).on('click', '#delete-pasaraman', function(e){
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
							url: "{{ url('admin/pasar-aman') }}"+"/"+id,
							data: {_token: "{{ csrf_token() }}"},
							cache: false,
							success: function(data){
								swal("Deleted!", "Your imaginary file has been deleted.", "success");
								$('#table-container').html(data);
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