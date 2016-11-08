<?php

namespace App\Http\Requests\Galeri;

use Illuminate\Foundation\Http\FormRequest;

class GaleriStore extends FormRequest
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
            'foto' => 'required|image|max:3072'
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
            'foto.required' => 'Foto belum diinputkan!',
            'foto.image' => 'File gambar harus dengan format (jpeg, png, bmp, gif, atau svg)!',
            'foto.max' => 'Ukuran gambar harus lebih kecil dari 3 MB!'
        ];
    }
}
