@extends('layouts.frontend.app')

@section('title', 'Bahan Berbahaya')

@section('content')
<div class="page-content">
	<div class="container">
		<!-- BLOG SINGLE -->
		<div class="blog single full-thumbnail">
			<!-- blog post -->
			<article class="entry-post">
				<header class="entry-header">
					<h2 class="entry-title">
						{{ $bahan->nama }}
					</h2>
					<div class="meta-line clearfix">
						<div class="meta-tag-comment pull-right">
							<span class="post-comment"><i class="fa fa-calendar"></i> <a href="#">Dibuat: {{ $bahan->created_at }}</a></span>
						</div>
					</div>
				</header>
				<div class="entry-content clearfix">
					<figure class="featured-image">
						<center>
							<img src="{{ isset($bahan->media_foto) ? $bahan->media_foto : '' }}" class="img-responsive" alt="featured-image" />
							<span><strong>{{ $bahan->nama }}</strong></span>
						</center>						
					</figure>
					<div class="excerpt">
						<p>{!! $bahan->deskripsi !!}</p>
					</div>
				</div>
			</article>
		</div>
	</div>
</div>
@stop