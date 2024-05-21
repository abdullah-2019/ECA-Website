<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicesController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('home',
    [\App\Http\Controllers\HomeController::class, 'wellcome'])
    ->name('home');
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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    /**
     * Home Routes
     */
    Route::get('/', [HomeController::class, 'index'])->name('home.index');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
        Route::post('/register', [RegisterController::class, 'register'])->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', [LoginController::class, 'show'])->name('login.show');
        Route::post('/login', [LoginController::class, 'login'])->name('login.perform');

    });
    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform');
    });
});
