<?php

namespace App\Http\Requests\Program;

use Illuminate\Foundation\Http\FormRequest;

class ProgramDokumenUpdate extends FormRequest
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
			'file' => 'mimes:pdf,doc,docx|max:5120',
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
			'file.mimes' => 'File yang diperbolehkan hanya yang berformat (pdf, doc, docx)',
            'file.max' => 'Foto harus lebih kecil dari 5 MB!',
		];
	}
}
