<?php

use App\Http\Controllers\CatController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CatController::class, 'index']);
Route::delete('/cats/{cat}', [CatController::class, 'destroy'])->name('cats.destroy');

