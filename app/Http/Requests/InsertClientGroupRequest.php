<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsertClientGroupRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "client_id" => ['required','integer', 'exists:clients,id'],
            "group_id" => ['required', 'integer', 'exists:groups,id']
        ];
    }

    public function bodyParameters()
    {
        return [
            'client_id' => [
                'description' => 'ID do cliente que desej associar.',
                'example' => 5,
            ],
            'group_id' => [
                'description' => 'ID do grupo que deseja associar.',
                'example' => 1,
            ]
        ];
    }
}
