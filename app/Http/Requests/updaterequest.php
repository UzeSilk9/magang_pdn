<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updaterequest extends FormRequest
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
            'nama' => 'required',
            'email' => 'required|email',
            'telpon' => 'required|min:12',
        ];
    }
    public function messages(): array
    {
        return [
            'nama.required' => 'Data Harus Di Isikan',
            'email.required' => 'Email Tidak Boleh Kosong',
            'email.email' => 'Pastikan yang Dimasukkan Berupa Email',
            // 'telpon.required' => 'Telpon Tidak Boleh Kosong',
        ];
    }
}
