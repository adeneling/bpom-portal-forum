@extends('layouts/backend/backend')

@section('title', $title)

@section('css')
	<link href="{{ asset('assets/backend/js/plugins/sweetalert/sweetalert.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
@endsection

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
					<h5 class="breadcrumbs-title">Blank Page</h5>
					<ol class="breadcrumbs">
						<li><a href="index.html">Dashboard</a></li>
						<li><a href="#">Pages</a></li>
						<li class="active">Blank Page</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<!--breadcrumbs end-->
	

	<!--start container-->
	<div class="container">
		
		<div id="striped-table">
			<h4 class="header">Striped Table</h4>
			<div class="row">
				<div class="col s12 m12 l12">
					<div id="table-container">
						@include('pages.backend.userControl.users._tableUsers')
					</div>
				</div>
			</div>
		</div>
		
		<!-- Floating Action Button -->
		<div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
			<button class="btn-floating btn-large">
				<i class="mdi-content-add-circle"></i>
			</button>
		</div>
		<!-- Floating Action Button -->
	</div>
	<!--end container-->

	<div id="modal1" class="modal">
		<div id="modal-body">
			
		</div>
	</div>
@endsection

@section('js')
	<!--sweetalert -->
	<script type="text/javascript" src="{{ asset('assets/backend/js/plugins/sweetalert/sweetalert.min.js') }}"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('.fixed-action-btn').on("click", ".btn-floating", function(e){
				e.preventDefault();
				$.ajax({
					type: "GET",
					url: "{{ route('admin.groups.create') }}",
					success: function(data){
						$('#modal-body').html(data);
						$('#modal1').openModal();
					}
				});
			});

			$('.modal').on('click', '#submit', function(){
				$.ajax({
					type: "POST",
					url: "{{ url('admin/groups') }}",
					data: $('#groups-form').serialize(),
					cache: false,
					success: function(data){
						$('#table-container').html(data);
						$('#modal1').closeModal();
					}
				});
			});

			$(document).on('click', '#edit-group', function(e){
				e.preventDefault();
				$.ajax({
					type: "GET",
					url: "{{ url('admin/groups') }}"+"/"+$(this).attr('data-id')+"/edit",
					cache: false,
					success: function(data){
						$('#modal-body').html(data);
						$('#modal1').openModal();
					}
				});
			});

			$('.modal').on('click', '#submitEdit', function(){
				$.ajax({
					type: "PUT",
					url: "{{ url('admin/groups') }}"+"/"+$('#id').val(),
					data: $('#groups-form-edit').serialize(),
					cache: false,
					success: function(data){
						$('#table-container').html(data);
						$('#modal1').closeModal();
					}
				});
			});

			$(document).on('click', '#delete-group', function(e){
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
							url: "{{ url('admin/groups') }}"+"/"+id,
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

			$('.modal').on("click", "#closeModal", function(){
				$('#modal1').closeModal();
			});
		});
	</script>
@endsection