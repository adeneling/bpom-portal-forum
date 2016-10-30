<table class="striped" id="tableMediaPromosi">
	<thead>
		<tr>
		<th data-field="no">No</th>
		<th data-field="nama">nama</th>
		<th data-field="lokasi">Lokasi</th>
		<th data-field="jenis">Jenis</th>
		<th data-field="aksi">aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1;?>
		@foreach($media as $val)
			<tr>
				<td>{{ $no++ }}</td>
				<td>{{ $val->nama }}</td>
				<td>{{ $val->lokasi }}</td>
				<td>{{ $val->tipe }}</td>
				<td>
					<a class="btn-floating waves-effect waves-light blue" href="{{ route('admin.media-promosi.edit', encrypt($val->id)) }}"><i class="mdi-image-edit"></i></a>
					<a class="btn-floating waves-effect waves-light red" id="delete-media-promosi" data-id="{{ encrypt($val->id) }}"><i class="mdi-action-delete"></i></a>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>