<table class="striped" id="tablePasarAman">
	<thead>
		<tr>
			<th data-field="no">No</th>
			<th data-field="banner">Banner</th>
			<th data-field="hero">Hero</th>
			<th data-field="lead">Lead</th>
			<th data-field="isactive">Aktifkan</th>
			<th data-field="action">aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1; ?>
		@foreach($banners as $banner)
			<tr>
				<td>{{ $no++ }}</td>
				<td><img src="{{ asset($banner->banner) }}" width="60" height="30"></td>
				<td>{{ $banner->hero }}</td>
				<td>{{ $banner->lead }}</td>
				<td>
					<div class="switch"> 
						<label>
							Off
							<input type="checkbox" {{ $banner->isenabled == 1 ? 'checked' : '' }} id="enabledBanner" data-id="{{ encrypt($banner->id) }}" data-token="{{ csrf_token() }}">
							<span class="lever"></span> On
						</label>
					</div>
				</td>
				<td>
					<a class="btn-floating waves-effect waves-light blue" id="edit-banner" data-id="{{ encrypt($banner->id) }}"><i class="mdi-image-edit"></i></a>
					<a class="btn-floating waves-effect waves-light red" id="delete-banner" data-id="{{ encrypt($banner->id) }}"><i class="mdi-action-delete"></i></a>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>