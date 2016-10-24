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
						<div class="meta-author-category pull-left">
							<span class="post-author">by <a href="#">John Doe</a></span>
							<span class="post-category">In: <a href="#">Business</a>, <a href="#">Creative</a>, <a href="#">Media</a></span>
						</div>
						<div class="meta-tag-comment pull-right">
							<span class="post-tags"><i class="fa fa-tag"></i> <a href="#">story</a>, <a href="#">inspiration</a>, <a href="#">creative</a></span>
							<span class="post-comment"><i class="fa fa-comments"></i> <a href="#">3 Comments</a></span>
						</div>
					</div>
				</header>
				<div class="entry-content clearfix">
					<figure class="featured-image">
						<div class="post-date-info clearfix"><span class="post-month">DEC</span><span class="post-date">11</span><span class="post-year">2014</span></div>
						<img src="assets/img/blog/buildings.jpg" class="img-responsive" alt="featured-image" />
					</figure>
					<div class="excerpt">
						<p>{!! $berita->konten !!}</p>
					</div>
				</div>
			</article>
			<!-- end blog post -->
			<hr>
			<hr>
		</div>
	</div>
</div>
@stop