<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class GroupResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'nome' => $this->name,
            'data_criacao' => Carbon::make($this->created_at)->format('Y-m-d')
        ];
    }
}
