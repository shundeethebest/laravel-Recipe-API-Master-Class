<?php

use App\Http\Controllers\Api\V1\DishController;
use App\Http\Controllers\AuthController;
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

Route::middleware('auth:sanctum')->apiResource('/dishes', DishController::class);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
