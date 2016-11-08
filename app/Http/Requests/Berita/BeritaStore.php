<?php

namespace App\Http\Requests\Berita;

use Illuminate\Foundation\Http\FormRequest;

class BeritaStore extends FormRequest
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
			'judul' => 'required',
			'konten' => 'required',
			'photo' => 'image|max:3072'
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
			'judul.required' => 'Judul tidak boleh kosong!',
			'konten.required' => 'Konten berita tidak boleh kosong!',
			'photo.image' => 'File gambar harus dengan format (jpeg, png, bmp, gif, atau svg)!',
			'photo.max' => 'Ukuran gambar harus lebih kecil dari 3 MB!'
		];
	}
}
