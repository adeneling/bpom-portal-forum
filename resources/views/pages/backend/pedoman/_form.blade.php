<div class="row">
	<div class="input-field col s9">
		{!! Form::text('judul', null, ['class'=>'validate']) !!}
		<label for="first_name">Judul Pedoman</label>
	</div>
</div>
<div class="row">
	<div class="input-field col s9">
		{!! Form::textarea('konten', null, ['class'=>'materialize-textarea']) !!}
		<label for="textarea1">Konten</label>
	</div>
</div>
<div class="row">
	<div class="col s6">
		<div class="file-field input-field">
			<div class="btn">
				<span>Dokumen</span>
				{!! Form::file('media_dokumen', null) !!}
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