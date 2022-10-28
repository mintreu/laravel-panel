<?php

namespace Mintreu\LaravelPanel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mintreu\LaravelPanel\LaravelPanel
 */
class LaravelPanel extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Mintreu\LaravelPanel\LaravelPanel::class;
    }
}
