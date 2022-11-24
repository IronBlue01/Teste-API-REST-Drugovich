<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ManagerResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'identify' => $this->getKey(),
            'nome'     => $this->name,
            'email'    => $this->email,
            'nivel'    => $this->level ?? $this->manager->level   
        ];
    }
}
