<?php

namespace App\Services;

use App\Models\Group;
use App\Repositories\Contracts\GroupRepositoryInterface;

class GroupService
{
    public function __construct(
        public readonly GroupRepositoryInterface $groupRepository,
    ){}

    public function list()
    {
        return $this->groupRepository->getAll();
    }

    public function store(array $data)
    {
        return $this->groupRepository->store($data);
    }

    public function getGroup(int $id)
    {
        return $this->groupRepository->findById($id);
    }

    public function updateGroup(int $id, array $data)
    {
        return $this->groupRepository->update($id, $data);
    }

    public function deleteGroup(int $id)
    {
        return $this->groupRepository->delete($id);
    }
}