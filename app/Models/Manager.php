<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Enum\LevelManagerEnum as LevelEnum;

class Manager extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'manager';
    
    protected $fillable = [
        'name',
        'email',
        'level'
    ];

    public function user()
    {
        return $this->hasOne(User::class,'manager_id', 'id');
    }

    public function managerIsAdmin(): bool
    {
        if(auth()->user()->manager->level==LevelEnum::GERENTE_GERAL->id()){
            return true;
        }

        return false;
    }
}
