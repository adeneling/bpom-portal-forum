<?php

namespace App\Http\Requests\Program;

use Illuminate\Foundation\Http\FormRequest;

class ProgramStore extends FormRequest
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
			'media_foto' => 'required|image|max:5120',
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
			'media_foto.required' => 'Foto belum diinputkan!',
			'media_foto.image' => 'Foto harus dengan format (jpeg, png, bmp, gif, atau svg)!',
            'media_foto.max' => 'Foto harus lebih kecil dari 5 MB!'
		];
	}
}
