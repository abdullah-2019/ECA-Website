<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SectorController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicesController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('home', [HomeController::class, 'wellcome'])->name('home');
Route::get('/contactus',  [ContactUsController::class, 'index'])->name('contactus.index');
Route::get('/sector', [SectorController::class, 'index'])->name('sector.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');

Route::get('/team', [TeamController::class, 'index'])->name('team.index');
Route::get('/home/services', [HomeController::class, 'services'])->name('home.services');
Route::get('/services/audit', [ServicesController::class, 'audit'])->name('services.audit');
Route::get('/services/tax', [ServicesController::class, 'tax'])->name('services.tax');
Route::get('/services/legal', [ServicesController::class, 'legal'])->name('services.legal');
Route::get('/services/advisory', [ServicesController::class, 'advisory'])->name('services.advisory');
Route::get('/services/training', [ServicesController::class, 'training'])->name('services.training');
Route::get('/services/payroll', [ServicesController::class, 'payroll'])->name('services.payroll');
Route::get('/services/cash-distribution', [ServicesController::class, 'cashDistribution'])->name('services.cashDistribution');
// Route::get();

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    /**
     * Home Routes
     */
    Route::get('/', [HomeController::class, 'index'])->name('home.index');

    Route::post('/contactus/store',  [ContactUsController::class, 'store'])->name('contactus.store');

    Route::get('/contacts', [ContactUsController::class, 'list'])->name('contact.list');
    Route::delete('contactDelete/{id}', [ContactUsController::class, 'destroy'])->name('contacts.destroy');
    Route::get('/contacts/search', [ContactUsController::class, 'search'])->name('contacts.search');


    Route::group(['middleware' => ['guest']], function () {
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
    Route::group(['middleware' => ['auth']], function () {
        Route::get('/about/create', [AboutController::class, 'create'])->name('about.create');
        Route::post('/about/store', [AboutController::class, 'store'])->name('about.store');
        Route::get('/about/list', [AboutController::class, 'list'])->name('about.list');
        Route::get('/about/edit/{id}', [AboutController::class, 'edit'])->name('about.edit');
        Route::get('/about/show/{id}', [AboutController::class, 'show'])->name('about.show');
        Route::put('/about/update/{id}', [AboutController::class, 'update'])->name('about.update');
        Route::delete('/about/destroy/{id}', [AboutController::class, 'destroy'])->name('about.destroy');
        Route::get('/about/search', [AboutController::class, 'search'])->name('about.search');

        Route::get('/sector/create', [SectorController::class, 'create'])->name('sector.create');
        Route::post('/sector/store', [SectorController::class, 'store'])->name('sector.store');
        Route::get('/sector/list', [SectorController::class, 'list'])->name('sector.list');
        Route::get('/sector/edit/{id}', [SectorController::class, 'edit'])->name('sector.edit');
        Route::get('/sector/show/{id}', [SectorController::class, 'show'])->name('sector.show');
        Route::put('/sector/update/{id}', [SectorController::class, 'update'])->name('sector.update');
        Route::delete('/sector/destroy/{id}', [SectorController::class, 'destroy'])->name('sector.destroy');
        Route::get('/sector/search', [SectorController::class, 'search'])->name('sector.search');

        Route::get('/team/create', [TeamController::class, 'create'])->name('team.create');
        Route::post('/team/store', [TeamController::class, 'store'])->name('team.store');
        Route::get('/team/list', [TeamController::class, 'list'])->name('team.list');
        Route::get('/team/edit/{id}', [TeamController::class, 'edit'])->name('team.edit');
        Route::get('/team/show/{id}', [TeamController::class, 'show'])->name('team.show');
        Route::put('/team/update/{id}', [TeamController::class, 'update'])->name('team.update');
        Route::delete('/team/destroy/{id}', [TeamController::class, 'destroy'])->name('team.destroy');
        Route::get('/team/search', [TeamController::class, 'search'])->name('team.search');

        Route::get('/services/create', [ServicesController::class, 'create'])->name('services.create');
        Route::post('/services/store', [ServicesController::class, 'store'])->name('services.store');
        Route::get('/services/list', [ServicesController::class, 'list'])->name('services.list');
        Route::get('/services/lists/{id}', [ServicesController::class, 'lists'])->name('services.lists');
        Route::get('/services/edit/{id}', [ServicesController::class, 'edit'])->name('services.edit');
        Route::get('/services/show/{id}', [ServicesController::class, 'show'])->name('services.show');
        Route::put('/services/update/{id}', [ServicesController::class, 'update'])->name('services.update');
        Route::delete('/services/destroy/{id}', [ServicesController::class, 'destroy'])->name('services.destroy');
        Route::get('/services/search', [ServicesController::class, 'search'])->name('services.search');

        Route::get('/home/create', [HomeController::class, 'create'])->name('home.create');
        Route::post('/home/store', [HomeController::class, 'store'])->name('home.store');
        Route::get('/home/list', [HomeController::class, 'list'])->name('home.list');
        Route::get('/home/lists/{id}', [HomeController::class, 'lists'])->name('home.lists');
        Route::get('/home/edit/{id}', [HomeController::class, 'edit'])->name('home.edit');
        Route::get('/home/show/{id}', [HomeController::class, 'show'])->name('home.show');
        Route::put('/home/update/{id}', [HomeController::class, 'update'])->name('home.update');
        Route::delete('/home/destroy/{id}', [HomeController::class, 'destroy'])->name('home.destroy');
        Route::get('/home/search', [HomeController::class, 'search'])->name('home.search');

        Route::get('/login/home', [HomeController::class, 'index'])->name('auth.login');
        Route::get('/dashboards', [HomeController::class, 'wellcome'])->name('dashboard');

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('login');
        Route::delete('/categories/destroy', [CategoriesController::class, 'destroy'])->name('categories.destroy');
        Route::get('/categories/create', [CategoriesController::class, 'create'])->name('categories.create');
        Route::post('/categories/store', [CategoriesController::class, 'store'])->name('categories.store');
        Route::get('/categories', function () {
            return view('pages.dashboard.index');
        })->name('categories');

        Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform');
    });
});
