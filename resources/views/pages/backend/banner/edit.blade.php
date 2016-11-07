<div class="modal-content">
	{!! Form::model($banner, ['class' =>'col s12','files' => true, 'name' => 'formBannerEdit', 'id' => 'formBannerEdit']) !!}
	{{ csrf_field() }}
		{!! Form::hidden('id', encrypt($banner->id), ['id' => 'idBannerUpdate']) !!}
		<div class="row">
			<div class="col s6">
				<div class="file-field input-field">
					<div class="btn">
						<span>Banner</span>
						{!! Form::file('banner', null, ['id' => 'banner']) !!}
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text" value="{{ $banner->banner }}">
					</div>
				</div>
			</div>
			<div class="col s6">
				<a href="{{ asset($banner->banner) }}" target="_blank"><img src="{{ asset($banner->banner) }}" width="150" height="60"></a>
			</div>
		</div>
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