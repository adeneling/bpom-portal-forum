<div class="row">
	<div class="input-field col s9">
		{!! Form::text('Nama', null, ['class'=>'validate']) !!}
		<label for="nama">Nama</label>
	</div>
</div>
<div class="row">
	<div class="input-field col s9">
		{!! Form::textarea('deskripsi', null, ['class'=>'materialize-textarea']) !!}
		<label for="textarea1">Deskripsi</label>
	</div>
</div>
<div class="row">
	<div class="input-field col s2">
		<div class="input-field col s12">
			<select>
				<option value="" disabled selected>Pilih Tipe</option>
				<option value="audio">Audio</option>
				<option value="gambar">Gambar</option>
				<option value="dokumen">Dokumen</option>
			</select>
		</div>
	</div>
</div>
<div class="row">
	<div class="col s6">
		<div class="file-field input-field">
			<div class="btn">
				<span>File</span>
				{!! Form::file('lokasi', null) !!}
			</div>
			<div class="file-path-wrapper">
				<input class="file-path validate" type="text">
			</div>
		</div>
	</div>
</div>
<div class="row">
	<center>
		<button class="btn waves-effect waves-light indigo" type="submit" name="action">Submit
        	<i class="mdi-content-send right"></i>
      	</button>
	</center>
</div>