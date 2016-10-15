<?php

namespace App\Http\Requests\PasarAman;

use Illuminate\Foundation\Http\FormRequest;

class PasarAmanStore extends FormRequest
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
            'nama_pasar' => 'required',
            'alamat_pasar' => 'required',
            'province' => 'required',
            'city' => 'required',
            'photo' => 'image|size:2048',
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
            'nama_pasar.required' => 'Kolom Nama Pasar tidak boleh kosong',
            'alamat_pasar.required' => 'Kolom Alamat Pasar tidak boleh kosong',
            'province.required' => 'Kolom Provinsi Pasar tidak boleh kosong',
            'city.required' => 'Kolom Kota Pasar tidak boleh kosong',
            'photo.image' => 'File yang diupload harus berupa gambar dengan format (jpeg, png, bmp, gif, atau svg)',
            'photo.size' => 'Ukuran maksimal file yang diupload adalah 2 MB.',
            'g-recaptcha-response.required'  => 'Google captcha tidak boleh kosong',
        ];
    }
}
