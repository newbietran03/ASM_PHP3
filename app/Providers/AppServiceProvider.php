<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Http\View\Composers\GlobalComposer;
use Symfony\Component\Routing\Attribute\Route;

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
        // $categories = DB::table('categories')
        //     // ->select('id', 'ten')
        //     ->orderBy('id', 'asc')
        //     ->where('anHien', 1)
        //     ->limit(7)
        //     ->get();
        // View::share(['categories' => $categories]);
        // View::composer('*', GlobalComposer::class);

    }
}
