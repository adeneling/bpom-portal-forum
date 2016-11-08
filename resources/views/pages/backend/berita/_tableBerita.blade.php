<table class="striped" id="tablePasarAman">
	<thead>
		<tr>
			<th>No</th>
			<th>Judul Berita</th>
			<th>Tanggal dibuat</th>
			<th width="35%">Aksi</th>
		</tr>
	</thead>

	<tbody>
		<?php $no=1 ?>
		@foreach($beritas as $berita)
		<tr>
			<td>{{ $no++ }}</td>
			<td>{{ $berita->judul}}</td>
			<td>{{ $berita->created_at }}</td>
			<td>
 				<a href="{{ route('admin.berita.show', encrypt($berita->id))}}" class="btn-floating waves-effect waves-light green"><i class="mdi-action-search"></i></a>
 				<a href="{{ route('admin.berita.edit', encrypt($berita->id))}}" class="btn-floating waves-effect waves-light blue"><i class="mdi-image-edit"></i></a>
				<a class="btn-floating waves-effect waves-light red" id="delete-berita" data-id="{{ encrypt($berita->id) }}"><i class="mdi-action-delete"></i></a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
{{ $beritas->links() }}