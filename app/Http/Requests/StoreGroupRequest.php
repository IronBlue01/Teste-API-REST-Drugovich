<?php

namespace App\Http\Requests;

use App\Models\Manager;
use Illuminate\Foundation\Http\FormRequest;

class StoreGroupRequest extends FormRequest
{
    public function authorize()
    {
        $manager = new Manager;
        return $manager->managerIsAdmin();
    }

    public function rules()
    {
        return [
            'name' => ['required', 'min:3', 'max:50']
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo :attribute deve ser preechido'
        ];
    }
}
