<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|min:8'
        ];
    }
    public function massages(): array
    {
        return [
            'name.required' => 'Data Harus Di Isikan',
            'email.required' => 'Email Tidak Boleh Kosong',
            'email' => 'Pastikan yang Dimasukkan Berupa Email',
            'password.min' => 'minimal Password Berisikan 8 Digit',
            'password.required' => 'Password Tidak Boleh Kosong'
        ];
    }
}
