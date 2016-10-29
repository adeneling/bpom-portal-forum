<div class="custom-tabs-line tabs-line-bottom left-aligned product-carousel-tab">
	<ul class="nav" role="tablist">
		<li class="{{ Request::is('media-informasi/video') ? 'active' : '' }}"><a href="{{ route('media.video') }}">Video</a></li>
		<li class="{{ Request::is('media-informasi/audio') ? 'active' : '' }}"><a href="{{ route('media.audio') }}">Audio</a></li>
		<li class="{{ Request::is('media-informasi/gambar') ? 'active' : '' }}"><a href="{{ route('media.gambar') }}">Gambar</a></li>		
		<li class="{{ Request::is('media-informasi/dokumen') ? 'active' : '' }}"><a href="{{ route('media.dokumen') }}">Dokumen</a></li>
	</ul>
</div>