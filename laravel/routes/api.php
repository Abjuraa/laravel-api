<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\studentController;
use App\Http\Controllers\Api\clientesController;

//rutas para los estudiantes
Route::get('/students', [studentController::class, 'getAllStudents']);

Route::get('/student/{id}', [studentController::class, 'getStudentById']);

Route::get('/student/token/{token}', [studentController::class, 'getStudentByToken']);

Route::post('/student', [studentController::class, 'createStudent']);

Route::put('/student/{id}', [studentController::class, 'updateStudent']);

Route::delete('/student/{id}', [studentController::class, 'deleteStudent']);

//Rutas para los clientes

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('login', [clientesController::class, 'login']);
    Route::post('logout', [clientesController::class, 'logout']);
    Route::post('refresh', [clientesController::class, 'refresh']);
    Route::post('me', [clientesController::class, 'me']);
    Route::post('register', [clientesController::class, 'register']);
});