<table id="data-table-simple" class="responsive-table display" cellspacing="0">
	<thead>
		<tr>
			<th>No</th>
			<th>Judul Foto</th>
			<th>Foto</th>
			<th>Tanggal dibuat</th>
			<th width="35%">Aksi</th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<th>No</th>
			<th>Judul Foto</th>
			<th>Foto</th>
			<th>Tanggal dibuat</th>
			<th width="35%">Aksi</th>
		</tr>
	</tfoot>

	<tbody>
		<?php $no=1 ?>
		@foreach($galeris as $galeri)
		<tr>
			<td>{{ $no++ }}</td>
			<td>{{ $galeri->judul}}</td>
			<td><img src="{{ asset($galeri->foto) }}" width="50" height="50"></td>
			<td>{{ $galeri->created_at }}</td>
			<td>
				{!! Form::model($galeri, ['route' => ['admin.galeri.destroy', $galeri], 'method' => 'delete'] ) !!}
				<a href="{{ route('admin.galeri.show', encrypt($galeri->id))}}" class="btn waves-effect waves-light teal">Lihat</a>
 				<a href="{{ route('admin.galeri.edit', encrypt($galeri->id))}}" class="btn waves-effect waves-light blue">Edit</a>
 				<button type="submit" class="btn waves-effect waves-light red">Hapus</button>
 				{!! Form::close()!!}
			</td>
		</tr>
		@endforeach
	</tbody>
</table>