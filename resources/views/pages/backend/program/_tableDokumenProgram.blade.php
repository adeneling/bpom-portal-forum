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
			<td>{{ $dokumen->created_at }}</td>
			<td>
				{!! Form::model($dokumen, ['route' => ['admin.program-dokumen.destroy', $dokumen], 'method' => 'delete'] ) !!}
				<a href="{{ route('admin.program-dokumen.show', encrypt($dokumen->id))}}" class="btn waves-effect waves-light teal">Lihat</a>
				<a href="{{ route('admin.program-dokumen.edit', encrypt($dokumen->id))}}" class="btn waves-effect waves-light blue">Edit</a>
				<button type="submit" class="btn waves-effect waves-light red">Hapus</button>
				{!! Form::close()!!}
			</td>
		</tr>
		@endforeach
	</tbody>
</table>