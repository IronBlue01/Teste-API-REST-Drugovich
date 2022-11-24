<?php

namespace App\Repositories\Core\Eloquent;

use App\Models\ClientGroup;
use App\Models\Manager;
use App\Repositories\Contracts\ManagerRepositoryInterface;
use App\Repositories\Core\BaseEloquentRepository;

class EloquentManagerRepository extends BaseEloquentRepository implements ManagerRepositoryInterface
{
    public function entity()
    {
        return Manager::class;
    }

    public function insertClientGroup(array $data): bool
    {
        $clientExists = ClientGroup::where('client_id', $data['client_id'])
                        ->where('group_id', $data['group_id'])
                        ->get();

        if($clientExists->count()){
            return false;    
        }

        ClientGroup::create($data);

        return true;
    }
}