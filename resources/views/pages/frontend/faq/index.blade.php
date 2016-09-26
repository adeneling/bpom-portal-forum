@extends('layouts.frontend.app')

@section('title', 'FAQ')

@section('content')
<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">@yield('title')</h1>
		<ol class="breadcrumb">
			<li><a href="#">Navigasi</a></li>
			<li class="active">@yield('title')</li>
		</ol>
	</div>
</div>
<!-- END BREADCRUMBS -->
<!-- PAGE CONTENT -->
<div class="page-content">
	<div class="container">
		<!-- TOP FAQs -->
		<h2>Top 5 Questions</h2>
		<div class="panel-group panel-group-faq top-faq">
			<div class="panel panel-minimal">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#top-faq1" class="collapsed"><span class="number pull-left">1</span> Anim pariatur cliche reprehenderit?</a>
					</h4>
				</div>
				<div id="top-faq1" class="panel-collapse collapse" style="height: 0px;">
					<div class="panel-body">
						<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
						<div class="faq-footer">
							<span class="text-muted">43 people found this useful - <a href="#">Me too!</a></span>
							<span class="share"><a href="#">Permalink</a> | <a href="#">Share</a></span>
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-minimal">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#top-faq2" class="collapsed"><span class="number pull-left">2</span> Conveniently parallel task backward-compatible?</a>
					</h4>
				</div>
				<div id="top-faq2" class="panel-collapse collapse" style="height: 0px;">
					<div class="panel-body">
						<p>Conveniently parallel task backward-compatible technology before error-free quality vectors. Appropriately myocardinate process-centric materials and strategic models. Distinctively fashion client-centric synergy before collaborative architectures. Phosfluorescently architect.</p>
						<div class="faq-footer">
							<span class="text-muted">102 people found this useful - <a href="#">Me too!</a></span>
							<span class="share"><a href="#">Permalink</a> | <a href="#">Share</a></span>
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-minimal">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#top-faq3" class="collapsed"><span class="number pull-left">3</span> Monotonectally underwhelm timely e-services?</a>
					</h4>
				</div>
				<div id="top-faq3" class="panel-collapse collapse">
					<div class="panel-body">
						<p>Monotonectally underwhelm timely e-services vis-a-vis backward-compatible relationships. Energistically promote clicks-and-mortar value through interdependent vortals. Rapidiously strategize multimedia based communities for future-proof solutions. Assertively syndicate global e-services</p> 
						<p>via enabled paradigms. Completely productivate tactical models for installed base catalysts for change. Quickly leverage other's turnkey partnerships for exceptional data. Appropriately envisioneer performance based leadership skills with client-centered materials. Globally reinvent goal-oriented niches for.</p>
						<div class="faq-footer">
							<span class="text-muted">8 people found this useful - <a href="#">Me too!</a></span>
							<span class="share"><a href="#">Permalink</a> | <a href="#">Share</a></span>
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-minimal">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#top-faq4" class="collapsed"><span class="number pull-left">4</span> Quickly disseminate corporate niches?</a>
					</h4>
				</div>
				<div id="top-faq4" class="panel-collapse collapse">
					<div class="panel-body">
						<p>Quickly disseminate corporate niches vis-a-vis corporate human capital. Globally negotiate diverse alignments after intuitive expertise. Quickly extend equity invested e-tailers with resource-leveling innovation. Distinctively utilize intuitive leadership whereas functionalized experiences. 
							Globally integrate extensible niches through progressive potentialities. Professionally morph.</p>
						<div class="faq-footer">
							<span class="text-muted">87 people found this useful - <a href="#">Me too!</a></span>
							<span class="share"><a href="#">Permalink</a> | <a href="#">Share</a></span>
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-minimal">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#top-faq5" class="collapsed"><span class="number pull-left">5</span> Globally visualize professional bandwidth?</a>
					</h4>
				</div>
				<div id="top-faq5" class="panel-collapse collapse">
					<div class="panel-body">
						<p>Globally visualize professional bandwidth via fully researched relationships. Compellingly aggregate prospective resources and equity invested core competencies. Collaboratively synthesize e-business imperatives.</p>
						<div class="faq-footer">
							<span class="text-muted">56 people found this useful - <a href="#">Me too!</a></span>
							<span class="share"><a href="#">Permalink</a> | <a href="#">Share</a></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END TOP FAQs -->

		<!-- FAQs -->
		<h2>Introduction</h2>
		<div class="panel-group panel-group-faq">
			<div class="panel panel-minimal">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#faq1" class="collapsed">Seamlessly empower visionary growth strategies whereas real-time?</a>
					</h4>
				</div>
				<div id="faq1" class="panel-collapse collapse">
					<div class="panel-body">
						<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
						<div class="faq-footer">
							<span class="text-muted">43 people found this useful - <a href="#">Me too!</a></span>
							<span class="share"><a href="#">Permalink</a> | <a href="#">Share</a></span>
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-minimal">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#faq2" class="collapsed">Seamlessly exploit excellent initiatives?</a>
					</h4>
				</div>
				<div id="faq2" class="panel-collapse collapse">
					<div class="panel-body">
						<p>Conveniently parallel task backward-compatible technology before error-free quality vectors. Appropriately myocardinate process-centric materials and strategic models. Distinctively fashion client-centric synergy before collaborative architectures. Phosfluorescently architect.</p>
						<div class="faq-footer">
							<span class="text-muted">102 people found this useful - <a href="#">Me too!</a></span>
							<span class="share"><a href="#">Permalink</a> | <a href="#">Share</a></span>
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-minimal">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#faq3" class="collapsed">Monotonectally productize efficient?</a>
					</h4>
				</div>
				<div id="faq3" class="panel-collapse collapse">
					<div class="panel-body">
						<p>Monotonectally underwhelm timely e-services vis-a-vis backward-compatible relationships. Energistically promote clicks-and-mortar value through interdependent vortals. Rapidiously strategize multimedia based communities for future-proof solutions. Assertively syndicate global e-services</p> 
						<p>via enabled paradigms. Completely productivate tactical models for installed base catalysts for change. Quickly leverage other's turnkey partnerships for exceptional data. Appropriately envisioneer performance based leadership skills with client-centered materials. Globally reinvent goal-oriented niches for.</p>
						<div class="faq-footer">
							<span class="text-muted">8 people found this useful - <a href="#">Me too!</a></span>
							<span class="share"><a href="#">Permalink</a> | <a href="#">Share</a></span>
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-minimal">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#faq4" class="collapsed">Energistically promote clicks-and-mortar value?</a>
					</h4>
				</div>
				<div id="faq4" class="panel-collapse collapse">
					<div class="panel-body">
						<p>Quickly disseminate corporate niches vis-a-vis corporate human capital. Globally negotiate diverse alignments after intuitive expertise. Quickly extend equity invested e-tailers with resource-leveling innovation. Distinctively utilize intuitive leadership whereas functionalized experiences. 
							Globally integrate extensible niches through progressive potentialities. Professionally morph.</p>
						<div class="faq-footer">
							<span class="text-muted">87 people found this useful - <a href="#">Me too!</a></span>
							<span class="share"><a href="#">Permalink</a> | <a href="#">Share</a></span>
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-minimal">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#faq5" class="collapsed">Compellingly aggregate prospective resources and equity invested core competencies?</a>
					</h4>
				</div>
				<div id="faq5" class="panel-collapse collapse">
					<div class="panel-body">
						<p>Globally visualize professional bandwidth via fully researched relationships. Compellingly aggregate prospective resources and equity invested core competencies. Collaboratively synthesize e-business imperatives.</p>
						<div class="faq-footer">
							<span class="text-muted">56 people found this useful - <a href="#">Me too!</a></span>
							<span class="share"><a href="#">Permalink</a> | <a href="#">Share</a></span>
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-minimal">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#faq6" class="collapsed">Energistically promote clicks-and-mortar value?</a>
					</h4>
				</div>
				<div id="faq6" class="panel-collapse collapse">
					<div class="panel-body">
						<p>Quickly disseminate corporate niches vis-a-vis corporate human capital. Globally negotiate diverse alignments after intuitive expertise. Quickly extend equity invested e-tailers with resource-leveling innovation. Distinctively utilize intuitive leadership whereas functionalized experiences. 
							Globally integrate extensible niches through progressive potentialities. Professionally morph.</p>
						<div class="faq-footer">
							<span class="text-muted">87 people found this useful - <a href="#">Me too!</a></span>
							<span class="share"><a href="#">Permalink</a> | <a href="#">Share</a></span>
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-minimal">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#faq7" class="collapsed">Monotonectally productize efficient?</a>
					</h4>
				</div>
				<div id="faq7" class="panel-collapse collapse">
					<div class="panel-body">
						<p>Monotonectally underwhelm timely e-services vis-a-vis backward-compatible relationships. Energistically promote clicks-and-mortar value through interdependent vortals. Rapidiously strategize multimedia based communities for future-proof solutions. Assertively syndicate global e-services</p> 
						<p>via enabled paradigms. Completely productivate tactical models for installed base catalysts for change. Quickly leverage other's turnkey partnerships for exceptional data. Appropriately envisioneer performance based leadership skills with client-centered materials. Globally reinvent goal-oriented niches for.</p>
						<div class="faq-footer">
							<span class="text-muted">8 people found this useful - <a href="#">Me too!</a></span>
							<span class="share"><a href="#">Permalink</a> | <a href="#">Share</a></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<h2>Legal</h2>
		<div class="panel-group panel-group-faq">
			<div class="panel panel-minimal">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#faqb1" class="collapsed">Monotonectally productize efficient?</a>
					</h4>
				</div>
				<div id="faqb1" class="panel-collapse collapse">
					<div class="panel-body">
						<p>Monotonectally underwhelm timely e-services vis-a-vis backward-compatible relationships. Energistically promote clicks-and-mortar value through interdependent vortals. Rapidiously strategize multimedia based communities for future-proof solutions. Assertively syndicate global e-services</p> 
						<p>via enabled paradigms. Completely productivate tactical models for installed base catalysts for change. Quickly leverage other's turnkey partnerships for exceptional data. Appropriately envisioneer performance based leadership skills with client-centered materials. Globally reinvent goal-oriented niches for.</p>
						<div class="faq-footer">
							<span class="text-muted">8 people found this useful - <a href="#">Me too!</a></span>
							<span class="share"><a href="#">Permalink</a> | <a href="#">Share</a></span>
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-minimal">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#faqb2" class="collapsed">Energistically promote clicks-and-mortar value?</a>
					</h4>
				</div>
				<div id="faqb2" class="panel-collapse collapse">
					<div class="panel-body">
						<p>Quickly disseminate corporate niches vis-a-vis corporate human capital. Globally negotiate diverse alignments after intuitive expertise. Quickly extend equity invested e-tailers with resource-leveling innovation. Distinctively utilize intuitive leadership whereas functionalized experiences. 
							Globally integrate extensible niches through progressive potentialities. Professionally morph.</p>
						<div class="faq-footer">
							<span class="text-muted">87 people found this useful - <a href="#">Me too!</a></span>
							<span class="share"><a href="#">Permalink</a> | <a href="#">Share</a></span>
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-minimal">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#faqb3" class="collapsed">Seamlessly empower visionary growth strategies whereas real-time?</a>
					</h4>
				</div>
				<div id="faqb3" class="panel-collapse collapse">
					<div class="panel-body">
						<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
						<div class="faq-footer">
							<span class="text-muted">43 people found this useful - <a href="#">Me too!</a></span>
							<span class="share"><a href="#">Permalink</a> | <a href="#">Share</a></span>
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-minimal">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#faqb4" class="collapsed">Seamlessly exploit excellent initiatives?</a>
					</h4>
				</div>
				<div id="faqb4" class="panel-collapse collapse">
					<div class="panel-body">
						<p>Conveniently parallel task backward-compatible technology before error-free quality vectors. Appropriately myocardinate process-centric materials and strategic models. Distinctively fashion client-centric synergy before collaborative architectures. Phosfluorescently architect.</p>
						<div class="faq-footer">
							<span class="text-muted">102 people found this useful - <a href="#">Me too!</a></span>
							<span class="share"><a href="#">Permalink</a> | <a href="#">Share</a></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END FAQs -->

		<!-- FAQS HELPER -->
		<div class="text-center">
			<h4>Still have questions?</h4>
			<p>Please find your answer by visiting the following page</p>
			<ul class="list-inline faq-further-links-list">
				<li>
					<a href="#">Forums</a>
					<p class="text-muted">Appropriately myocardinate process-centric materials and strategic models</p>
				</li>
				<li>
					<a href="#">Knowledgebase</a>
					<p class="text-muted">Conveniently parallel task backward-compatible technology</p>
				</li>
				<li>
					<a href="#">Terms &amp; Conditions</a>
					<p>Food truck quinoa nesciunt laborum eiusmod</p>
				</li>
			</ul>
			<p class="bottom-30px">No luck? <a href="#">contact us and we will respond soon</a></p>
		</div>
		<!-- END FAQS HELPER -->
	</div>
</div>
<!-- END PAGE CONTENT -->

@stop