<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreClientRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'cnpj' => 'required|unique:clients,cnpj'
        ];
    }

    public function bodyParameters()
    {
        return [
            'name' => [
                'description' => 'O nome do cliente.',
                'example' => 'Fabio Lima',
            ],
            'cnpj' => [
                'description' => 'CNPJ completo do cliente.',
                'example' => '44.954.151/0001-54',
            ]
        ];
    }

    public function messages()
    {
        return [
            '*.required' => 'O campo :attribute deve ser enviado!'
        ];
    }
}
