<?php

namespace App\Http\Requests\Forum;

use Illuminate\Foundation\Http\FormRequest;

class ImageThreadRequest extends FormRequest
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
            'image' => 'file|image|max:4000',
            // 'g-recaptcha-response' => 'required|recaptcha',
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
            'image.file' => 'Upload hanya file',
            'image.image' => 'Hanya file gambar yang dapat diupload',
            'image.max' => 'Maksimal gambar yang diupload sebesar 4 MB',
            // 'g-recaptcha-response.required'  => 'Google captcha tidak boleh kosong',
        ];
    }
}
