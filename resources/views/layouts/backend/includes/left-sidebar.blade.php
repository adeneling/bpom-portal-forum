<aside id="left-sidebar-nav">
	<ul id="slide-out" class="side-nav fixed leftside-navigation">
		<li class="user-details cyan darken-2">
			<div class="row">
				<div class="col col s4 m4 l4">
						<img src="{{ asset('assets/backend/images//avatar.jpg') }}" alt="" class="circle responsive-img valign profile-image">
				</div>
				<div class="col col s8 m8 l8">
					<ul id="profile-dropdown" class="dropdown-content">
						<li><a href="#"><i class="mdi-action-face-unlock"></i> Profile</a>
						</li>
						<li><a href="#"><i class="mdi-action-settings"></i> Settings</a>
						</li>
						<li><a href="#"><i class="mdi-communication-live-help"></i> Help</a>
						</li>
						<li class="divider"></li>
						<li><a href="#"><i class="mdi-action-lock-outline"></i> Lock</a>
						</li>
						<li><a href="{{ route('admin.logout') }}"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
						</li>
					</ul>
					<a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">Administrator<i class="mdi-navigation-arrow-drop-down right"></i></a>
					<p class="user-roal">Administrator</p>
				</div>
			</div>
		</li>
		<li class="bold"><a href="{{ route('admin.dashboard.index') }}" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a></li>

		<li class="bold"><a href="{{ route('admin.berita.index') }}" class="waves-effect waves-cyan"><i class="mdi-action-open-in-new"></i> Kelola Berita</a></li>
		<li class="bold"><a href="{{ route('admin.galeri.index') }}" class="waves-effect waves-cyan"><i class="mdi-image-collections"></i> Kelola Galeri</a></li>
		<li class="bold"><a href="{{ route('admin.program.index') }}" class="waves-effect waves-cyan"><i class="mdi-action-settings-applications"></i> Kelola Program</a></li>
		<li class="bold"><a href="{{ route('admin.pedoman.index') }}" class="waves-effect waves-cyan"><i class="mdi-action-turned-in-not"></i> Kelola Pedoman</a></li>
		<li class="bold"><a href="{{ route('admin.media-promosi.index') }}" class="waves-effect waves-cyan"><i class="mdi-action-perm-media"></i> Kelola Media Promosi</a></li>
		<li class="bold"><a href="{{ route('admin.pasar-aman.index') }}" class="waves-effect waves-cyan"><i class="mdi-action-wallet-travel"></i> Kelola Pasar Aman</a></li>
		<li class="bold"><a href="{{ route('admin.faq.index') }}" class="waves-effect waves-cyan"><i class="mdi-action-speaker-notes"></i> Kelola FAQ</a></li>
		<li class="bold"><a href="{{ route('admin.hubungi-kami.index') }}" class="waves-effect waves-cyan"><i class="mdi-action-settings-phone"></i> Kelola Hubungi Kami</a></li>
		<br>
		<li class="no-padding">
			<ul class="collapsible collapsible-accordion">
				<li class="bold"><a class="collapsible-header  waves-effect waves-cyan {{ Request::is(App::getLocale().'/userControl/*') ? 'active' : '' }}"><i class="mdi-action-account-circle"></i> User Control</a>
					<div class="collapsible-body">
						<ul>
							<li class="{{ Request::is(App::getLocale().'/userControl/groups') || Request::is(App::getLocale().'/userControl/groups/*') ? 'active' : '' }}"><a href="{{ route('admin.groups.index') }}"> Grup</a>
							</li>                                   
							<li class="{{ Request::is(App::getLocale().'/userControl/users') || Request::is(App::getLocale().'/userControl/users/*') ? 'active' : '' }}"><a href="{{ route('admin.users.index') }}"> User</a>
							</li>
						</ul>
					</div>
				</li>
			</ul>
		</li>
	</ul>
	<a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
</aside>