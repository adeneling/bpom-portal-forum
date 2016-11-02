@extends('layouts.frontend.app')

@section('title', 'Berita')

@section('content')
<div class="page-content">
	<div class="container">
		<!-- BLOG SINGLE -->
		<div class="blog single full-thumbnail">
			<!-- blog post -->
			<article class="entry-post">
				<header class="entry-header">
					<h2 class="entry-title">
						{{ $berita->judul }}
					</h2>
					<div class="meta-line clearfix">
						<div class="meta-tag-comment pull-right">
							<span class="post-comment"><i class="fa fa-calendar"></i> <a href="#">Dibuat: {{ $berita->created_at }}</a></span>
						</div>
					</div>
				</header>
				<div class="entry-content clearfix">
					<figure class="featured-image">
						<center>
							<img src="{{ isset($berita->foto) ? $berita->foto : '' }}" class="img-responsive" alt="featured-image" />
							<span><strong>{{ $berita->ket_foto }}</strong></span>
						</center>						
					</figure>
					<div class="excerpt">
						<div class="col-md-1">
						</div>
						<div class="col-md-10">
							<p>{!! $berita->konten !!}</p>
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