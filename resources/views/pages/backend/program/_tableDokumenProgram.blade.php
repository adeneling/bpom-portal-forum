<table class="striped" id="tablePasarAman">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Dokumen</th>
			<th>Tanggal dibuat</th>
			<th width="35%">Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $idx=1 ?>
		@foreach($dokumens as $dokumen)
		<tr>
			<td>{{ $idx++ }}</td>
			<td>{{ $dokumen->nama}}</td>
			<td>{{ date('d F Y', strtotime($dokumen->created_at)) }}</td>
			<td>
				<a href="{{ route('admin.program-dokumen.show', encrypt($dokumen->id))}}" class="btn-floating waves-effect waves-light green"><i class="mdi-action-search"></i></a>
 				<a href="{{ route('admin.program-dokumen.edit', encrypt($dokumen->id))}}" class="btn-floating waves-effect waves-light blue"><i class="mdi-image-edit"></i></a>
				<a class="btn-floating waves-effect waves-light red" id="delete-program-dokumen" data-id="{{ encrypt($dokumen->id) }}"><i class="mdi-action-delete"></i></a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>