<?php

namespace App\Http\Requests;

use App\Models\Manager;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;

class UpdateGroupRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('accept-manager-admin');
    }

    public function rules()
    {
        return [
            'name' => ['required']
        ];
    }
}
