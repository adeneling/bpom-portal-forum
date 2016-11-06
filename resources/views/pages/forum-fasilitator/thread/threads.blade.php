@extends('layouts.frontend.app')

@section('title')Forum Fasilitator
@stop

@section('content')

@include('pages.forum-fasilitator.thread._slider')

<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">@yield('title')</h1>
		{!! Breadcrumbs::render('forum-fasilitator') !!}
	</div>
</div>
<!-- END BREADCRUMBS -->
<!-- TOPBAR -->
<!-- PAGE CONTENT -->
<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<input type="text" class="form-control" placeholder="Cari di forum">
			</div>
			@if(auth('forum')->check())
				<div class="col-md-8">
					<a href="{{ route('thread.create') }}" class="btn btn-primary pull-right"> Buat Thread </a>
				</div>
			@endif
		</div>
	</div>
</div>

<!-- PAGE CONTENT -->
<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2 class="panel-title section-heading no-margin">Umum</h2>
					</div>
					<div class="panel-body">
						<div class="form-horizontal">
							<div class="form-group">
								<div class="col-md-12" id="tableContainer">
									@include('pages.forum-fasilitator.thread._tableThreads')
									{{ $threads->links() }}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END PAGE CONTENT -->
@stop

@section('js')
	<script type="text/javascript">
		$(document).ready(function(){
			$(document).on('click', '#btnDeleteThread', function(e){
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
								url: "{{ url('forum-fasilitator/threads') }}"+"/"+id,
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