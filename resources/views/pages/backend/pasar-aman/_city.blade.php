<select name="city" id="city">
	<option value="" disabled selected>Pilih Salah Satu!</option>
	@foreach($cities as $city)
		<option value="{{ encrypt($city->id) }}">{{ $city->tipe." ".$city->kota }}</option>
	@endforeach
</select>