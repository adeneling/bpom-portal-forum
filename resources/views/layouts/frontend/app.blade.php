<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title') | BPOM</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Responsive Multipurpose Bootstrap Theme">
	<meta name="author" content="The Develovers">
	<!-- CSS -->
	<link href="{{ asset('assets/frontend/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/frontend/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/frontend/css/main.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/frontend/css/my-custom-styles.css') }}" rel="stylesheet" type="text/css">
	<!-- IE 9 Fallback-->
	<!--[if IE 9]>
		<link href="assets/css/ie.css" rel="stylesheet">
	<![endif]-->
	<!-- GOOGLE FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400italic,400,600,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,400italic,700,400,300' rel='stylesheet' type='text/css'>
	<!-- FAVICONS -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assets/frontend/ico/repute144x144.png') }}">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets/frontend/ico/repute114x114.png') }}">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('assets/frontend/ico/repute72x72.png') }}">
	<link rel="apple-touch-icon-precomposed" href="{{ asset('assets/frontend/ico/repute57x57.png') }}">
	<link rel="shortcut icon" href="{{ asset('assets/frontend/ico/favicon.png') }}">
</head>

<body>
	<!-- WRAPPER -->
	<div class="wrapper">
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
		<!-- HERO UNIT -->
		<section class="hero-unit-slider slider-responsive no-margin">
			<div id="carousel-hero" class="slick-carousel">
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="{{ asset('assets/frontend/img/sliders/slider3-h500.png') }}" class="img-responsive" alt="Slider Image">
						<div class="carousel-caption">
							<h2 class="hero-heading">CLEAN &amp; ELEGANT DESIGN</h2>
							<p class="lead">Giving valuable reputation and credibility to your business</p>
							<a href="#" class="btn btn-lg hero-button">LEARN MORE</a>
						</div>
					</div>
					<div class="item">
						<img src="{{ asset('assets/frontend/img/sliders/slider2-h500.png') }}" class="img-responsive" alt="Slider Image">
						<div class="carousel-caption">
							<h2 class="hero-heading">ULTRA RESPONSIVE</h2>
							<p class="lead">Leave it to the theme, it knows how to deal with screen sizes</p>
							<a href="#" class="btn btn-lg hero-button">LEARN MORE</a>
						</div>
					</div>
					<div class="item">
						<img src="{{ asset('assets/frontend/img/sliders/slider1-h500.png') }}" class="img-responsive" alt="Slider Image">
						<div class="carousel-caption">
							<h2 class="hero-heading">EASY TO CUSTOMIZE</h2>
							<p class="lead">Readable code, well documented and FREE support</p>
							<a href="#" class="btn btn-lg hero-button">LEARN MORE</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END HERO UNIT -->
		<!-- MAIN FEATURES -->
		<div class="main-features ">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6"><i class="fa fa-cubes "></i>
						<h3 class="feature-heading">STRONG STRUCTURE</h3></div>
					<div class="col-md-3 col-sm-6"><i class="fa fa-globe "></i>
						<h3 class="feature-heading">GLOBAL SERVICES</h3></div>
					<div class="col-md-3 col-sm-6"><i class="fa fa-refresh "></i>
						<h3 class="feature-heading">DYNAMIC CHANGE</h3></div>
					<div class="col-md-3 col-sm-6"><i class="fa fa-rocket "></i>
						<h3 class="feature-heading">EXPONENTIAL GROWTH</h3></div>
				</div>
			</div>
		</div>
		<!-- END MAIN FEATURES -->
		<!-- INTRO -->
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h2 class="section-heading">KNOW BETTER</h2>
						<p class="lead">Synergistically procrastinate one-to-one results for accurate platforms. Assertively whiteboard corporate users whereas dynamic initiatives.</p>
						<p>Energistically architect leading-edge users and inexpensive internal or "organic" sources. Distinctively evolve e-business resources after progressive intellectual capital. Objectively architect maintainable technologies via strategic convergence. Continually optimize stand-alone expertise with e-business e-services. Continually conceptualize client-centered opportunities and.</p>
						<p>Dynamically customize backward-compatible processes via front-end models. Distinctively evisculate an expanded array of scenarios after virtual information. Professionally predominate technically sound resources through impactful mindshare. Efficiently drive viral interfaces without inexpensive value. Credibly.</p>
					</div>
					<div class="col-md-6">
						<img src="assets/img/intro-img.png" class="img-responsive" alt="Image Intro">
					</div>
				</div>
			</div>
		</section>
		<!-- END INTRO -->
		<!-- BOXED CONTENT -->
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="boxed-content left-aligned left-boxed-icon">
							<i class="fa fa-flag"></i>
							<h2 class="boxed-content-title">GOAL ORIENTED</h2>
							<p>Holisticly harness just in time technologies via corporate scenarios. Intrinsicly predominate ubiquitous outsourcing through an expanded array of functionalities.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="boxed-content left-aligned left-boxed-icon">
							<i class="fa fa-globe"></i>
							<h2 class="boxed-content-title">GLOBAL SERVICE</h2>
							<p>Holisticly harness just in time technologies via corporate scenarios. Intrinsicly predominate ubiquitous outsourcing through an expanded array of functionalities.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="boxed-content left-aligned left-boxed-icon">
							<i class="fa fa-cog"></i>
							<h2 class="boxed-content-title">DYNAMIC CHANGE</h2>
							<p>Holisticly harness just in time technologies via corporate scenarios. Intrinsicly predominate ubiquitous outsourcing through an expanded array of functionalities.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="boxed-content left-aligned left-boxed-icon">
							<i class="fa fa-users"></i>
							<h2 class="boxed-content-title">PROFESSIONAL SUPPORT</h2>
							<p>Holisticly harness just in time technologies via corporate scenarios. Intrinsicly predominate ubiquitous outsourcing through an expanded array of functionalities.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END BOXED CONTENT -->
		<!-- WHY REPUTE -->
		<section>
			<div class="container">
				<h2 class="section-heading sr-only">WHY REPUTE</h2>
				<div class="tab-content">
					<div class="tab-pane fade in active text-center" id="tab-bottom1">
						<img src="assets/img/hero-unit-obj.png" class="img-responsive center-block margin-bottom-30px" alt="Ultra Responsive">
						<h3 class="text-accent-color">ULTRA RESPONSIVE</h3>
						<p class="lead">Phosfluorescently revolutionize viral leadership via turnkey technology. Synergistically monetize intermandated strategic theme areas through multimedia based.</p>
					</div>
					<div class="tab-pane fade text-center" id="tab-bottom2">
						<img src="assets/img/hero-unit-obj3.png" class="img-responsive center-block margin-bottom-30px" alt="Easy to Customize">
						<h3 class="text-accent-color">IT'S EASY TO CUSTOMIZE</h3>
						<p class="lead">Efficiently incentivize leading-edge alignments with go forward expertise. Conveniently myocardinate leveraged process improvements through progressive models.</p>
					</div>
					<div class="tab-pane fade text-center" id="tab-bottom3">
						<img src="assets/img/hero-unit-obj.png" class="img-responsive center-block margin-bottom-30px" alt="Clean and Elegant Design">
						<h3 class="text-accent-color">CLEAN &amp; ELEGANT DESIGN</h3>
						<p class="lead">Competently implement bricks-and-clicks collaboration and idea-sharing rather than visionary internal or "organic" sources. Rapidiously matrix premium core competencies for.</p>
					</div>
					<div class="tab-pane fade text-center" id="tab-bottom4">
						<img src="assets/img/free.png" class="img-responsive center-block margin-bottom-30px" alt="Free Updates and Support">
						<h3 class="text-accent-color">GET UPDATES &amp; SUPPORT FOR FREE</h3>
						<p class="lead">Dramatically supply adaptive imperatives and stand-alone content. Exceptional solutions after web-enabled potentialities. Synergistically negotiate alternative best practices whereas professional "outside the box" thinking.</p>
					</div>
				</div>
				<div class="custom-tabs-line tabs-line-top">
					<ul class="nav" role="tablist">
						<li class="active"><a href="#tab-bottom1" role="tab" data-toggle="tab">Responsive</a></li>
						<li><a href="#tab-bottom2" role="tab" data-toggle="tab">Easy to Customize</a></li>
						<li><a href="#tab-bottom3" role="tab" data-toggle="tab">Design</a></li>
						<li><a href="#tab-bottom4" role="tab" data-toggle="tab">Free Updates &amp; Support</a></li>
					</ul>
				</div>
			</div>
		</section>
		<!-- END WHY REPUTE -->
		<!-- RECENT WORKS -->
		<section class="recent-works">
			<div class="container">
				<h2 class="section-heading pull-left">RECENT WORKS</h2>
				<a href="#" class="btn btn-primary pull-right">See all works</a>
				<div class="clearfix"></div>
				<div class="portfolio-static">
					<div class="row">
						<div class="col-md-4">
							<div class="portfolio-item">
								<div class="overlay"></div>
								<div class="info">
									<h4 class="title">Raining</h4>
									<p class="brief-description">Photography</p>
									<a href="#" class="btn">read more</a>
								</div>
								<div class="media-wrapper">
									<img src="assets/img/portfolio/800x500/work5.png" alt="Item Thumbnail" />
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="portfolio-item">
								<div class="overlay"></div>
								<div class="info">
									<h4 class="title">Perfect Edge</h4>
									<p class="brief-description">Product Design</p>
									<a href="#" class="btn">read more</a>
								</div>
								<div class="media-wrapper">
									<img src="assets/img/portfolio/800x500/work6.png" alt="Item Thumbnail" />
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="portfolio-item">
								<div class="overlay"></div>
								<div class="info">
									<h4 class="title">Sunny Day</h4>
									<p class="brief-description">Photography</p>
									<a href="#" class="btn">read more</a>
								</div>
								<div class="media-wrapper">
									<img src="assets/img/portfolio/800x500/work7.png" alt="Item Thumbnail" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END RECENT WORKS -->
		<!-- LATEST NEWS -->
		<section>
			<div class="container">
				<h2 class="section-heading">LATEST NEWS</h2>
				<div class="row">
					<div class="col-md-4">
						<div class="news-item news-featured">
							<a href="#"><img src="assets/img/news/featured-news.png" class="img-responsive" alt="News Thumbnail"></a>
							<h3 class="news-title"><a href="#">In Demand: Collaboration Skill</a></h3>
							<p>Proactively engage orthogonal growth strategies without resource-leveling testing procedures. Seamlessly predominate interoperable growth strategies.</p>
							<div class="news-meta">
								<span class="news-datetime">23-02-2015</span>
								<span class="news-comment-count pull-right"><a href="#">65 Comments</a></span>
							</div>
						</div>
					</div>
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="news-item margin-bottom-30px clearfix">
									<a href="#"><img src="assets/img/news/news1.png" class="img-responsive pull-left" alt="News Thumbnail"></a>
									<div class="right">
										<h3 class="news-title"><a href="#">Growth Strategies We Must Know</a></h3>
										<p>Proactively engage orthogonal growth strategies without resource-leveling testing procedures.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="news-item margin-bottom-30px clearfix">
									<a href="#"><img src="assets/img/news/news2.png" class="img-responsive pull-left" alt="News Thumbnail"></a>
									<div class="right">
										<h3 class="news-title"><a href="#">Alternative E-commerce</a></h3>
										<p>Proactively engage orthogonal growth strategies without resource-leveling testing procedures.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="news-item margin-bottom-30px clearfix">
									<a href="#"><img src="assets/img/news/news3.png" class="img-responsive pull-left" alt="News Thumbnail"></a>
									<div class="right">
										<h3 class="news-title"><a href="#">Products Research Methodology &amp; Principles </a></h3>
										<p>Proactively engage orthogonal growth strategies without resource-leveling testing procedures.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="news-item margin-bottom-30px clearfix">
									<a href="#"><img src="assets/img/news/news4.png" class="img-responsive pull-left" alt="News Thumbnail"></a>
									<div class="right">
										<h3 class="news-title"><a href="#">Understanding Globally Scale Quality Network</a></h3>
										<p>Proactively engage orthogonal growth strategies without resource-leveling testing procedures.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="news-item margin-bottom-30px clearfix">
									<a href="#"><img src="assets/img/news/news5.png" class="img-responsive pull-left" alt="News Thumbnail"></a>
									<div class="right">
										<h3 class="news-title"><a href="#">Professional Leverage</a></h3>
										<p>Proactively engage orthogonal growth strategies without resource-leveling testing procedures.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="see-all-news">
									<a href="#">See all news <i class="fa fa-long-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END LATEST NEWS -->
		<!-- NUMBERS -->
		<section class="full-width-section no-margin">
			<div class="container">
				<div class="row">
					<div class="col-sm-3 col-xs-6">
						<div class="number-info horizontal text-white-color">
							<i class="fa fa-plug pull-left"></i>
							<p>5200 <span>SUBSCRIBERS</span></p>
						</div>
					</div>
					<div class="col-sm-3 col-xs-6">
						<div class="number-info horizontal text-white-color">
							<i class="fa fa-cubes pull-left"></i>
							<p>273 <span>PROJECTS</span></p>
						</div>
					</div>
					<div class="col-sm-3 col-xs-6">
						<div class="number-info horizontal text-white-color">
							<i class="fa fa-thumbs-up pull-left"></i>
							<p>640K <span>APPRECIATIONS</span></p>
						</div>
					</div>
					<div class="col-sm-3 col-xs-6">
						<div class="number-info horizontal text-white-color">
							<i class="fa fa-users pull-left"></i>
							<p>132 <span>CLIENTS</span></p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END NUMBERS -->
		<!-- TESTIMONIAL -->
		<section id="testimoial-parallax" class="testimonial-with-bg parallax">
			<div class="container">
				<div class="testimonial slick-carousel">
					<div class="testimonial-container">
						<div class="testimonial-body">
							<p>Credibly extend parallel relationships after clicks-and-mortar content. Credibly pontificate team building alignments rather than diverse quality vectors.</p>
							<div class="testimonial-author">
								<img src="assets/img/user2.png" alt="Author" class="pull-left">
								<span><span class="author-name">Antonius</span> <em>CEO of TheCompany</em></span>
							</div>
						</div>
						<div class="testimonial-body">
							<p>Credibly pontificate team building alignments rather than diverse quality vectors. Monotonectally benchmark business communities for distinctive mindshare.</p>
							<div class="testimonial-author">
								<img src="assets/img/user1.png" alt="Author" class="pull-left">
								<span><span class="author-name">Michael</span> <em>General Manager of DreamCorp</em></span>
							</div>
						</div>
						<div class="testimonial-body">
							<p>Appropriately morph low-risk high-yield process improvements through progressive partnerships. Uniquely brand enabled. Globally network timely imperatives without plug-and-play schemas.</p>
							<div class="testimonial-author">
								<img src="assets/img/user5.png" alt="Author" class="pull-left">
								<span><span class="author-name">Palmer</span> <em>Freelance Web Developer</em></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END TESTIMONIAL -->
		<!-- OUR CLIENTS -->
		<section class="clients">
			<div class="container">
				<h2 class="section-heading">OUR CLIENTS</h2>
				<ul class="list-inline list-client-logo">
					<li>
						<a href="#"><img src="assets/img/clients/logo1.png" alt="logo"></a>
					</li>
					<li>
						<a href="#"><img src="assets/img/clients/logo2.png" alt="logo"></a>
					</li>
					<li>
						<a href="#"><img src="assets/img/clients/logo3.png" alt="logo"></a>
					</li>
					<li>
						<a href="#"><img src="assets/img/clients/logo4.png" alt="logo"></a>
					</li>
					<li>
						<a href="#"><img src="assets/img/clients/logo5.png" alt="logo"></a>
					</li>
				</ul>
			</div>
		</section>
		<!-- END OUR CLIENTS -->
		<!-- CALL-TO-ACTION -->
		<section class="call-to-action">
			<div class="container">
				<div class="pull-left">
					<h2 class="section-heading">GET IN TOUCH</h2>
				</div>
				<div class="pull-right">
					<span>Call us at (1800) 765 - 4321 or</span>&nbsp;&nbsp;<a href="#" class="btn btn-lg btn-primary">CONTACT US</a>
				</div>
			</div>
		</section>
		<!-- END CALL-TO-ACTION -->
		<!-- FOOTER -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<!-- COLUMN 1 -->
						<h3 class="sr-only">ABOUT US</h3>
						<img src="assets/img/logo/repute-logo-light.png" class="logo" alt="Repute">
						<p>Proactively aggregate B2B initiatives before extensive channels. Monotonectally extend interactive methods of empowerment through excellent applications. Rapidiously synergize visionary products with sticky technology.</p>
						<br>
						<address class="margin-bottom-30px">
							<ul class="list-unstyled">
								<li>1234 North Main Street
									<br/> New York, NY 222222</li>
								<li>Phone: (1800) 765 - 4321</li>
								<li>Email: email@yourdomain.com</li>
							</ul>
						</address>
						<!-- END COLUMN 1 -->
					</div>
					<div class="col-md-4">
						<!-- COLUMN 2 -->
						<h3 class="footer-heading">USEFUL LINKS</h3>
						<div class="row margin-bottom-30px">
							<div class="col-xs-6">
								<ul class="list-unstyled footer-nav">
									<li><a href="#">About Us</a></li>
									<li><a href="#">News</a></li>
									<li><a href="#">Community</a></li>
									<li><a href="#">Career</a></li>
									<li><a href="#">Blog</a></li>
								</ul>
							</div>
							<div class="col-xs-6">
								<ul class="list-unstyled footer-nav">
									<li><a href="#">Press Kit</a></li>
									<li><a href="#">FAQ</a></li>
									<li><a href="#">Terms</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Contact Us</a></li>
								</ul>
							</div>
						</div>
						<!-- END COLUMN 2 -->
					</div>
					<div class="col-md-4">
						<!-- COLUMN 3 -->
						<div class="newsletter">
							<h3 class="footer-heading">NEWSLETTER</h3>
							<p>Get the latest update from us by subscribing to our newsletter.</p>
							<form class="newsletter-form" method="POST">
								<div class="input-group input-group-lg">
									<input type="email" class="form-control" name="email" placeholder="youremail@domain.com">
									<span class="input-group-btn"><button class="btn btn-primary" type="button"><i class="fa fa-spinner fa-spin"></i><span>SUBSCRIBE</span></button>
									</span>
								</div>
								<div class="alert"></div>
							</form>
						</div>
						<div class="social-connect">
							<h3 class="footer-heading">GET CONNECTED</h3>
							<ul class="list-inline social-icons">
								<li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="googleplus-bg"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#" class="rss-bg"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
						<!-- END COLUMN 3 -->
					</div>
				</div>
			</div>
			<!-- COPYRIGHT -->
			<div class="text-center copyright">
				&copy;2016 The Develovers. All Rights Reserved.
			</div>
			<!-- END COPYRIGHT -->
		</footer>
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

</html>
