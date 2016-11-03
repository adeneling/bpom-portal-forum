<table class="table">
	<thead>
		<th>Topik</th>
		<th>Post</th>
		<th>Komentar Terakhir</th>
		<th>Komentar</th>
		<th>Tipe</th>
		<th>Aksi</th>
	</thead>
	<tbody>
		@foreach($user->thread as $thread)
			<?php
				$countComment = $thread->comment()->commentThread($thread->id)->count();
			?>
			<tr>
				<td><b><a href="{{ App\Helpers\AppHelpers::urlThreadForum($thread->id, $thread->judulThread) }}">{{ $thread->judulThread }}</a></b></td>
				<td>{{ date("d F Y", strtotime($thread->created_at)) }}</td>
				<td>12 Agustus 2016</td>
				<td><span class="badge">{{ $countComment }}</span></td>
				<td><b>{{ $thread->tipe == 'umum' ? 'Umum' : 'Guide' }}</b></td>
				<td>
					<a href="{{ route('thread.edit', base64_encode(config('app.salt').$thread->id)) }}" class="btn btn-warning btn-xs">Edit</a>
					<a href="#" class="btn btn-danger btn-xs" id="btnDelete" data-id="{{ encrypt($thread->id) }}">Delete</a>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>