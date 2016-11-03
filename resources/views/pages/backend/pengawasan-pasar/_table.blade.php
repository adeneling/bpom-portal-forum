<table class="striped" id="tablePasarAman">
	<thead>
		<tr>
		<th data-field="no">No</th>
		<th data-field="photo">Photo</th>
		<th data-field="nama_pasar">Nama Pasar</th>
		<th data-field="provinsi">Provinsi</th>
		<th data-field="kota" width="5%">Kota</th>
		<th data-field="nilai_bb" width="10%">Nilai BB</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1;?>
		@foreach($pasarAman as $pasar)
			<tr>
				<td>{{ $no++ }}</td>
				<td><img src="{{ asset($pasar->photo) }}" width=250 height=150></td>
				<td>{{ $pasar->nama_pasar }}</td>
				<td>{{ $pasar->provinsi['provinsi'] }}</td>
				<td>{{ $pasar->kota['tipe'].' '.$pasar->kota['kota'] }}</td>
				<td>
					<div id="card-alert" class="card light-blue lighten-5">
						<div class="card-content light-blue-text">
							{!! Form::number('nilai_bb[]', null, ['class'=>'validate']) !!}
						</div>
					</div>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>