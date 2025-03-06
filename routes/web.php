<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('index');
}); */
Route::get('/', [HomeController::class, 'index'])->name('dashboard');

Route::group(['prefix' => 'ui', 'namespace' => 'App\Http\Controllers'], function () {
    Route::get('/buttons', [HomeController::class, 'buttons'])->name('ui.buttons');
    Route::get('/dropdowns', [HomeController::class, 'dropdowns'])->name('ui.dropdowns');
    Route::get('/typography', [HomeController::class, 'typography'])->name('ui.typography');
    Route::get('/basic', [HomeController::class, 'basic'])->name('ui.basic');
});

