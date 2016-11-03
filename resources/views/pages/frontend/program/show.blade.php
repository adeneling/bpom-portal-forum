@extends('layouts.frontend.app')

@section('title', 'Program')

@section('content')
<div class="page-content">
	<div class="container">
		<!-- BLOG SINGLE -->
		<div class="blog single full-thumbnail">
			<!-- blog post -->
			<article class="entry-post">
				<header class="entry-header">
					<h2 class="entry-title">
						{{ $program->nama }}
					</h2>
					<div class="meta-line clearfix">
						<div class="meta-tag-comment pull-right">
							<span class="post-comment"><i class="fa fa-calendar"></i> <a href="#">Dibuat: {{ $program->created_at }}</a></span>
						</div>
					</div>
				</header>
				<div class="entry-content clearfix">
					<figure class="featured-image">
						<center>
							<img src="{{ isset($program->media_foto) ? $program->media_foto : '' }}" class="img-responsive" alt="featured-image" />
							<span><strong>{{ $program->nama }}</strong></span>
						</center>						
					</figure>
					<div class="excerpt">
						<div class="col-md-1">
						</div>
						<div class="col-md-10">
							<p>{!! $program->deskripsi !!}</p>
						</div>						
						<div class="col-md-1">
						</div>						
					</div>
				</div>
				<hr>
				<center>
					<a href="{{ url('program') }}" class="btn btn-primary">KEMBALI</a>
				</center>				
			</article>
		</div>
	</div>
</div>
@stop