<?php

namespace alfito69420\Calculadora;

use Illuminate\Support\ServiceProvider;

class CalculadoraServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('calculadora', function ($app) {
            return new \Alfito69420\Calculadora\Calculadora();
        });
    }

    public function boot()
    {
        // Puedes registrar el alias automáticamente si lo deseas
        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias('Calculadora', \Alfito69420\Calculadora\Facades\Calculadora::class);
    }
}
