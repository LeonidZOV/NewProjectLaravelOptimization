<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ReportsController;

Route::get('/', [MainController::class, 'showIndex'])->name('home');
Route::get('/array', [MainController::class, 'showArray'])->name('array');
Route::get('/reports', [ReportsController::class, 'index'])->name('report.index');
Route::delete('reports/{report}', [ReportsController::class, 'destroy'])->name('reports.destroy');
