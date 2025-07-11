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
            $tahunList = Daftar_Eskul::select('tahun_ajaran')->distinct()->pluck('tahun_ajaran');
            $view->with('tahunList', $tahunList);
        });
    }
}
