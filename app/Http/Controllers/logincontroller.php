<?php
use App\Http\Controllers\SomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MenuController::class, 'home']);

Route::get('/about', [MenuController::class, 'about']);

Route::get('/contact', [MenuController::class, 'contact']);

Route::get('/some-page', [SomeController::class, 'index'])->name('some-page-route');
