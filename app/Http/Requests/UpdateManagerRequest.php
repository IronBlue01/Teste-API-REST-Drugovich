<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateManagerRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name' => ['filled', 'min:3', 'max:100'],
            'level' => ['filled', 'integer']
        ];
    }
}
