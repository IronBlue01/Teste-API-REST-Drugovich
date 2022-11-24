<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Http\Resources\ManagerResource;
use App\Models\Manager;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use ApiResponser;

    /**
     * Registra um novo Gerente
     *
     * Efutua o registro de um no gerente com seu nível já definido
     * @group Auth
     * @responseFile Response/auth/RegistroCriado.json
     */
    public function register(RegisterUserRequest $request)
    {
        $manager = Manager::create($request->validated());

        $user = User::create([
            'name' => $request['name'],
            'manager_id' => $manager->id,
            'password' => bcrypt($request['password']),
            'email' => $request['email']
        ]);

        return $this->success([
            'user' => $user,
            'token' => $user->createToken('API Token')->plainTextToken
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
    public function me()
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

        return [
            'message' => 'Token Removido'
        ];
    }
}
