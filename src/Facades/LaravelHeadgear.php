<?php

namespace AndrewRCollins\LaravelHeadgear\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AndrewRCollins\LaravelHeadgear\LaravelHeadgear
 */
class LaravelHeadgear extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \AndrewRCollins\LaravelHeadgear\LaravelHeadgear::class;
    }
}
