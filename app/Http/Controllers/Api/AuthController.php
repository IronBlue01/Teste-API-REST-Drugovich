<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Http\Resources\ManagerResource;
use App\Models\Manager;
use Illuminate\Http\Request;
use App\Models\User;
use App\Services\AuthService;
use Illuminate\Support\Facades\Auth;
use App\Traits\ApiResponser;

class AuthController extends Controller
{
    use ApiResponser;

    public function __construct(
        public readonly AuthService $authService,
    ) {
    }

    /**
     * Registra um novo Gerente
     *
     * Efutua o registro de um no gerente com seu nível já definido
     * @group Auth
     * @responseFile Response/auth/RegistroCriado.json
     */
    public function register(RegisterUserRequest $request)
    {
        $auth = $this->authService->register($request->validated());

        return $this->success([
            'user'  => $auth['user'],
            'token' => $auth['token']
        ]);
    }

    /**
     * Login Gerente
     *
     * Efetua login de um gerente
     * @group Auth
     * @responseFile Response/auth/LoginGerente.json
     */
    public function login(LoginUserRequest $request)
    {
        $attr = $request->validated();

        if (!Auth::attempt($attr)) {
            return $this->error('Credentials not match', 401);
        }

        return response()->json([
            'message' => 'success',
            'token' => auth()->user()->createToken('API Token')->plainTextToken
        ],201);
    }

    /**
     * Dados gerente logado
     *
     * Retorna os dados do gerente logado 
     * @group Auth
     * @responseFile Response/auth/Detalhar.json
     */
    public function userAuthenticated()
    {
       return ManagerResource::make(auth()->user());
    }

    /**
     * Logout gerente
     *
     * Efetua o logout do gerente 
     * @group Auth
     * @responseFile Response/auth/Logout.json
     */
    public function logout()
    {
        auth()->user()->tokens()->delete();

        return response()->json(['message' => 'Token Removido']);
    }
}
