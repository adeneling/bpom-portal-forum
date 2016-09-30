<table class="table">
	<thead>
		<th>Gambar</th>
		<th>URL</th>
		<th>Hapus</th>
	</thead>
	<tbody>
		@foreach($threadsImages as $threadImage)
			<tr>
				<td><a href="{{ asset($threadImage->located) }}" target="_blank"><img src="{{ asset($threadImage->located) }}" width="50" height="50"></a></td>
				<td>{{ asset($threadImage->located) }}</td>
				<td><a href="" class="btn btn-danger" id="btnDeleteImage" data-id="{{ encrypt($threadImage->id) }}" data-token={{ csrf_token() }}><i class="fa fa-trash"></i></a></td>
			</tr>
		@endforeach
	</tbody>
</table>