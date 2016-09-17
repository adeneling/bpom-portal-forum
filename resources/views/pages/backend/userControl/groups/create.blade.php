<div class="modal-content">
	{!! Form::open(['class' => 'col s12', 'id' => 'groups-form']) !!}
		<div class="row">
			<div class="input-field col s12">
				<input id="name" name="name" type="text">
				<label for="name">Nama Grup</label>
			</div>
			<div class="input-field col s12">
				<input id="display_name" name="display_name" type="text">
				<label for="display_name">Nama Tampilan</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				<input id="deskripsi" name="deskripsi" type="text">
				<label for="deskripsi">Deskripsi</label>
			</div>
		</div>
	{!! Form::close() !!}	
</div>
<div class="modal-footer">
	<button class="waves-effect waves-blue btn-flat" id="submit">Submit</button>
	<button class="waves-effect waves-red btn-flat" id="closeModal">Close</button>
</div>