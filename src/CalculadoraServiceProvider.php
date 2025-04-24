<?php

namespace alfito69420\Calculadora;

use Illuminate\Support\ServiceProvider;

class CalculadoraServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('calculadora', function () {
            return new Calculadora();
        });
    }

    public function boot()
    {
        // Puedes registrar el alias automáticamente si lo deseas
    }
}
