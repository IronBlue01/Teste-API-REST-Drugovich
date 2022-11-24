<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientGroup extends Model
{
    use HasFactory;

    protected $table = 'group_client';

    protected $fillable = [
        'group_id',
        'client_id'
    ];
}
