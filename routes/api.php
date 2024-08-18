<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('get-student',[StudentsController::class,'getAllStudents']);
Route::get('get-student-by-id/{id}',[StudentsController::class,'getStudent']);
Route::post('add-student',[StudentsController::class,'addStudent']);
Route::put('update-student/{id}',[StudentsController::class,'updateStudent']);
Route::delete('delete-student/{id}',[StudentsController::class,'deleteStudent']);

