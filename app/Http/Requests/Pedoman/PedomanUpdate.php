<?php

namespace App\Http\Requests\Pedoman;

use Illuminate\Foundation\Http\FormRequest;

class PedomanUpdate extends FormRequest
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
            'media_dokumen' => 'mimes:pdf,doc,docx',
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
            'media_dokumen.mimes' => 'Dokumen yang diperbolehkan hanya yang berformat (pdf, doc, docx)',
        ];
    }
}
