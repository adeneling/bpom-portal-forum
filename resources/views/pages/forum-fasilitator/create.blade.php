@extends('layouts.frontend.app')

@section('title', 'Forum Fasilitator')

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
		<ol class="breadcrumb">
			<li>Navigasi</li>
			<li class="active">@yield('title')</li>
		</ol>
	</div>
</div>
<!-- END BREADCRUMBS -->
<!-- TOPBAR -->
<!-- PAGE CONTENT -->
<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<a href="{{ url('forum-fasilitator') }}" class="btn btn-danger pull-right"> Kembali </a>
			</div>
		</div>
	</div>
</div>

<!-- PAGE CONTENT -->
<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				{{-- ALERT ERROR --}}
				@if(count($errors) > 0)
					<div class="alert alert-danger alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<ul>
							@foreach($errors->all() as $message)
								<li>{{ $message }}</li>
							@endforeach
						</ul>
					</div>
				@endif
				{{-- END ALERT ERROR --}}

				<!-- THREAD BARU -->
				<h2 class="section-heading">Thread Baru</h2>
				{!! Form::open(['url' => 'forum-fasilitator/thread', 'class' => 'form-horizontal left-aligned', 'id' => 'formThread', 'name' => 'formThread' ,'role' => 'form', 'files' => true]) !!}
					<div class="form-group">
						<label for="judul-thread" class="col-sm-2 control-label">Judul Thread</label>
						<div class="col-sm-10">
							{!! Form::text('judul-thread', null, ['class' => 'form-control', 'id' => 'judul-thread', 'placeholder' => 'Judul Thread']) !!}
						</div>
					</div>
					<div class="form-group">
						<label for="konten" class="col-sm-2 control-label">Konten</label>
						<div class="col-sm-10">
							{!! Form::textarea('konten', null, ['id' => 'konten', 'class' => 'form-control']) !!}
						</div>
					</div>
					<div class="form-group">
						<label for="exampleInputFile" class="col-md-2 control-label">File input</label>
						<div class="col-md-3">
							{!! Form::file('image', ['id' => 'image']) !!}
							<p class="help-block">
								<em>Example block-level help text here.</em>
							</p>
						</div>
						<div class="col-md-7">
							<button class="btn btn-primary btn-xs" id="btnUploadImage" >Upload Image</button>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-2"></div>
						<div class="col-sm-10">
							<button class="btn btn-primary" id="btnLihatGallery" >Lihat Gallery</button>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-2"></div>
						<div class="col-sm-10">
							{!! Recaptcha::render() !!}
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-2"></div>
						<div class="col-sm-10">
							<button type="submit" class="btn btn-primary">Buat Thread</button>
						</div>
					</div>
				{!! Form::close() !!}
				<!-- END THREAD BARU -->
			</div>
		</div>
	</div>
</div>

{{-- MODAL IMAGE THREAD --}}
	<div id="modal-image-thread" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Login</h4>
				</div>
				<div class="modal-body">
					<div id="table-image-container">
						@include('pages.forum-fasilitator._tableImageThread')
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
{{-- END MODAL IMAGE THREAD --}}
@stop

@section('js')
	<script src="//cdn.ckeditor.com/4.5.11/full/ckeditor.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			CKEDITOR.replace('konten');

			$(document).on('click', '#btnUploadImage', function(e){
				e.preventDefault();

				if($('#image').val() == ""){
					alert('image kosong.');
				}else{
					var form = document.forms.namedItem("formThread");
					var formdata = new FormData(form);
					$.ajax({
						async: true,
						url: "{{ route('thread.post.image') }}",
						type: 'POST',
						processData: false,
						contentType: false,
						data: formdata,
						cache: false,
						success: function(data) {
							$('#table-image-container').html(data);
							$('#modal-image-thread').modal('show');
							$('#image').val('');
						}
					});
				}
			});

			$(document).on('click', '#btnLihatGallery', function(e){
				e.preventDefault();
				$('#modal-image-thread').modal('show');
			});

			$(document).on('click', '#btnDeleteImage', function(e){
				e.preventDefault();

				$.ajax({
					url: "{{ url('forum-fasilitator/delete-image-thread') }}"+"/"+this.getAttribute('data-id'),
					type: 'DELETE',
					data: { _token: this.getAttribute('data-token')},
					cache: true,
					success: function(data) {
						$('#table-image-container').html(data);
					}
				})
			});
		});
	</script>
@stop