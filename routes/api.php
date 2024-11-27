<?php

use App\Http\Controllers\AuthController;
use App\Models\Dish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// http:localhost:8000/api/dish/{id}/delete
// universal resource locator
// dish
// users
// category

Route::get('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/dishes', function() {
    return Dish::all();
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
