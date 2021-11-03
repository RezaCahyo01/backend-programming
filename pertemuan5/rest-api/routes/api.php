<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
# import animal controller
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\StudentController;

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

# Ruoting untuk student
Route::get("/students", [StudentController::class, 'index']);
