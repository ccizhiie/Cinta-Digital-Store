<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSupplierRequest extends FormRequest
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
            'name' => 'required|string|max:255|unique:suppliers,name',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama supplier wajib diisi.',
            'name.unique' => 'Nama supplier sudah digunakan, silakan pilih nama lain.',
            'address.required' => 'Alamat wajib diisi.',
            'phone.required' => 'Nomor telepon wajib diisi.',
        ];
    }
}
