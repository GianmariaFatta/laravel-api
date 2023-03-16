<?php

use App\Http\Controllers\Api\ProjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
// Rotta della lista dei progetti
Route::apiResource('projects', ProjectController::class);

// Rotta al dettaglio del progetto
Route::get('/projects/{slug}', [ProjectController::class, 'show']);