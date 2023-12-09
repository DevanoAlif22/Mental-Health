<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoryRequestValidation extends FormRequest
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
            'audio' => 'required|mimes:mp3,mpeg|max:8048',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:5048',
            'title' => 'required|string|max:60',
            'description' => 'required|string|max:600',
        ];
    }
    public function messages()
    {
        return [
            'audio.required' => 'Audio harus diisi.',
            'audio.mimes' => 'Format audio tidak valid. Gunakan format mp3 atau mpeg.',
            'audio.max' => 'Ukuran audio tidak boleh melebihi 5MB.',
            'image.required' => 'Gambar harus diisi.',
            'image.image' => 'File harus berupa gambar.',
            'image.mimes' => 'Format gambar tidak valid. Gunakan format jpeg, png, atau jpg.',
            'image.max' => 'Ukuran gambar tidak boleh melebihi 5MB.',
            'title.required' => 'Judul artikel harus diisi.',
            'title.string' => 'Judul harus berupa teks.',
            'title.max' => 'Judul tidak boleh melebihi :max karakter.',
            'description.required' => 'Isi artikel harus diisi.',
            'description.string' => 'Isi artikel harus berupa teks.',
        ];
    }
}
