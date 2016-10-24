<div class="modal-content">
	{!! Form::open(['class' =>'col s12','files' => true, 'name' => 'formBanner', 'id' => 'formBanner']) !!}
		<div class="row">
			<div class="col s12">
				<div class="file-field input-field">
					<div class="btn">
						<span>Banner</span>
						{!! Form::file('banner', null, ['id' => 'banner']) !!}
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text">
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				{!! Form::text('hero', null, ['class'=>'validate']) !!}
				<label for="hero">Hero</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				{!! Form::text('lead', null, ['class'=>'validate']) !!}
				<label for="lead">Lead</label>
			</div>
		</div>
	{!! Form::close() !!}
</div>
<div class="modal-footer">
	<button class="waves-effect waves-blue btn-flat" id="submit">Submit</button>
	<button class="waves-effect waves-red btn-flat" id="closeModal">Close</button>
</div>