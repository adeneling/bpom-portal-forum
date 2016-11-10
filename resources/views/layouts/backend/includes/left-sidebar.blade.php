<aside id="left-sidebar-nav">
	<ul id="slide-out" class="side-nav fixed leftside-navigation">
		<li class="user-details blue darken-2">
			<div class="row">
				<div class="col col s4 m4 l4">
						<img src="{{ asset('assets/backend/images/avatar.png') }}" alt="" class="circle responsive-img valign profile-image">
				</div>
				<div class="col col s8 m8 l8">
					<ul id="profile-dropdown" class="dropdown-content">
						<li>
							<a href="{{ url('admin/profile') }}">
								<i class="mdi-action-face-unlock"></i> Profile
							</a>
						</li>
						<li class="divider"></li>
						<li>
						{!! Form::open(['route' => ['admin.logout'], 'method' => 'post', 'id' => 'logout']) !!}
							<a href="#" onclick="document.getElementById('logout').submit()"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
						{!! Form::close() !!}
						</li>
					</ul>
					<a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">Option<i class="mdi-navigation-arrow-drop-down right"></i></a>
					<p class="user-roal">
						{{ Auth::user()->name }}
					</p>
				</div>
			</div>
		</li>
		<li class="bold {{ Request::segment(2) == 'dashboard' ? 'active' : '' }}">
			<a href="{{ route('admin.dashboard.index') }}" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a>
		</li>
		<li class="bold {{ Request::segment(2) == 'banner' ? 'active' : '' }}">
			<a href="{{ route('admin.banner.index') }}" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Kelola Banner</a>
		</li>
		<li class="bold {{ Request::segment(2) == 'berita' ? 'active' : '' }}">
			<a href="{{ route('admin.berita.index') }}" class="waves-effect waves-cyan"><i class="mdi-action-open-in-new"></i> Kelola Berita</a>
		</li>
		<li class="bold {{ Request::segment(2) == 'galeri' ? 'active' : '' }}">
			<a href="{{ route('admin.galeri.index') }}" class="waves-effect waves-cyan"><i class="mdi-image-collections"></i> Kelola Galeri</a>
		</li>
		<li class="bold {{ Request::segment(2) == 'program' ? 'active' : '' }}">
			<a href="{{ route('admin.program.index') }}" class="waves-effect waves-cyan"><i class="mdi-action-settings-applications"></i> Kelola Program</a>
		</li>
		<li class="bold {{ Request::segment(2) == 'pedoman' ? 'active' : '' }}">
			<a href="{{ route('admin.pedoman.index') }}" class="waves-effect waves-cyan"><i class="mdi-action-turned-in-not"></i> Kelola Pedoman</a>
		</li>
		{{-- <li class="bold {{ Request::segment(2) == 'bahan-berbahaya' ? 'active' : '' }}">
			<a href="{{ route('admin.bahan-berbahaya.index') }}" class="waves-effect waves-cyan"><i class="mdi-image-center-focus-strong"></i> Kelola Bahan Berbahaya</a>
		</li> --}}

		{{-- PENDING --}}
		<li class="bold {{ Request::segment(2) == 'media-promosi' ? 'active' : '' }}">
			<a href="{{ route('admin.media-promosi.index') }}" class="waves-effect waves-cyan"><i class="mdi-action-perm-media"></i> Kelola Media Promosi</a>
		</li>
		{{-- <li class="bold {{ Request::segment(2) == 'pasar-aman' ? 'active' : '' }}">
			<a href="{{ route('admin.pasar-aman.index') }}" class="waves-effect waves-cyan"><i class="mdi-action-wallet-travel"></i> Kelola Pasar Aman</a>
		</li> --}}

		<li class="bold {{ Request::segment(2) == 'pengawasan-pasar' ? 'active' : '' }}">
			<a href="{{ route('admin.pengawasan-pasar.index') }}" class="waves-effect waves-cyan"><i class="mdi-action-assessment"></i> Pengawasan Pasar</a>
		</li>

		<div class="divider"></div>
		<li class="bold {{ Request::segment(2) == 'pengguna-forum' ? 'active' : '' }}">
			<a href="{{ route('admin.pengguna-forum.index') }}" class="waves-effect waves-cyan"><i class="mdi-action-account-circle"></i> Kelola Pengguna Forum</a>
		</li>
		{{-- END  --}}
		<br><br><br><br><br>
	</ul>
	<a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
</aside>