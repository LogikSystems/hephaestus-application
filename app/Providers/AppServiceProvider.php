<?php

namespace App\Providers;

use Hephaestus\Framework\Providers\HephaestusServiceProvider;
use Illuminate\Support\ServiceProvider;
use LaravelZero\Framework\Providers\GitVersion\GitVersionServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
        // $this->register(GitVersionServiceProvider::class);
    }
}