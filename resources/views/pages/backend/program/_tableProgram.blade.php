<table class="striped" id="tablePasarAman">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Program</th>
			<th>Tanggal dibuat</th>
			<th width="35%">Aksi</th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<th>No</th>
			<th>Nama Program</th>
			<th>Nyalakan</th>
			<th>Aksi</th>
		</tr>
	</tfoot>

	<tbody>
		<?php $no=1 ?>
		@foreach($programs as $program)
		<tr>
			<td>{{ $no++ }}</td>
			<td>{{ $program->nama}}</td>
			<td>
				<div class="switch"> 
					<label>
						Off
						<input type="checkbox" {{ $program->isenabled == 1 ? 'checked' : '' }} id="enabledProgram" data-id="{{ encrypt($program->id) }}" data-token="{{ csrf_token() }}">
						<span class="lever"></span> On
					</label>
				</div>
			</td>
			<td>
				{!! Form::model($program, ['route' => ['admin.program.destroy', $program], 'method' => 'delete'] ) !!}
				<a href="{{ route('admin.program.show', encrypt($program->id))}}" class="btn waves-effect waves-light teal">Lihat</a>
				<a href="{{ route('admin.program.edit', encrypt($program->id))}}" class="btn waves-effect waves-light blue">Edit</a>
				<button type="submit" class="btn waves-effect waves-light red">Hapus</button>
				{!! Form::close()!!}
			</td>
		</tr>
		@endforeach
	</tbody>
</table>