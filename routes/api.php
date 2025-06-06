<?php

use App\Http\Controllers\Admin\RequestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::get('/requests', [RequestController::class, 'apiIndex']);