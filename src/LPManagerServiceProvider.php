<?php

namespace gaiththewolf\lpmanager;

use Illuminate\Support\ServiceProvider;

class LPManagerServiceProvider extends ServiceProvider {

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'lpmanager');
        $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'lpmanager');
        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__.'/assets' => public_path('laravel-package-mangaer')], 'assets');
            $this->publishes([__DIR__.'/config/lpmanager.php' => config_path('lpmanager.php')], 'config');
        }
    }

    public function register(){}

}
