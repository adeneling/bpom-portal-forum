@extends('layouts.frontend.app')

@section('title', 'Forum Fasilitator')

@section('content')

@include('pages.forum-fasilitator.thread._slider')

<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">@yield('title')</h1>
		{!! Breadcrumbs::render('buat-thread') !!}
	</div>
</div>
<!-- END BREADCRUMBS -->
<!-- TOPBAR -->
<!-- PAGE CONTENT -->
<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<a href="{{ route('thread.index') }}" class="btn btn-danger pull-right"> Kembali </a>
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
				<h2>Edit Thread</h2>
				{!! Form::model($thread, ['route' => ['thread.update', encrypt($thread->id)], 'class' => 'form-horizontal left-aligned', 'id' => 'formThread', 'name' => 'formThread' ,'role' => 'form', 'files' => true, 'method' => 'PUT']) !!}
					<div class="form-group">
						<label for="judul-thread" class="col-sm-2 control-label">Judul Thread</label>
						<div class="col-sm-10">
							{!! Form::text('judul-thread', $thread->judulThread, ['class' => 'form-control', 'id' => 'judul-thread', 'placeholder' => 'Judul Thread']) !!}
						</div>
					</div>
					<div class="form-group">
						<label for="konten" class="col-sm-2 control-label">Konten</label>
						<div class="col-sm-10">
							{!! Form::textarea('konten', $thread->konten, ['id' => 'konten', 'class' => 'form-control']) !!}
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
					@if(auth('forum')->user()->admin == 2)
						<div class="form-group">
							<label for="tipe" class="col-sm-2 control-label">Jadikan Thread Guide</label>
							<div class="col-sm-10">
								{!! Form::radio('tipe', 'guide', false); !!} Guide
								<br>
								{!! Form::radio('tipe', 'umum', true); !!} Umum
							</div>
						</div>
					@endif
					<div class="form-group">
						<div class="col-sm-2"></div>
						<div class="col-sm-10">
							{!! Recaptcha::render() !!}
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-2"></div>
						<div class="col-sm-10">
							<button type="submit" class="btn btn-primary">Ubah Thread</button>
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
					<h4 class="modal-title">Image</h4>
				</div>
				<div class="modal-body">
					<div id="table-image-container">
						@include('pages.forum-fasilitator.thread._tableImageThread')
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
						url: "{{ route('image-thread.store') }}",
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
					url: "{{ url('forum-fasilitator/image-thread') }}"+"/"+this.getAttribute('data-id'),
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