@extends('layouts.frontend.app')

@section('title', 'Hubungi Kami')

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
			<div class="col-md-9">
				<center><img src="{{ asset('assets/frontend/img/halo-bpom.png') }}" class="img-responsive"></center>
			</div>
			<div class="col-md-3">
				<!-- RIGHT SIDEBAR CONTENT -->
				<div class="widget">
					<h3 class="widget-title">CONTACT INFO</h3>
					<ul class="contact-info fa-ul">
						<li><i class="fa fa-li fa-building-o"></i> Jl. Percetakan Negara No.23 - Jakarta 10560 Indonesia</li>
						<li><i class="fa fa-li fa-phone"></i>  (021) 4244691/42883309/42883462</li>
						<li><i class="fa fa-li fa-envelope-o"></i> <a href="mailto:ppid@pom.go.id">ppid@pom.go.id</a></li>
					</ul>
				</div>
				<!-- END RIGHT SIDEBAR CONTENT -->
			</div>
		</div>
	</div>
</div>
<!-- END PAGE CONTENT -->

@stop