<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGroupRequest;
use App\Http\Requests\UpdateGroupRequest;
use App\Http\Resources\GroupResource;
use App\Models\Group;
use App\Services\GroupService;
use App\Enum\LevelManagerEnum as LevelEnum;
use App\Http\Requests\ValidateManagerRequest;
use Symfony\Component\HttpFoundation\Response;

class GroupController extends Controller
{
    public function __construct(
        protected readonly GroupService $groupService,
    ) {}

    /**
     * Listar Grupos
     *
     * Lista todos grupos cadastrados
     * @group Grupos
     * @authenticated
     * @responseFile Response/grupos/Listar.json
     */
    public function index()
    {
        return GroupResource::collection($this->groupService->list());
    }

    /**
     * Cadastrar Grupo
     *
     * Efetua o cadastro de um novo grupo
     * @group Grupos
     * @authenticated
     * @responseFile Response/grupos/Detalhar.json
     */
    public function store(StoreGroupRequest $request)
    {
        return GroupResource::make($this->groupService->store($request->validated()));
    }

    /**
     * Detalhar Grupo
     *
     * Detalha os dados de um grupo
     * @group Grupos
     * @authenticated
     * @responseFile Response/grupos/Detalhar.json
     */
    public function show(Group $group)
    {
        return GroupResource::make($this->groupService->getGroup($group->id));
    }

    /**
     * Atualiza Grupo
     *
     * Atualiza  os dados de um grupo
     * @group Grupos
     * @authenticated
     * @responseFile Response/grupos/Detalhar.json
     */
    public function update(UpdateGroupRequest $request, Group $group)
    {
        return GroupResource::make($this->groupService->updateGroup($group->id, $request->validated()));
    }

    /**
     * Remover um Grupo
     *
     * Efetua a remoção de um grupo
     * @group Grupos
     * @authenticated
     * @response 204
     */
    public function destroy(Group $group)
    {   
        $this->authorize('accept-manager-admin');
        $this->groupService->deleteGroup($group->id);
        return response()->noContent(Response::HTTP_NO_CONTENT);
    }
}
