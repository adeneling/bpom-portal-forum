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
		@foreach($roles as $role)
			<tr>
				<td>{{ $role->name }}</td>
				<td>{{ $role->display_name }}</td>
				<td>{{ $role->description }}</td>
				<td>
					<a class="btn-floating waves-effect waves-light blue" id="edit-group" data-id="{{ encrypt($role->id) }}"><i class="mdi-image-edit"></i></a>
					<a class="btn-floating waves-effect waves-light red" id="delete-group" data-id="{{ encrypt($role->id) }}"><i class="mdi-action-delete"></i></a>
				</td>
			</tr>
			@endforeach
	</tbody>
</table>