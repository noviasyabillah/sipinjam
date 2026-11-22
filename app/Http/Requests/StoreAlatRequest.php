<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreAlatRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'kode'    => [
                'required',
                Rule::unique('alats', 'kode')->ignore($this->route('alat'))
            ],
            'nama'    => 'required|min:3',
            'stok'    => 'required|numeric',
            'kondisi' => 'required',
            'lokasi'  => 'required', 
        ];
    }

    public function messages(): array
    {
        return [
            'nama.min'      => 'Nama alat minimal harus 3 karakter ya.',
            'nama.required' => 'Nama alat tidak boleh kosong.',
            'lokasi.required' => 'Lokasi penyimpanan harus diisi.'
        ];
    }
}