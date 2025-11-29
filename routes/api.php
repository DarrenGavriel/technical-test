<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::prefix('todo')->group(function () {
    Route::post('/', [TodoController::class, 'store']);
    Route::get('/', [TodoController::class, 'getTodoByFilter']);
});