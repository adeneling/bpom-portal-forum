<!-- NAVBAR -->
<nav class="navbar navbar-default " role="navigation">
	<div class="container">
		<!-- TOPBAR -->
		<div class="topbar">
			<a href="http://www.pom.go.id" target="_blank">
				<img src="{{ asset('assets/frontend/img/logo-bpom.png') }}" height="100" width="100" style="float:left;">
			</a>
			<a href="{{ url('/') }}" >
				<img src="{{ asset('assets/frontend/img/logo/logo-pasar-aman.png') }}" height="100" width="200" style="float:left;">
			</a>
			<ul class="list-inline top-nav">		

				<li><a href="http://sipaman.pom.go.id/" target="_blank">SIPAMAN</a></li>
				<li><a href="{{ route('thread.index') }}">FORUM FASILITATOR </a></li>
				<li><a href="{{ route('faq.index') }}">FAQ</a></li>
				<li><a href="{{ route('hubungi-kami.index') }}">HUBUNGI KAMI</a></li>
				
				<li><a href="{{ route('peta-situs.index') }}">PETA SITUS</a></li>
				@if(auth('forum')->check())
				<li><b>Hello <a href="{{ route('profile.index') }}" style="color: blue">{{ auth('forum')->user()->name }}</a>, </b></li>
				<li>
					{!! Form::open(['route' => ['logout'], 'method' => 'post', 'id' => 'logout']) !!}
					<a href="#" onclick="document.getElementById('logout').submit()">Logout</a>
					{!! Form::close() !!}
				</li>
				<li>&nbsp; &nbsp;</li>
				@else
				<li><a href="#" data-toggle="modal" data-target="#myModal">LOGIN</a></li>
				<li>&nbsp; &nbsp;</li>
				@endif
			</ul>
			<div class="searchbox">
				<form method="post">
					<div class="input-group input-group-sm">
						<input type="text" class="form-control" placeholder="search ...">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
						</span>
					</div>
				</form>
			</div>
		</div>
		<!-- END TOPBAR -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
				<span class="sr-only">Toggle Navigation</span>
				<i class="fa fa-bars"></i>
			</button>			
		</div>
		<!-- MAIN NAVIGATION -->
		<div id="main-nav" class="navbar-collapse collapse navbar-mega-menu" style="padding-top: 1em;">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="{{ route('index') }}">BERANDA </a></li>
				<li><a href="{{ route('berita.index') }}">BERITA </a></li>
				<li><a href="{{ route('galeri.index') }}">GALERI </a></li>								
				<li class="dropdown ">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">DAFTAR PASAR  <i class="fa fa-angle-down"></i></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="{{ route('pasar-aman.index') }}"> PASAR AMAN</a></li>
						<li><a href="{{ route('pasar.pengawasan') }}"> PASAR DALAM PENGAWASAN</a></li>
					</ul>
				</li>
				<li class="dropdown ">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">PUBLIKASI  <i class="fa fa-angle-down"></i></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="{{ route('program.index') }}">PROGRAM </a></li>
						<li><a href="{{ route('pedoman.index') }}">PEDOMAN </a></li>
						<li><a href="{{ route('media-promosi.index') }}">MEDIA PROMOSI</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- END MAIN NAVIGATION -->
	</div>
</nav>
<!-- END NAVBAR -->