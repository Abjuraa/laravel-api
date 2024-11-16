<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\studentController;

Route::get('/students', [studentController::class, 'getAllStudents']);

Route::get('/student/{id}', [studentController::class, 'getStudentById']);

Route::post('/student', [studentController::class, 'createStudent']);

Route::put('/student/{id}', [studentController::class, 'updateStudent']);

Route::delete('/student/{id}', [studentController::class, 'deleteStudent']);
