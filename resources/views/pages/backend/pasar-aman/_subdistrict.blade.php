<select name="subdistrict" id="subdistrict">
	<option value="" disabled selected>Pilih Salah Satu!</option>
	@foreach($subdistricts as $subdistrict)
		<option value="{{ encrypt($subdistrict->id) }}">{{ $subdistrict->kecamatan }}</option>
	@endforeach
</select>