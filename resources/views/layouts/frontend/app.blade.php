<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title') | {{ config('app.name') }}</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Pusat Informasi Pasar Aman dan Bahan Berbahaya">
	<meta name="author" content="Badan Pengawas Obat dan Makanan">
	<meta name="keywords" content="puspaman, pasar, aman, pasar aman, bahan, berbahaya, bahan berbahaya, bpom, badan pom, badan, badan pengawas obat dan makanan, obat, makanan, obat dan makanan,">
	<!-- CSS -->
	<link href="{{ asset('assets/frontend/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/frontend/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/frontend/css/main.css') }}" rel="stylesheet" type="text/css">
	<link href="{{-- asset('assets/frontend/css/shop-main.css') --}}" rel="stylesheet" type="text/css">
	<link href="{{-- asset('assets/frontend/css/my-custom-styles.css') --}}" rel="stylesheet" type="text/css">
	{{-- fancy box --}}
	<link rel="stylesheet" href="{{ asset('assets/frontend/plugin/fancybox/source/jquery.fancybox.css?v=2.1.5') }}" type="text/css" media="screen" />
	<link rel="stylesheet" href="{{ asset('assets/frontend/plugin/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5') }}" type="text/css" media="screen" />
	<link rel="stylesheet" href="{{ asset('assets/frontend/plugin/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7') }}" type="text/css" media="screen" />
	{{-- fancy box --}}

	<!-- GOOGLE FONTS -->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:300,400italic,400,600,700' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,400italic,700,400,300' rel='stylesheet' type='text/css'>

	<!-- FAVICONS -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assets/frontend/ico/repute144x144.png') }}">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets/frontend/ico/repute114x114.png') }}">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('assets/frontend/ico/repute72x72.png') }}">
	<link rel="apple-touch-icon-precomposed" href="{{ asset('assets/frontend/ico/repute57x57.png') }}">
	<link rel="shortcut icon" href="{{ asset('assets/frontend/ico/favicon.png') }}">

	{{-- PAPER AUDIO --}}
	<script src="{{ asset('assets/frontend/bower_resources/webcomponentsjs/webcomponents-lite.js') }}"></script>
	<link rel="import" href="{{ asset('assets/frontend/bower_resources/paper-audio-player/paper-audio-player.html') }}">
	{{-- SWEET ALERT --}}
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/bower_resources/bootstrap-sweetalert/dist/sweetalert.css') }}">
	@yield('css')
</head>

<body>
	<!-- WRAPPER -->
	<div class="wrapper">
		{{-- NAVIGATION --}}
		@include('layouts.frontend.includes.navigation')
		
		{{-- CONTENT --}}
		@yield('content')

		{{-- MODAL LOGIN FORUM --}}
		<div id="myModal" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Login</h4>
					</div>
					<div class="modal-body">
						{!! Form::open(['url' => 'forum-fasilitator/login', 'class' => 'form-horizontal left-aligned', 'role' => 'form']) !!}
							<div class="form-group">
								<label for="email" class="col-sm-2 control-label">Email</label>
								<div class="col-sm-10">
									<div class="input-group">
										{!! Form::email('email', null, ['class' => 'form-control', 'id' => 'email']) !!}
										<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="password" class="col-sm-2 control-label">Password</label>
								<div class="col-sm-10">
									<div class="input-group">
										{!! Form::password('password', ['class' => 'form-control', 'id' => 'password']) !!}
										<span class="input-group-addon"><i class="fa fa-lock"></i></span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<label class="fancy-checkbox">
										<input type="checkbox">
										<span>Remember me</span>
									</label>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Sign in</button>
								</div>
							</div>
						{!! Form::close() !!}
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		{{-- END MODAL LOGIN FORUM --}}

		<!-- FOOTER -->
		@include('layouts.frontend.includes.footer')
		<!-- END FOOTER -->
	</div>
	<!-- END WRAPPER -->
	<!-- JAVASCRIPTS -->
	<script src="{{ asset('assets/frontend/js/jquery-2.1.1.min.js') }}"></script>
	<script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/frontend/js/plugins/slick/slick.min.js') }}"></script>
	<script src="{{ asset('assets/frontend/js/plugins/stellar/jquery.stellar.min.js') }}"></script>
	<script src="{{ asset('assets/frontend/js/plugins/jquery-easypiechart/jquery.easypiechart.min.js') }}"></script>
	<script src="{{ asset('assets/frontend/js/plugins/autohidingnavbar/jquery.bootstrap-autohidingnavbar.min.js') }}"></script>
	<script src="{{ asset('assets/frontend/js/repute-scripts.js') }}"></script>
	<script src="{{ asset('assets/frontend/js/repute-shop.js') }}"></script>
	<script src="https://use.fontawesome.com/fb24f8ac5d.js"></script>
	<!-- Add mousewheel plugin (this is optional) -->
	{{-- fancy box --}}
	<script type="text/javascript" src="{{ asset('assets/frontend/plugin/fancybox/lib/jquery.mousewheel-3.0.6.pack.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/frontend/plugin/fancybox/source/jquery.fancybox.pack.js?v=2.1.5') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/frontend/plugin/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/frontend/plugin/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/frontend/plugin/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7') }}"></script>
	{{-- SWEET ALERT --}}
	<script src="{{ asset('assets/frontend/bower_resources/bootstrap-sweetalert/dist/sweetalert.js') }}"></script>
	@include('sweet::alert')
	
	<script type="text/javascript">
		$(document).ready(function() {
			$(".fancybox").fancybox();
		});
	</script>
	{{-- fancy box --}}
	@yield('js')
</html>
