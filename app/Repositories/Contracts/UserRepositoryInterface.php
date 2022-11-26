<?php 

namespace App\Repositories\Contracts;

interface UserRepositoryInterface
{
    public function createUserWithManager(int $managerId, array $data);
}