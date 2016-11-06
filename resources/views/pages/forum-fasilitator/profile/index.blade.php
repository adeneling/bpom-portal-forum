@extends('layouts.frontend.app')

@section('title', 'Profile')

@section('content')
<!-- SLIDER -->
<section class="hero-unit-slider slider-responsive no-margin">
	<div id="carousel-hero" class="slick-carousel">
		<div class="carousel-inner" role="listbox">
			<div class="item">
				<img src="{{ asset('assets/frontend/img/sliders/slider2-h500.png') }}" class="img-responsive" alt="Slider Image">
				<div class="carousel-caption">
					<h2 class="hero-heading">FORUM</h2>
					<p class="lead">Badan Pengawasan Obat dan Makanan</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- SLIDER -->

<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">@yield('title')</h1>
		{!! Breadcrumbs::render('profile') !!}
	</div>
</div>

<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-4">				
			</div>
			<div class="col-md-8">
				<div class="row">
					<div class="col-sm-12">
						<a href="{{ route('thread.create') }}" class="btn btn-primary pull-right"> Buat Thread </a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END BREADCRUMBS -->
<!-- PAGE CONTENT -->
<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Profile
					</div>
					<div class="panel-content">
						<div class="row">
							<div class="col-md-3" style="padding-top: 2em; padding-bottom: 2em;">
								<center>
									<div class="user-info" href="#">
										<img class="avatar img-circle img-thumbnail" src="{{ $user->photo }}"
											width="64" alt="Generic placeholder image"><br>
										<strong>{{ Auth::user()->name }}</strong>
										<br>
										<small>{{ $user->admin == 1 ? 'Member' : 'Administrator' }}</small>
										<br>
										<small>{{ Auth::user()->email }}</small>
										<hr>
										<center>
											<a href="{{ route('profile.edit', encrypt(auth('forum')->user()->id)) }}" class="btn btn-warning btn-sm">Ubah Profile</a>
										</center>
									</div>
								</center>
							</div>

							<div class="col-md-9" style="padding: 2em 2em 2em 2em;">
								<strong>USER PROFILE</strong>
								<table class="table">
									<tr>
										<th>Nama</th>
										<td>{{ Auth::user()->name }}</td>
									</tr>
									<tr>
										<th>E-Mail</th>
										<td>{{ Auth::user()->email }}</td>
									</tr>
								</table>
								
								<hr>

								<strong>FORUM ACTIVITY</strong>
								<div id="tableContainer">
									@include('pages.forum-fasilitator.profile._table')
								</div>
								{{ $threads->links() }}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop

@section('js')
	<script type="text/javascript">
		$(document).ready(function(){
			$(document).on('click', '#btnDelete', function(e){
				e.preventDefault();

				var id = this.getAttribute('data-id');

				swal({
						title: "Are you sure?",
						text: "You will not be able to recover this imaginary file!",
						type: "warning",
						showCancelButton: true,
						confirmButtonClass: "btn-danger",
						confirmButtonText: "Yes, delete it!",
						cancelButtonText: "No, cancel it!",
						closeOnConfirm: false,
						closeOnCancel: false
					},
					function(isConfirm) {
						if (isConfirm) {
							$.ajax({
								type: "DELETE",
								url: "{{ url('forum-fasilitator/thread') }}"+"/"+id,
								cache: false,
								data: {_token: "{{ csrf_token() }}"},
								success: function(data){
									$('#tableContainer').html(data);
								}
							});
							swal("Deleted!", "Your imaginary file has been deleted.", "success");
						} else {
							swal("Cancelled", "Your imaginary file is safe :)", "error");
						}
				});
			});
		});
	</script>
@stop