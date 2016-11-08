<table class="striped" id="tablePasarAman">
	<thead>
		<tr>
			<th>No</th>
			<th>Judul Foto</th>
			<th>Foto</th>
			<th>Tanggal dibuat</th>
			<th width="35%">Aksi</th>
		</tr>
	</thead>

	<tbody>
		<?php $no=1 ?>
		@foreach($galeris as $galeri)
		<tr>
			<td>{{ $no++ }}</td>
			<td>{{ $galeri->judul}}</td>
			<td><img src="{{ asset($galeri->foto) }}" width="50" height="50"></td>
			<td>{{ date('d F Y, H:i', strtotime($galeri->created_at)) }}</td>
			<td>
 				<a href="{{ route('admin.galeri.show', encrypt($galeri->id))}}" class="btn-floating waves-effect waves-light green"><i class="mdi-action-search"></i></a>
 				<a href="{{ route('admin.galeri.edit', encrypt($galeri->id))}}" class="btn-floating waves-effect waves-light blue"><i class="mdi-image-edit"></i></a>
				<a class="btn-floating waves-effect waves-light red" id="delete-galeri" data-id="{{ encrypt($galeri->id) }}"><i class="mdi-action-delete"></i></a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
{{ $galeris->links() }}