<?php

namespace App\Providers;

use App\Http\View\Composers\CategoriesComposer;
use App\Http\View\Composers\ProductsComposer;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        view()->composer('*', CategoriesComposer::class);
        view()->composer('*', ProductsComposer::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
    }
}
