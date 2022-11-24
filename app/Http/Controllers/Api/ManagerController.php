<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\InsertClientGroupRequest;
use App\Http\Requests\StoreGroupRequest;
use App\Http\Requests\StoreManagerRequest;
use App\Http\Requests\UpdateManagerRequest;
use App\Http\Resources\GroupResource;
use App\Http\Resources\ManagerResource;
use App\Models\Group;
use App\Models\InsertClientGroup;
use App\Models\Manager;
use App\Services\ManagerService;
use Symfony\Component\HttpFoundation\Response;

class ManagerController extends Controller
{
    public function __construct(
        public readonly ManagerService $managerService,
    ){ }

    /**
     * Listar Gerentes
     *
     * Lista todos gerentes cadastrados
     * @group Gerentes
     * @authenticated
     * @responseFile Response/gerentes/Listar.json
     */
    public function index()
    {
        return ManagerResource::collection($this->managerService->list());
    }

    /**
     * Detalhar Gerente
     *
     * Detalha os dados de um gerente
     * @group Gerentes
     * @authenticated
     * @responseFile Response/gerentes/Detalhar.json
     */
    public function show(Manager $manager)
    {
        return ManagerResource::make($this->managerService->getManager($manager->id));
    }

    /**
     * Atualizar Gerente
     *
     * Atualiza os dados de um gerente
     * @group Gerentes
     * @authenticated
     * @responseFile Response/gerentes/Detalhar.json
     */
    public function update(UpdateManagerRequest $request, Manager $manager)
    {
        return ManagerResource::make($this->managerService->updateManager($manager->id, $request->validated()));  
    }

    /**
     * Remover um Gerente
     *
     * Efetua a remoção dos dados de um gerente
     * @group Gerentes
     * @authenticated
     * @response 204
     */
    public function destroy(Manager $manager)
    {
        $this->managerService->deleteManager($manager->id);
        return response()->noContent(Response::HTTP_NO_CONTENT);
    }

    /**
     * Inserir Cliente a grupo
     *
     * Cadastra um cliente a um grupo
     * @group Gerentes
     * @authenticated
     * @response Response/gerentes/InsereClienteGrupo.json
     */
    public function insertClientGroup(InsertClientGroupRequest $request)
    {
        $insert = $this->managerService->insertClientGroup($request->validated());

        if (!$insert) {
            return response()
                ->json(['message' => 'Não foi possivel efetuar o cadastro pois este cliente já está cadastrado para outro grupo!!']);
        }

        return response()
            ->json(['message' => 'O cliente foi cadastrado para o grupo com sucesso']);
    }
}