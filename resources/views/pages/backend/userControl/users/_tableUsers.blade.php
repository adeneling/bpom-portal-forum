<table class="striped" id="tableGroup">
	<thead>
		<tr>
			<th data-field="name">Name</th>
			<th data-field="display_name">Display Name</th>
			<th data-field="deskripsi">Deskripsi</th>
			<th data-field="action">Aksi</th>
		</tr>
	</thead>
	<tbody>
		@foreach($users as $user)
			<tr>
				<td>{{ $user->name }}</td>
				<td>{{ $user->display_name }}</td>
				<td>{{ $user->description }}</td>
				<td>
					<a class="btn-floating waves-effect waves-light blue" id="edit-group" data-id="{{ encrypt($user->id) }}"><i class="mdi-image-edit"></i></a>
					<a class="btn-floating waves-effect waves-light red" id="delete-group" data-id="{{ encrypt($user->id) }}"><i class="mdi-action-delete"></i></a>
				</td>
			</tr>
			@endforeach
	</tbody>
</table>