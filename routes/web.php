<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicesController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::resource('/contactus', App\Http\Controllers\ContactUsController::class);

Route::resource('/sector', App\Http\Controllers\SectorController::class);

Route::resource('/about', App\Http\Controllers\AboutController::class);

Route::resource('/team', App\Http\Controllers\TeamController::class);

Route::get('/services/audit', [ServicesController::class, 'audit'])->name('services.audit');
Route::get('/services/tax', [ServicesController::class, 'tax'])->name('services.tax');
Route::get('/services/legal', [ServicesController::class, 'legal'])->name('services.legal');
Route::get('/services/advisory', [ServicesController::class, 'advisory'])->name('services.advisory');
Route::get('/services/training', [ServicesController::class, 'training'])->name('services.training');
Route::get('/services/payroll', [ServicesController::class, 'payroll'])->name('services.payroll');
Route::get('/services/cash-distribution', [ServicesController::class, 'cashDistribution'])->name('services.cashDistribution');
