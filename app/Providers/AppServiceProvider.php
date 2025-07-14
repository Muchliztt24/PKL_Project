<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Daftar_Eskul;

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
        View::composer('layouts.adminassets.sidebar', function ($view) {
            $tahunList = [];

            $start = 2020;
            $end = 2026;

            for ($i = $start; $i < $end; $i++) {
                $tahunList[] = "$i/" . ($i + 1);
            }
            $view->with('tahunList', $tahunList);
        });
    }
}
