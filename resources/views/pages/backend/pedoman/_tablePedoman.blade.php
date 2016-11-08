<table class="striped" id="tablePedoman">
	<thead>
		<tr>
			<th>No</th>
			<th>Judul Pedoman</th>
			<th>Tanggal dibuat</th>
			<th width="35%">Aksi</th>
		</tr>
	</thead>

	<tbody>
		<?php $no=1 ?>
		@foreach($pedomans as $pedoman)
		<tr>
			<td>{{ $no++ }}</td>
			<td>{{ $pedoman->judul}}</td>
			<td>{{ $pedoman->created_at }}</td>
			<td>
 				<a href="{{ route('admin.pedoman.show', encrypt($pedoman->id))}}" class="btn-floating waves-effect waves-light green"><i class="mdi-action-search"></i></a>
 				<a href="{{ route('admin.pedoman.edit', encrypt($pedoman->id))}}" class="btn-floating waves-effect waves-light blue"><i class="mdi-image-edit"></i></a>
				<a class="btn-floating waves-effect waves-light red" id="delete-pedoman" data-id="{{ encrypt($pedoman->id) }}"><i class="mdi-action-delete"></i></a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>