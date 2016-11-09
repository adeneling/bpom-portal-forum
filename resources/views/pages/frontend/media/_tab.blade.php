<div class="custom-tabs-line tabs-line-bottom left-aligned product-carousel-tab">
	<ul class="nav" role="tablist">
		<li class="{{ Request::is('media-informasi/video') ? 'active' : '' }}"><a href="{{ route('media.video') }}">Audiovisual</a></li>
		<li class="{{ Request::is('media-informasi/audio') ? 'active' : '' }}"><a href="{{ route('media.audio') }}">Audio</a></li>
		<li class="{{ Request::is('media-informasi/visual') ? 'active' : '' }}"><a href="{{ route('media.visual') }}">Visual</a></li>
	</ul>
</div>