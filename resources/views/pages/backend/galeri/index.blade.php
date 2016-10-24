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
					{!! Breadcrumbs::render('admin.galeri') !!}
				</div>
			</div>
		</div>
	</div>
<!--breadcrumbs end-->
<!--start container-->
	<div class="container">
		<div class="section">
			<div id="table-datatables">
				<h4 class="header">DAFTAR FOTO</h4>
				<div class="row">
					<div class="col s12 m12 l12" id="table-container">
						@include('pages.backend.galeri._tableGaleri')
					</div>
				</div>
			</div> 
		</div>
		<!-- Floating Action Button -->
		<div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
			<button class="btn-floating btn-large" id="tambahGaleri">
				<i class="mdi-content-add-circle"></i>
			</button>
		</div>
		<!-- Floating Action Button -->
	</div>
<!--end container-->

<div id="modal1" class="modal">
	<div id="modal-body">
		<div class="modal-content">
			{!! Form::open(['class' =>'col s12','files' => true, 'name' => 'formGaleri', 'id' => 'formGaleri']) !!}
				<div class="row">
					<div class="input-field col s8">
						{!! Form::text('judul', null, ['class'=>'validate']) !!}
						<label for="first_name">Judul Foto</label>
					</div>
				</div>
				<div class="row">
					<div class="col s6">
						<div class="file-field input-field">
							<div class="btn">
								<span>Foto</span>
								{!! Form::file('foto', null, ['id' => 'foto']) !!}
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text">
							</div>
						</div>
					</div>
				</div>
			{!! Form::close() !!}	
		</div>
		<div class="modal-footer">
			<button class="waves-effect waves-blue btn-flat" id="submit">Submit</button>
			<button class="waves-effect waves-red btn-flat" id="closeModal">Close</button>
		</div>
	</div>
</div>
@endsection

@section('js')
	<script type="text/javascript">
		$(document).ready(function(){

			$(document).on('click', '#tambahGaleri', function(e){
				e.preventDefault();
				$('#modal1').openModal();
			});

			$(document).on('click', '#closeModal', function(e){
				e.preventDefault();
				$('#modal1').closeModal();
			});

			$(document).on('click', '#submit', function(e){
				e.preventDefault();

				if($('#foto').val() == ""){
					alert('image kosong.');
				}else{
					var form = document.forms.namedItem("formGaleri");
					var formdata = new FormData(form);
					$.ajax({
						async: true,
						url: "{{ route('admin.galeri.store') }}",
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
							$('#formGaleri')[0].reset();
						}
					});
				}
			});

		});
	</script>
@endsection