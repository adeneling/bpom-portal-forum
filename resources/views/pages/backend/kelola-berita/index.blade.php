@extends('layouts/backend/backend')

@section('title')
	{{ $title }}
@endsection

@section('content')
	<!--start container-->
	<div class="container">
		<div class="section">
			<p class="caption">Kelola Berita</p>
			<div class="divider"></div>
			<!--Responsive Table-->
			<div class="divider"></div>
		</div>
		<!-- Floating Action Button -->
		<div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
			<a class="btn-floating btn-large">
				<i class="mdi-action-stars"></i>
			</a>
			<ul>
				<li><a href="css-helpers.html" class="btn-floating red"><i class="large mdi-communication-live-help"></i></a></li>
				<li><a href="app-widget.html" class="btn-floating yellow darken-1"><i class="large mdi-device-now-widgets"></i></a></li>
				<li><a href="app-calendar.html" class="btn-floating green"><i class="large mdi-editor-insert-invitation"></i></a></li>
				<li><a href="app-email.html" class="btn-floating blue"><i class="large mdi-communication-email"></i></a></li>
			</ul>
		</div>
		<!-- Floating Action Button -->
	</div>
	<!--end container-->
@endsection