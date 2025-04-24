<?php

namespace Alfito69420\Calculadora\Facades;

use Illuminate\Support\Facades\Facade;

class Calculadora extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'calculadora';
    }
}
