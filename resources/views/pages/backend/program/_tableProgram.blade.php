<table class="striped" id="tablePasarAman">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Program</th>
			<th>Tanggal dibuat</th>
			<th width="35%">Aksi</th>
		</tr>
	</thead>

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
				<a href="{{ route('admin.program.show', encrypt($program->id))}}" class="btn-floating waves-effect waves-light green"><i class="mdi-action-search"></i></a>
 				<a href="{{ route('admin.program.edit', encrypt($program->id))}}" class="btn-floating waves-effect waves-light blue"><i class="mdi-image-edit"></i></a>
				<a class="btn-floating waves-effect waves-light red" id="delete-program" data-id="{{ encrypt($program->id) }}"><i class="mdi-action-delete"></i></a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>