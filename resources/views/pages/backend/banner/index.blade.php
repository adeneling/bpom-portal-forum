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
					{!! Breadcrumbs::render('admin.banner') !!}
				</div>
			</div>
		</div>
	</div>
<!--breadcrumbs end-->
<!--start container-->
	<div class="container">
		<div class="section">
			<div id="table-datatables">
				<div class="row">
					<div class="col s12 m12 l12" id="table-container">
						@include('pages.backend.banner._tableBanner')
					</div>
				</div>
			</div> 
		</div>
		<!-- Floating Action Button -->
		<div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
			<button class="btn-floating btn-large" id="addBanner">
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
	<script type="text/javascript">
		$(document).ready(function(){
			$(document).on('click', '#addBanner', function(e){
				$.ajax({
					method: "GET",
					url: "{{ route('admin.banner.create') }}",
					cache: false,
					success: function(data){
						$('#modal-body').html(data);
						$('#modal1').openModal();
					}
				});
			});

			$(document).on('click', '#closeModal', function(e){
				$('#modal1').closeModal();
			});

			$(document).on('click', '#submit', function(e){
				e.preventDefault();

				if($('#foto').val() == ""){
					alert('image kosong.');
				}else{
					var form = document.forms.namedItem("formBanner");
					var formdata = new FormData(form);
					$.ajax({
						async: true,
						url: "{{ route('admin.banner.store') }}",
						type: 'POST',
						processData: false,
						contentType: false,
						data: formdata,
						cache: false,
						error: function(data){
							var errors = data.responseJSON;
							console.log(errors['image']);
							// Render the errors with js ...
						},
						success: function(data) {
							$('#table-container').html(data);
							$('#modal1').closeModal();
							$('#formBanner')[0].reset();
						}
					});
				}
			});

			$(document).on('click', '#enabledBanner', function(e){
				var enabled = '';
				if (!$(this).is(':checked')) {
					enabled = 0;
				}else{
					enabled = 1;
				};

				$.ajax({
					method: "POST",
					url: "{{ url('admin/banner/enabled') }}"+"/"+this.getAttribute('data-id')+"/"+enabled,
					data: {_token: this.getAttribute('data-token')},
					cache: false,
					success: function(data){
						$('#table-container').html(data);	
					}
				});
			});

			$(document).on('click', '#delete-banner', function(e){
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
							url: "{{ url('admin/banner') }}"+"/"+id,
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

			/*$(document).on('click', '#edit-banner', function(e){
				e.preventDefault();

				$.ajax({
					method: "GET",
					url: "{{ url('admin/banner') }}"+"/"+this.getAttribute('data-id')+"/edit",
					cache: false,
					success: function(data){
						$('#modal-body').html(data);
						$('#modal1').openModal();
					}
				});
			});

			$(document).on('click', '#update', function(e){
				e.preventDefault();

				var form = document.forms.namedItem("formBannerEdit");
				var formdata = new FormData(form);
				$.ajax({
					async: true,
					url: "{{ url('admin/banner') }}"+"/"+$('#idBannerUpdate').val(),
					type: 'PUT',
					processData: false,
					contentType: false,
					data: formdata,
					cache: false,
					error: function(data){
						var errors = data.responseJSON;
						console.log(errors['image']);
						// Render the errors with js ...
					},
					success: function(data) {
						$('#table-container').html(data);
						$('#modal1').closeModal();
						$('#formBannerEdit')[0].reset();
					}
				});
			});*/
		});
	</script>
@endsection