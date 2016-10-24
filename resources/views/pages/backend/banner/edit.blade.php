<div class="modal-content">
	{!! Form::model($banner, ['class' =>'col s12','files' => true, 'name' => 'formBannerEdit', 'id' => 'formBannerEdit']) !!}
		{!! Form::hidden('id', encrypt($banner->id), ['id' => 'idBannerUpdate']) !!}
		<div class="row">
			<div class="input-field col s12">
				{!! Form::text('hero', $banner->hero, ['class'=>'validate']) !!}
				<label for="hero">Hero</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				{!! Form::text('lead', $banner->lead, ['class'=>'validate']) !!}
				<label for="lead">Lead</label>
			</div>
		</div>
	{!! Form::close() !!}
</div>
<div class="modal-footer">
	<button class="waves-effect waves-blue btn-flat" id="update">Update</button>
	<button class="waves-effect waves-red btn-flat" id="closeModal">Close</button>
</div>