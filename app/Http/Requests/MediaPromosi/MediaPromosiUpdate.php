<?php

namespace App\Http\Requests\MediaPromosi;

use Illuminate\Foundation\Http\FormRequest;

class MediaPromosiUpdate extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			//
			'nama' => 'required',
			'tipe' => 'required',
		];
	}

	/**
	 * Get the error messages for the defined validation rules.
	 *
	 * @return array
	 */
	public function messages()
	{
		return [
			'nama.required' => 'Nama tidak boleh kosong!',
			'tipe.required' => 'Tipe file tidak boleh kosong!',
		];
	}
}
