<!-- NAVBAR -->
<nav class="navbar navbar-default " role="navigation">
	<div class="container">
		<!-- TOPBAR -->
		<div class="topbar">
			<ul class="list-inline top-nav">
				<li><a href="faq">FAQ</a></li>
				<li><a href="hubungi-kami">HUBUNGI KAMI</a></li>
				<li><a href="sipaman">SIPAMAN</a></li>
				<li><a href="peta-situs">PETA SITUS</a></li>
				<li>
					<div class="btn-group">
						<button type="button" class="btn btn-link dropdown-toggle btn-xs" data-toggle="dropdown"><img src="{{ asset('assets/frontend/img/flags/United-Kingdom.png', config('app.https')) }}" alt="United Kingdom"> United Kingdom <span class="caret"></span></button>
						<ul class="dropdown-menu dropdown-menu-right country-selector" role="menu">
							<li>
								<a href="#"><img src="{{ asset('assets/frontend/img/flags/United-Kingdom.png', config('app.https')) }}" alt="United Kingdom"> United Kingdom</a>
							</li>
							<li>
								<a href="#"><img src="{{ asset('assets/frontend/img/flags/Japan.png', config('app.https')) }}" alt="Japan"> Japan</a>
							</li>
							<li>
								<a href="#"><img src="{{ asset('assets/frontend/img/flags/China.png', config('app.https')) }}" alt="China"> China</a>
							</li>
							<li>
								<a href="#"><img src="{{ asset('assets/frontend/img/flags/Germany.png', config('app.https')) }}" alt="Germany"> Germany</a>
							</li>
						</ul>
					</div>
				</li>
				<li><a href="#">Help</a></li>
				<li><a href="#">Support</a></li>
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
			<a href="#" class="navbar-brand navbar-logo navbar-logo-bigger">
				<img src="{{ asset('assets/frontend/img/logo/repute-logo-nav.png', config('app.https')) }}" alt="Repute - Responsive Multipurpose Bootstrap Theme">
			</a>
		</div>
		<!-- MAIN NAVIGATION -->
		<div id="main-nav" class="navbar-collapse collapse navbar-mega-menu">
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="{{ url('beranda') }}">BERANDA </a>
				</li>
				<li>
					<a href="{{ url('galeri') }}">GALERI </a>
				</li>
				<li>
					<a href="{{ url('program') }}">PROGRAM </a>
				</li>
				<li>
					<a href="{{ url('pedoman') }}">PEDOMAN </a>
				</li>
				<li>
					<a href="{{ url('media-promosi') }}">MEDIA PROMOSI </a>
				</li>
				<li>
					<a href="{{ url('forum-fasilitator') }}">FORUM FASILITATOR </a>
				</li>
				<li>
					<a href="{{ url('pasar-aman') }}">PASAR AMAN </a>
				</li>
			</ul>
		</div>
		<!-- END MAIN NAVIGATION -->
	</div>
</nav>
<!-- END NAVBAR -->