<div class="modal-content">
	{!! Form::model($role, ['class' => 'col s12', 'id' => 'groups-form-edit']) !!}
		{!! Form::hidden('id', encrypt($role->id), ['id' => 'id']) !!}
		<div class="row">
			<div class="input-field col s12">
				{!! Form::text('name', $role->name, ['id' => 'name', 'class' => 'validate', 'placeholder' => 'Nama']) !!}
				<label for="name">Nama Grup</label>
			</div>
			<div class="input-field col s12">
				{!! Form::text('display_name', $role->display_name, ['id' => 'display_name', 'class' => 'validate', 'placeholder' => 'Nama Tampilan']) !!}
				<label for="display_name">Nama Tampilan</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				{!! Form::text('deskripsi', $role->description, ['id' => 'deskripsi', 'class' => 'validate', 'placeholder' => 'Deskripsi']) !!}
				<label for="deskripsi">Deskripsi</label>
			</div>
		</div>
	{!! Form::close() !!}	
</div>
<div class="modal-footer">
	<button class="waves-effect waves-blue btn-flat" id="submitEdit">Submit</button>
	<button class="waves-effect waves-red btn-flat" id="closeModal">Close</button>
</div>