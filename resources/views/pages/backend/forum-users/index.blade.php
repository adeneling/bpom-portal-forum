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
					{!! Breadcrumbs::render('admin.pengguna-forum') !!}
				</div>
			</div>
		</div>
	</div>
<!--breadcrumbs end-->
<!--start container-->
	<div class="container">
		<div class="section" id="table-container">
			@include('pages.backend.forum-users._table_pengguna_forum')
		</div>
		<!-- Floating Action Button -->
		<div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
			<a class="btn-floating btn-large" href="{{ route('admin.pengguna-forum.create') }}">
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

			$(document).on('click', '#isAdmin', function(e){
				var enabled = '';
				if (!$(this).is(':checked')) {
					enabled = 0;
				}else{
					enabled = 1;
				};

				$.ajax({
					method: "POST",
					url: "{{ url('admin/pengguna-forum/isadmin') }}"+"/"+this.getAttribute('data-id')+"/"+enabled,
					data: {_token: this.getAttribute('data-token')},
					cache: false,
					success: function(data){
						$('#table-container').html(data);	
					}
				});
			});

		});
	</script>
@endsection