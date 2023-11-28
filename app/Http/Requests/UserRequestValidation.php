<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequestValidation extends FormRequest
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
            'name' => 'required|min:5|max:15|unique:users',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:8|max:15',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'nama wajib di isi',
            'name.unique' => 'nama sudah pernah ada',
            'name.max' => 'nama maksimal :max karakter',
            'name.min' => 'nama maksimal :min karakter',
            'email.required' => 'Email wajib di isi',
            'email.unique' => 'Email sudah pernah ada',
            'password.required' => 'password wajib di isi',
            'password.max' => 'password maksimal :max karakter',
            'password.min' => 'password maksimal :min karakter',
        ];
    }
}
