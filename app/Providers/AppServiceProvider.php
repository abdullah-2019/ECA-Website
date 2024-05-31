<?php

namespace App\Providers;

use App\Models\Categories;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;
use JulioMotol\AuthTimeout\Middlewares\CheckAuthTimeout;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        $categories =  Categories::all();
        \Illuminate\Support\Facades\View::share(compact('categories'));
        CheckAuthTimeout::setRedirectTo(function ($request, $guard){
            return match($guard){
                'custom-guard' => route('home'),
                default => route('auth.login')
            };
        });

    }
}
