<?php

namespace App\Http\Requests;

use App\Models\Manager;
use Illuminate\Foundation\Http\FormRequest;

class UpdateClientRequest extends FormRequest
{     
    public function authorize()
    {
        $manager = new Manager;
        return $manager->managerIsAdmin();
    }

    public function rules()
    {
        return [
            'name' => ['filled', 'min:3', 'max:100'],
            'cnpj' => ['filled']
        ];
    }

    public function messages()
    {
        return [
            '*.filled' => 'O campo :attribute deve estar preenchido'
        ];
    }

}
