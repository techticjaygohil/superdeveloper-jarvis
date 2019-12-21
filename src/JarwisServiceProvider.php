<?php

namespace Jarwis;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class JarwisServiceProvider extends ServiceProvider {
    
    public function boot() {
        Schema::defaultStringLength('191');
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadRoutesFrom(__DIR__ . '/routes/api.php');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'jarwisview');
    }
    
    public function register()
    {
        $this->registerPublishables();
    }
    public function registerPublishables()
    {
        $basePath = dirname(__DIR__);

        $arrayPublishable = [
            'migrations' => [
                "$basePath/src/database/migrations" => database_path('migrations')
            ],
            'config' => [
                "$basePath/src/config/jarwis.php" => config_path('jarwis.php')
            ]
        ];

        foreach ($arrayPublishable as $group => $paths) {
            $this->publishes($paths, $group);
        }
    }
}
