<?php

namespace Yebto\NumerologyAPI;

use Illuminate\Support\ServiceProvider;

class NumerologyAPIServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/yebto-numerology.php', 'yebto-numerology');

        $this->app->singleton('yebto-numerology', function () {
            return new NumerologyAPI(config('yebto-numerology'));
        });
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config/yebto-numerology.php' => config_path('yebto-numerology.php'),
        ], 'yebto-numerology-config');
    }
}
