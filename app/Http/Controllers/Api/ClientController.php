<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Http\Resources\ClientResource;
use App\Models\Client;
use App\Services\ClientService;
use Symfony\Component\HttpFoundation\Response;

class ClientController extends Controller
{
    public function __construct(
        protected readonly ClientService $clientService,
    ) {}

    /**
     * Listar Clientes
     *
     * Lista todos clientes cadastrados
     * @group Clientes
     * @authenticated
     * @responseFile Response/clientes/Listar.json
     */
    public function index()
    {
        return ClientResource::collection($this->clientService->list());
    }

    /**
     * Cadastrar Cliente
     *
     * Efetua o cadastro de um novo cliente
     * @group Clientes
     * @authenticated
     * @responseFile Response/clientes/Cadastrar.json
     */
    public function store(StoreClientRequest $request)
    {   
       return ClientResource::make($this->clientService->store($request->validated()));
    }

    /**
     * Detalhar Cliente
     *
     * Detalha os dados de um cliente
     * @group Clientes
     * @authenticated
     * @responseFile Response/clientes/Detalhar.json
     */
    public function show(Client $client)
    {
        return ClientResource::make($this->clientService->getClient($client->id));
    }

    /**
     * Atualizar Cliente
     *
     * Atualiza os dados de um cliente
     * @group Clientes
     * @authenticated
     * @responseFile Response/clientes/Detalhar.json
     */
    public function update(UpdateClientRequest $request, Client $client)
    {   
        return ClientResource::make($this->clientService->updateClient($client->id, $request->validated()));
    }

    /**
     * Remover um Cliente
     *
     * Efetua a remoção de um cliente
     * @group Clientes
     * @authenticated
     * @response 204
     */
    public function destroy(Client $client)
    {
        $this->clientService->deleteClient($client->id);
        return response()->noContent(Response::HTTP_NO_CONTENT);
    }
}
