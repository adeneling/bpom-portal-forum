<table class="striped" id="tablePasarAman">
	<thead>
		<tr>
		<th data-field="no">No</th>
		<th data-field="photo">Photo</th>
		<th data-field="nama_pasar">Nama Pasar</th>
		<th data-field="provinsi">Provinsi</th>
		<th data-field="kota">Kota</th>
		<th data-field="kabupaten">Kabupaten</th>
		<th data-field="aksi">aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1;?>
		@foreach($pasarAman as $pasar)
			<tr>
				<td>{{ $no++ }}</td>
				<td><img src="{{ asset($pasar->photo) }}" width=50 height=50></td>
				<td>{{ $pasar->nama_pasar }}</td>
				<td>{{ $pasar->provinsi['provinsi'] }}</td>
				<td>{{ $pasar->kota['kota'] }}</td>
				<td>{{ !empty($pasar->kecamatan['kecamatan']) ? $pasar->kecamatan['kecamatan'] : '' }}</td>
				<td>
					<a class="btn-floating waves-effect waves-light blue" href="{{ route('admin.pasar-aman.edit', encrypt($pasar->id)) }}"><i class="mdi-image-edit"></i></a>
					<a class="btn-floating waves-effect waves-light red" id="delete-pasaraman" data-id="{{ encrypt($pasar->id) }}"><i class="mdi-action-delete"></i></a>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>