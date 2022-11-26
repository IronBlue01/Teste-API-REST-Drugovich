<?php

namespace App\Services;

use App\Models\User;
use App\Models\Manager;
use App\Repositories\Contracts\ManagerRepositoryInterface;
use App\Repositories\Contracts\UserRepositoryInterface;

class AuthService
{
    public function __construct(
        public readonly UserRepositoryInterface $userRepository,
        public readonly ManagerRepositoryInterface $managerRepository
    ) {
    }

    public function register(array $data)
    {
        $manager = $this->managerRepository->store($data);
        return $this->userRepository->createUserWithManager($manager->id, $data);
    }
}