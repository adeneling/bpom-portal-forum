@extends('layouts.frontend.app')

@section('title', 'Pasar Aman')

@section('content')
<div class="page-content">
	<div class="container">
		<!-- BLOG SINGLE -->
		<div class="blog single full-thumbnail">
			<!-- blog post -->
			<article class="entry-post">
				<header class="entry-header">
					<h2 class="entry-title">
						{{ $pasar->nama_pasar }}
					</h2>
					<div class="meta-line clearfix">
						<div class="meta-tag-comment pull-right">
							<span class="post-comment"><i class="fa fa-calendar"></i> <a href="#">Dibuat: {{ $pasar->created_at }}</a></span>
						</div>
					</div>
				</header>
				<div class="entry-content clearfix">
					<figure class="featured-image">
						<center>
							<img src="{{ isset($pasar->photo) ? $pasar->photo : 'assets/frontend/img/logo-bpom.png' }}" class="img-responsive" alt="featured-image" />
							<span><strong>Alamat Pasar: {{ $pasar->alamat_pasar }}</strong></span>
						</center>						
					</figure>
					<div class="excerpt">
						<div class="col-md-1">
						</div>
						<div class="col-md-10">
							<p>{!! $pasar->konten !!}</p>
						</div>						
						<div class="col-md-1">
						</div>
					</div>
				</div>
			</article>
		</div>
	</div>
</div>
@stop