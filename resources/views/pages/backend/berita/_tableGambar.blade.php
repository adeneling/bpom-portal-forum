<table class="striped" id="tablePasarAman">
	<thead>
		<tr>
			<th data-field="no">No</th>
			<th data-field="photo">Photo</th>
			<th data-field="url">URL</th>
			<th data-field="delete">delete</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; ?>
		@foreach($pictures as $val)
			<tr>
				<td>{{ $no++ }}</td>
				<td><a href="{{ asset($val->located) }}" target="_blank"><img src="{{ asset($val->located) }}" width="50" height="50"></a></td>
				<td>{{ asset($val->located) }}</td>
				<td><button class="btn-floating waves-effect waves-light red" id="deletePhoto" data-id="{{ encrypt($val->id) }}" data-token="{{ csrf_token() }}"><i class="mdi-content-clear"></i></button></td>
			</tr>
		@endforeach
	</tbody>
</table>