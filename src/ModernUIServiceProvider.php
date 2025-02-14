<?php

namespace ModernUI;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class ModernUIServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Jika ada dependency, bisa didaftarkan di sini
    }

    public function boot()
    {
        // Load view komponen
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'modern-ui');

        // Register komponen Blade
        Blade::component('modern-ui::components.button', 'modern-button');

        // Publikasi file jika dibutuhkan
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/modern-ui'),
        ], 'modern-ui-views');
    }
}
