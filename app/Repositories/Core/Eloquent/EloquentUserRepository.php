<?php

namespace App\Repositories\Core\Eloquent;

use App\Models\User;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Repositories\Core\BaseEloquentRepository;

class EloquentUserRepository extends BaseEloquentRepository implements UserRepositoryInterface
{
    public function entity()
    {
        return User::class;
    }

    public function createUserWithManager(int $managerId, array $data)
    {
        $user = $this->entity->create([
            'name' => $data['name'],
            'manager_id' => $managerId,
            'password' => bcrypt($data['password']),
            'email' => $data['email']
        ]);

        return [
            'user' => $user,
            'token' => $user->createToken('API Token')->plainTextToken
        ];
    }
}