<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequestValidation extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'image' => 'required|image|mimes:jpeg,png,jpg|max:5048',
            'title' => 'required|string|max:35',
            'content' => 'required|string',
        ];
    }
    public function messages()
    {
        return [
            'image.required' => 'Gambar harus diisi.',
            'image.image' => 'File harus berupa gambar.',
            'image.mimes' => 'Format gambar tidak valid. Gunakan format jpeg, png, atau jpg.',
            'image.max' => 'Ukuran gambar tidak boleh melebihi 5MB.',
            'title.required' => 'Judul artikel harus diisi.',
            'title.string' => 'Judul harus berupa teks.',
            'title.max' => 'Judul tidak boleh melebihi :max karakter.',
            'content.required' => 'Isi artikel harus diisi.',
            'content.string' => 'Isi artikel harus berupa teks.',
        ];
    }
}
