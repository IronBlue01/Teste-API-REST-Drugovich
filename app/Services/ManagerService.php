<?php

namespace App\Services;

use App\Models\Manager;
use App\Repositories\Contracts\ManagerRepositoryInterface;

class ManagerService
{
    public function __construct(
        public readonly ManagerRepositoryInterface $managerRepository,
    ){}

    public function list()
    {
        return $this->managerRepository->getAll();
    }

    public function store(array $data)
    {
        return $this->managerRepository->store($data);
    }

    public function getManager(int $id)
    {
        return $this->managerRepository->findById($id);
    }

    public function updateManager(int $id, array $data)
    {
        return $this->managerRepository->update($id, $data);
    }

    public function deleteManager(int $id)
    {
        return $this->managerRepository->delete($id);
    }

    public function insertClientGroup(array $data)
    {
        return $this->managerRepository->insertClientGroup($data);
    }
}