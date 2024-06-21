<?php

namespace VendorName1\PackageName;

use Illuminate\Support\ServiceProvider;

/**
 * PackageNameServiceProvider
 */
class PackageNameServiceProvider extends ServiceProvider {

    /**
     * Bootstrap any package services.
     * @return void
     */
    public function boot() {
        $this->publishes([
            __DIR__ . '/../config/package.php' => config_path('package.php'),
        ], 'package-config');

        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'PackageName');

        $this->publishes([
            __DIR__ . '/../public' => public_path('vendor/package-name'),
        ], 'public');
    }

    /**
     * Register any package services.
     * @return void
     */
    public function register() {

    }

}
