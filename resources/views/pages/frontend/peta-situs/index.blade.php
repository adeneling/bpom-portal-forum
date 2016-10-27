@extends('layouts.frontend.app')

@section('title', 'Peta Situs')

@section('content')
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">@yield('title')</h1>
	</div>
</div>
<!-- PAGE CONTENT -->
<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<center><img src="{{ asset('assets/frontend/img/peta-situs.png') }}" class="img-responsive"></center>
			</div>
		</div>
	</div>
</div>
<!-- END PAGE CONTENT -->

@stop