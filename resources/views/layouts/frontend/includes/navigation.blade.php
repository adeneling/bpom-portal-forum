<!-- NAVBAR -->
<nav class="navbar navbar-default " role="navigation">
	<div class="container">
		<!-- TOPBAR -->
		<div class="topbar">
			<ul class="list-inline top-nav">
				<li>
					<div class="btn-group">
						<button type="button" class="btn btn-link dropdown-toggle btn-xs" data-toggle="dropdown"><img src="{{ asset('assets/frontend/img/flags/United-Kingdom.png') }}" alt="United Kingdom"> United Kingdom <span class="caret"></span></button>
						<ul class="dropdown-menu dropdown-menu-right country-selector" role="menu">
							<li>
								<a href="#"><img src="{{ asset('assets/frontend/img/flags/United-Kingdom.png') }}" alt="United Kingdom"> United Kingdom</a>
							</li>
							<li>
								<a href="#"><img src="{{ asset('assets/frontend/img/flags/Japan.png') }}" alt="Japan"> Japan</a>
							</li>
							<li>
								<a href="#"><img src="{{ asset('assets/frontend/img/flags/China.png') }}" alt="China"> China</a>
							</li>
							<li>
								<a href="#"><img src="{{ asset('assets/frontend/img/flags/Germany.png') }}" alt="Germany"> Germany</a>
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
				<img src="{{ asset('assets/frontend/img/logo/repute-logo-nav.png') }}" alt="Repute - Responsive Multipurpose Bootstrap Theme">
			</a>
		</div>
		<!-- MAIN NAVIGATION -->
		<div id="main-nav" class="navbar-collapse collapse navbar-mega-menu">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown active">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">HOME <i class="fa fa-angle-down"></i></a>
					<ul class="dropdown-menu" role="menu">
						<li class="active"><a href="#">Home v1</a></li>
						<li><a href="index-v1_dark-header.html">Home v1 Dark Header</a></li>
						<li><a href="index-v1_light-footer.html">Home v1 Light Footer</a></li>
						<li><a href="index-v2.html">Home v2</a></li>
						<li><a href="index-v2_dark-header.html">Home v2 Dark Header</a></li>
						<li><a href="index-v3.html">Home v3</a></li>
						<li><a href="index-v4_fullscreen.html">Home v4 Fullscreen</a></li>
						<li><a href="index-v5_fullscreen_slider.html">Home v5 Fullscreen Slider</a></li>
						<li class="dropdown ">
							<a href="#">Blog Home <span class="label label-danger label-main-nav">NEW</span> <i class="fa fa-angle-right"></i></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="blog/index-blog-v1.html">Blog Home v1</a></li>
								<li><a href="blog/index-blog-v2.html">Blog Home v2</a></li>
							</ul>
						</li>
						<li><a href="one-page/index.html">One Page</a></li>
					</ul>
				</li>
				<li class="dropdown ">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">FEATURES  <span class="label label-danger label-main-nav">NEW</span> <i class="fa fa-angle-down"></i></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="feature-navigation-menu.html">Navigation Menus</a></li>
						<li><a href="feature-hero-unit.html">Hero Units</a></li>
						<li><a href="feature-page-header.html">Page Header</a></li>
						<li><a href="feature-footer.html">Footers</a></li>
						<li class="dropdown ">
							<a href="#">Email Templates <span class="label label-danger label-main-nav">NEW</span> <i class="fa fa-angle-right"></i></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="email-templates/email-template-v1/email-template-v1.html">Email Template v1</a></li>
								<li><a href="email-templates/email-template-v2/email-template-v2.html">Email Template v2</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="dropdown ">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">PAGES <i class="fa fa-angle-down"></i></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="page-services.html">Service Page</a></li>
						<li><a href="page-pricing-tables.html">Pricing Tables</a></li>
						<li class="dropdown ">
							<a href="#">Columns <i class="fa fa-angle-right"></i></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="page-left-sidebar.html">Left Sidebar</a></li>
								<li><a href="page-right-sidebar.html">Right Sidebar</a></li>
								<li><a href="page-double-sidebar.html">Double Sidebar</a></li>
							</ul>
						</li>
						<li><a href="page-search-results.html">Search Result</a></li>
						<li><a href="page-support.html">Support</a></li>
						<li><a href="page-faq.html">FAQ</a></li>
						<li><a href="page-about-us.html">About Us</a></li>
						<li><a href="page-contacts.html">Contact</a></li>
						<li><a href="page-privacy.html">Privacy Policy</a></li>
						<li><a href="page-terms.html">Terms</a></li>
						<li><a href="page-error.html">Error Page</a></li>
						<li class="dropdown ">
							<a href="#">Sub Menu Lvl 1 <i class="fa fa-angle-right"></i></a>
							<ul class="dropdown-menu" role="menu">
								<li class="dropdown ">
									<a href="#">Sub Menu Lvl 2 <i class="fa fa-angle-right"></i></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="#">Sub Menu Lvl 3</a></li>
										<li><a href="#">Sub Menu Lvl 3</a></li>
									</ul>
								</li>
								<li><a href="#">Sub Menu Lvl 2</a></li>
								<li><a href="#">Sub Menu Lvl 2</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="dropdown mega-menu">
					<a href="#" data-toggle="dropdown">UI ELEMENTS <i class="fa fa-angle-down"></i></a>
					<ul class="dropdown-menu mega-menu-container">
						<li>
							<div class="mega-menu-content">
								<div class="row">
									<div class="col-md-3">
										<h5 class="menu-heading">Buttons &amp; Icons</h5>
										<ul class="list-unstyled list-menu">
											<li><a href="ui-buttons.html"><i class="fa fa-square"></i> General Buttons</a></li>
											<li><a href="ui-button-groups.html"><i class="fa fa-clone"></i> Button Groups</a></li>
											<li><a href="ui-icons.html"><i class="fa fa-asterisk"></i> Icons</a></li>
										</ul>
									</div>
									<div class="col-md-3">
										<h5 class="menu-heading">Forms</h5>
										<ul class="list-unstyled list-menu">
											<li><a href="ui-form-elements-basic.html"><i class="fa fa-check-square"></i> Basic Form Elements</a></li>
											<li><a href="ui-form-elements-advanced.html"><i class="fa fa-plus-square"></i> Advanced Form Elements</a></li>
											<li><a href="ui-form-layouts.html"><i class="fa fa-columns"></i> Form Layouts</a></li>
											<li><a href="ui-form-validation.html"><i class="fa fa-check-circle"></i> Validation</a></li>
										</ul>
									</div>
									<div class="col-md-3">
										<h5 class="menu-heading">Content Elements</h5>
										<ul class="list-unstyled list-menu">
											<li><a href="ui-tabs-accordion.html"><i class="fa fa-list-alt"></i> Tabs &amp; Accordion</a></li>
											<li><a href="ui-boxed-contents.html"><i class="fa fa-suitcase"></i> Boxed Contents</a></li>
											<li><a href="ui-numbers-charts.html"><i class="fa fa-pie-chart"></i> Numbers &amp; Charts</a></li>
											<li><a href="ui-typography.html"><i class="fa fa-font"></i> Typography</a></li>
										</ul>
									</div>
									<div class="col-md-3">
										<h5 class="menu-heading">Components</h5>
										<ul class="list-unstyled list-menu">
											<li><a href="ui-testimonials.html"><i class="fa fa-thumbs-up"></i> Testimonials</a></li>
											<li><a href="ui-maps.html"><i class="fa fa-map"></i> Maps</a></li>
											<li><a href="ui-breadcrumbs.html"><i class="fa fa-angle-right"></i> Breadcrumbs</a></li>
											<li><a href="ui-alerts.html"><i class="fa fa-warning"></i> Alerts</a></li>
											<li><a href="ui-pagination.html"><i class="fa fa-ellipsis-h"></i> Pagination</a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</li>
				<li class="dropdown ">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">PORTFOLIO <i class="fa fa-angle-down"></i></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="portfolio-4-columns.html">Portfolio 4 Columns</a></li>
						<li><a href="portfolio-3-columns.html">Portfolio 3 Columns</a></li>
						<li><a href="portfolio-2-columns.html">Portfolio 2 Columns</a></li>
						<li><a href="portfolio-single.html">Portfolio Item</a></li>
					</ul>
				</li>
				<li class="dropdown ">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">SHOP <i class="fa fa-angle-down"></i></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="shop/index.html">Front Page</a></li>
						<li><a href="shop/single-product-page.html">Single Product Page</a></li>
						<li><a href="shop/product-filter-grid.html">Search Result with Filter</a></li>
						<li><a href="shop/checkout.html">Checkout with Validation</a></li>
						<li><a href="shop/shop-login.html">Login</a></li>
						<li><a href="shop/shop-register.html">Register</a></li>
					</ul>
				</li>
				<li class="dropdown ">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">BLOG <i class="fa fa-angle-down"></i></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="blog-medium-thumbnail.html">Blog Medium Thumbnail</a></li>
						<li><a href="blog-full-thumbnail.html">Blog Full Thumbnail</a></li>
						<li><a href="blog-single.html">Blog Single</a></li>
						<li><a href="blog-single-full.html">Blog Single Full</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- END MAIN NAVIGATION -->
	</div>
</nav>
<!-- END NAVBAR -->