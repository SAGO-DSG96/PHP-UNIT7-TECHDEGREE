<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('todos')->group(function () {
    Route::get('', [TodosController::class, 'index']);
    Route::post('', [TodosController::class, 'store']);
    Route::get('/{id}', [TodosController::class, 'show']);
    Route::put('/{id}', [TodosController::class, 'update']);
    Route::patch('/{id}', [TodosController::class, 'update']);
    Route::delete('/{id}', [TodosController::class, 'destroy']);
});