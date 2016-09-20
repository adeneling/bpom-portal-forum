<?php

namespace App\Http\Requests\Forum;

use Illuminate\Foundation\Http\FormRequest;

class ForumRequests extends FormRequest
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
			'judul-thread' => 'required',
			'konten' => 'required',
			'g-recaptcha-response' => 'required|recaptcha',
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
			'judul-thread.required' => 'Judul thread tidak boleh kosong',
			'konten.required' => 'Konten thread tidak boleh kosong',
			'g-recaptcha-response.required'  => 'Google captcha tidak boleh kosong',
		];
	}
}
