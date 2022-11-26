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

    public function getGroup(int $groupId)
    {
        return $this->groupRepository->findById($groupId);
    }

    public function updateGroup(int $groupId, array $data)
    {
        return $this->groupRepository->update($groupId, $data);
    }

    public function deleteGroup(int $groupId)
    {
        return $this->groupRepository->delete($groupId);
    }
}