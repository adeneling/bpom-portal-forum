<?php

namespace App\Http\Requests\Banner;

use Illuminate\Foundation\Http\FormRequest;

class BannerStore extends FormRequest
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
			'banner' => 'required|image|max:3072|dimensions:min_width=1900,min_height=500'
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
			'banner.required' => 'Gambar belum diinputkan!',
			'banner.image' => 'Gambar harus dengan format (jpeg, png, bmp, gif, atau svg)!',
			'banner.max' => 'Ukuran gambar harus lebih kecil dari 3 MB!',
			'banner.dimensions' => 'Ukuran gambar minimal panjang 1900px dan tinggi 500px',
		];
	}
}
