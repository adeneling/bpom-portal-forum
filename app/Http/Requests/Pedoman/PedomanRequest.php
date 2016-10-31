<?php

namespace App\Http\Requests\Pedoman;

use Illuminate\Foundation\Http\FormRequest;

class PedomanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'judul' => 'required',
            'media_dokumen' => 'required|mimes:pdf,doc,docx',
        ];
    }
}
