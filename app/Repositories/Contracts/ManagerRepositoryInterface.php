<?php 

namespace App\Repositories\Contracts;

interface ManagerRepositoryInterface
{
    public function insertClientGroup(array $data): bool;
}