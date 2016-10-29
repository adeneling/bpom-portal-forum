<table class="striped" id="tablePasarAman">
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
		@foreach($pasarAman as $pasar)
			<tr>
				<td>{{ $no++ }}</td>
				<td>{{  }}</td>
				<td>{{ $pasar->nama_pasar }}</td>
				<td>{{ $pasar->provinsi->provinsi }}</td>
				<td>
					<a class="btn-floating waves-effect waves-light blue" href="{{ route('admin.pasar-aman.edit', encrypt($pasar->id)) }}"><i class="mdi-image-edit"></i></a>
					<a class="btn-floating waves-effect waves-light red" id="delete-pasaraman" data-id="{{ encrypt($pasar->id) }}"><i class="mdi-action-delete"></i></a>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>