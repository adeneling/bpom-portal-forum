<div class="row">
	<div class="input-field col s8">
		{!! Form::text('judul', null, ['class'=>'validate']) !!}
		<label for="first_name">Judul Berita</label>
	</div>
</div>
<div class="row">
	<div class="input-field col s8">
		{!! Form::textarea('konten', null, ['class'=>'materialize-textarea']) !!}
	</div>
</div>
<div class="row">
	<div class="col s6">
		<div class="file-field input-field">
			<div class="btn">
				<span>Foto</span>
				{!! Form::file('media_foto', null) !!}
			</div>
			<div class="file-path-wrapper">
				<input class="file-path validate" type="text">
			</div>
		</div>
	</div>
	<div class="col s6">
		<div class="input-field col s8">
			<button class="btn waves-effect waves-light green">Upload Foto</button>
		</div>
	</div>
</div>
<div class="row">
	<div class="input-field col s8">
		<button class="btn waves-effect waves-light green">Lihat Foto</button>
	</div>
</div>
<div class="row">
	<center>
		<button class="btn waves-effect waves-light indigo" type="submit" name="action">Submit
			<i class="mdi-content-send right"></i>
		</button>
	</center>
</div>