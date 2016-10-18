<table class="striped" id="tablePasarAman">
	<thead>
		<tr>
			<th data-field="no">No</th>
			<th data-field="nama">Nama</th>
			<th data-field="email">Email</th>
			<th data-field="admin">Admin</th>
			<th data-field="aksi">aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1;?>
		@foreach($penggunaForum as $pengguna)
			<tr>
				<td>{{ $no++ }}</td>
				<td>{{ $pengguna->name }}</td>
				<td>{{ $pengguna->email }}</td>
				<td>{{ $pengguna->isAdmin == 1 ? 'Admin' : 'Pengguna' }}</td>
				<td>
					<a class="btn-floating waves-effect waves-light blue" href="{{ route('admin.pengguna-forum.edit', encrypt($pengguna->id)) }}"><i class="mdi-image-edit"></i></a>
					<a class="btn-floating waves-effect waves-light red" id="delete-pengguna-forum" data-id="{{ encrypt($pengguna->id) }}"><i class="mdi-action-delete"></i></a>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>