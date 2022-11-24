<?php

namespace App\Repositories\Core\Eloquent;

use App\Models\Group;
use App\Repositories\Contracts\GroupRepositoryInterface;
use App\Repositories\Core\BaseEloquentRepository;

class EloquentGroupRepository extends BaseEloquentRepository implements GroupRepositoryInterface
{
    public function entity()
    {
        return Group::class;
    }
}