@extends('layouts.frontend.app')

@section('title')Forum Fasilitator
@stop

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
				<ul class="media-list forum">
					<li class="media well">
						<div class="pull-left user-info" href="#">
							<img class="avatar img-circle img-thumbnail" src="http://snipplicious.com/images/guest.png"
								width="64" alt="Generic placeholder image">
							<strong><a href="user.html">John Doe</a></strong>
							<small>Member</small>
							<br>
							<small class="btn-group btn-group-xs">
							<a class="btn btn-default"><i class="fa fa-thumbs-o-up"></i></a>
							<a class="btn btn-default"><i class="fa fa-thumbs-o-down"></i></a>
							<strong class="btn btn-success">+451</strong>
							</small>
						</div>
						<div class="media-body">
							<!-- Post Info Buttons -->
							<div class="forum-post-panel btn-group btn-group-xs">
								<a href="#" class="btn btn-default"><i class="fa fa-clock-o"></i> Posted 3 weeks ago</a>
								<a href="#" class="btn btn-danger"><i class="fa fa-warning"></i> Report post</a>
							</div>
							<!-- Post Info Buttons END -->
							<!-- Post Text -->
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. <b>Lorem ipsum dolor sit amet, consectetur adipiscing elit</b>. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. </p>
							<p>Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. <b>Mauris massa</b>. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. </p>
							<p>Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. <i>Lorem ipsum dolor sit amet, consectetur adipiscing elit</i>. Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante. <b>Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa</b>. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla facilisi. Ut fringilla. Suspendisse potenti. Nunc feugiat mi a tellus consequat imperdiet. Vestibulum sapien. Proin quam. <b>Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis</b>. Etiam ultrices. Suspendisse in justo eu magna luctus suscipit. </p>
							<!-- Post Text EMD -->
						</div>
					</li>

					<hr>

					<li class="media well">
						<div class="pull-left user-info" href="#">
							<img class="avatar img-circle img-thumbnail" src="http://snipplicious.com/images/guest.png"
								width="64" alt="Generic placeholder image">
							<strong><a href="user.html">John Doe</a></strong>
							<small>Member</small>
							<br>
							<small class="btn-group btn-group-xs">
							<a class="btn btn-default"><i class="fa fa-thumbs-o-up"></i></a>
							<a class="btn btn-default"><i class="fa fa-thumbs-o-down"></i></a>
							<strong class="btn btn-success">+451</strong>
							</small>
						</div>
						<div class="media-body">
							<!-- Post Info Buttons -->
							<div class="forum-post-panel btn-group btn-group-xs">
								<a href="#" class="btn btn-default"><i class="fa fa-clock-o"></i> Posted 3 weeks ago</a>
								<a href="#" class="btn btn-danger"><i class="fa fa-warning"></i> Report post</a>
							</div>
							<!-- Post Info Buttons END -->
							<!-- Post Text -->
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. <b>Lorem ipsum dolor sit amet, consectetur adipiscing elit</b>. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. </p>
							<p>Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. <b>Mauris massa</b>. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. </p>
							<p>Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. <i>Lorem ipsum dolor sit amet, consectetur adipiscing elit</i>. Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante. <b>Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa</b>. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla facilisi. Ut fringilla. Suspendisse potenti. Nunc feugiat mi a tellus consequat imperdiet. Vestibulum sapien. Proin quam. <b>Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis</b>. Etiam ultrices. Suspendisse in justo eu magna luctus suscipit. </p>
							<!-- Post Text EMD -->
						</div>
					</li>
				</ul>

			</div>
		</div>
	</div>
</div>
<!-- END PAGE CONTENT -->
@stop