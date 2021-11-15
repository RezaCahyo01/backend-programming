<?php

# import animal controller
use App\Http\Controllers\AnimalController;
# mengimport controller Student
use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

# Route animals
Route::get('/animals', [AnimalController::class, 'index']);
Route::post('/animals', [AnimalController::class, 'store']);
Route::put('/animals/{id}', [AnimalController::class, 'update']);
Route::delete('/animals/{id}', [AnimalController::class, 'destroy']);

# Method GET, route /students
Route::get("/students", [StudentController::class, 'index']);

# Method POST, route /students
Route::post('/students', [StudentController::class, 'store']);

# method GET, route /students
Route::get('/students/{id}', [StudentController::class, 'show']);

# method PUT, route /students
Route::put('/students/{id}', [StudentController::class, 'update']);

# method Delete, route /student
Route::delete('/students/{id}', [StudentController::class, "destroy"]);