<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class ClientResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'identify' => $this->getKey(),
            'nome' => $this->name,
            'cnpj' => $this->cnpj,
            'data_fundacao' => Carbon::make($this->created_at)->format('d-m-Y') 
        ];
    }
}
