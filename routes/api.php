<?php

use App\Http\Controllers\Api\V1\DishController;
use App\Http\Controllers\Api\AuthController;
use App\Models\Dish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// http:localhost:8000/api/dish/{id}/delete
// http:localhost:8000/api/dish/{id}/edit
// http:localhost:8000/api/user/{id}/delete
// universal resource locator
// dish
// users
// category

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
