<table class="table">
	<thead>
		<th>Topik</th>
		<th>Post</th>
		@if(auth('forum')->check())
			@if(auth('forum')->user()->admin == 2)
				<th>Aksi</th>
			@endif
		@endif
	</thead>
	<tbody>
		@foreach($guides as $guide)
			<?php
				$countComment = $guide->comment()->commentThread($guide->id)->count();
			?>
			<tr>
				<td>
					<b><a href="{{ App\Helpers\AppHelpers::urlGuideForum($guide->id, $guide->judulThread) }}">{{ $guide->judulThread }}</a></b><br>
					<small>By {{ $guide->forumUsers->name }}</small>
				</td>
				<td>{{ date("d F Y", strtotime($guide->created_at)) }}</td>
				@if(auth('forum')->check())
					@if(auth('forum')->user()->admin == 2)
						<td>
							<a href="{{ route('thread.edit', base64_encode(config('app.salt').$guide->id)) }}" class="btn btn-warning btn-xs">Edit</a>
							<a href="#" class="btn btn-danger btn-xs" id="btnDeleteGuide" data-id="{{ encrypt($guide->id) }}">Delete</a>
						</td>
					@endif
				@endif
			</tr>
		@endforeach
	</tbody>
</table>