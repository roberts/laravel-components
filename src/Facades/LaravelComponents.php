<?php

namespace Roberts\LaravelComponents\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Roberts\LaravelComponents\LaravelComponents
 */
class LaravelComponents extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Roberts\LaravelComponents\LaravelComponents::class;
    }
}
