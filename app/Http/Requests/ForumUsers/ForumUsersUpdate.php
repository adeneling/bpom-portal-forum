<?php

namespace App\Http\Requests\ForumUsers;

use Illuminate\Foundation\Http\FormRequest;

class ForumUsersUpdate extends FormRequest
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
			'name' => 'required',
			'email' => 'required|email',
			'password' => 'required|min:8|alpha_num',
			'confirmPassword' => 'required|same:password',
			'photo' => 'image|max:3072',
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
			'name.required' => 'Nama Panjang tidak boleh kosong!',
			'email.required' => 'Email tidak boleh kosong!',
			'email.email' => 'Email harus sesuai!',
			'password.required' => 'Password tidak boleh kosong!',
			'password.min' => 'Password minimal 8 karakter!',
			'password.alpha_num' => 'Password harus terdiri dari angka dan huruf!',
			'confirmPassword.required' => 'Konfirmasi Password tidak boleh kosong!',
			'confirmPassword.same' => 'Konfirmasi Password harus sesuai dengan Password!',
			'photo.image' => 'File gambar harus dengan format (jpeg, png, bmp, gif, atau svg)!',
			'photo.max' => 'Ukuran gambar harus lebih kecil dari 3 MB!'
		];
	}
}
