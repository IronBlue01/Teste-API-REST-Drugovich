<?php

namespace App\Http\Requests;

use App\Models\Manager;
use Illuminate\Foundation\Http\FormRequest;

class ValidateManagerRequest extends FormRequest
{
    public function authorize()
    {   
        $manager = new Manager;
        return $manager->managerIsAdmin();
    }

    public function rules()
    {
        return [
            //
        ];
    }
}
