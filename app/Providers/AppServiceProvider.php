<?php

namespace App\Providers;

use App\Http\Composers\NavbarComposer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        View::composer('partials.nav-bar', NavbarComposer::class);
    }
}
