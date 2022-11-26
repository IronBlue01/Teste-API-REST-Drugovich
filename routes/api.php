<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{
    AuthController,
    ManagerController
};

Route::post('/auth/register', [AuthController::class, 'register']);

Route::post('/auth/login', [AuthController::class, 'login']);

/**
 * ROTAS AUTENTICADAS
*/
Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::get('/me', [AuthController::class,'userAuthenticated']);

    Route::post('/auth/logout', [AuthController::class, 'logout']);

    Route::apiResource('/manager','App\Http\Controllers\Api\ManagerController');
    Route::post('/manager/insert-client-group',[ManagerController::class, 'insertClientGroup'])->name('manager.insert.client.group');
    
    Route::apiResource('/client','App\Http\Controllers\Api\ClientController');
    Route::apiResource('/group','App\Http\Controllers\Api\GroupController');

});
