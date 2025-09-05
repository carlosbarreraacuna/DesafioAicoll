<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::prefix('empresas')->group(function () {
    Route::post('/', [EmpresaController::class, 'store']);        // Crear
    Route::get('/', [EmpresaController::class, 'index']);         // Listar todas
    Route::get('/{nit}', [EmpresaController::class, 'show']);     // Consultar por NIT
    Route::put('/{nit}', [EmpresaController::class, 'update']);   // Actualizar
    Route::delete('/{nit}', [EmpresaController::class, 'destroy']); // Eliminar inactivas
});
