<table class="table">
	<thead>
		<th>Topik</th>
		<th>Post</th>
		<th>Komentar Terakhir</th>
		<th>Komentar</th>
		@if(auth('forum')->check())
			@if(auth('forum')->user()->admin == 2)
				<th>Aksi</th>
			@endif
		@endif
	</thead>
	<tbody>
		@foreach($threads as $thread)
			<?php
				$countComment = $thread->comment()->commentThread($thread->id)->count();
			?>
			<tr>
				<td>
					<b><a href="{{ App\Helpers\AppHelpers::urlThreadForum($thread->id, $thread->judulThread) }}">{{ $thread->judulThread }}</a></b><br>
					<small>By {{ $thread->forumUsers->name }}</small>
				</td>
				<td>{{ date("d F Y", strtotime($thread->created_at)) }}</td>
				<td>{{ $countComment != 0 ? date("d F Y", strtotime($thread->comment()->lastComment($thread->id)->first()['created_at'])) : '-' }}</td>
				<td><span class="badge">{{ $countComment }}</span></td>
				@if(auth('forum')->check())
					@if(auth('forum')->user()->admin == 2)
						<td>
							<a href="{{ route('thread.edit', base64_encode(config('app.salt').$thread->id)) }}" class="btn btn-warning btn-xs">Edit</a>
							<a href="#" class="btn btn-danger btn-xs" id="btnDeleteThread" data-id="{{ encrypt($thread->id) }}">Delete</a>
						</td>
					@endif
				@endif
			</tr>
		@endforeach
	</tbody>
</table>