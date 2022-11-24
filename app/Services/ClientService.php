<?php

namespace App\Services;

use App\Models\Client;
use App\Repositories\Contracts\ClientRepositoryInterface;

class ClientService
{
    public function __construct(
        public readonly ClientRepositoryInterface $clientRepository,
    ){}

    public function list()
    {
        return $this->clientRepository->getAll();
    }

    public function store(array $data)
    {
        return $this->clientRepository->store($data);
    }

    public function getClient(int $id)
    {
        return $this->clientRepository->findById($id);
    }

    public function updateClient(int $id, array $data)
    {
        return $this->clientRepository->update($id, $data);
    }

    public function deleteClient(int $id)
    {
        return $this->clientRepository->delete($id);
    }
}