<?php

namespace Mehasan\DateTimeConverter\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mehasan\DateTimeConverter\DateTimeConverter
 */
class DateTimeConverter extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Mehasan\DateTimeConverter\DateTimeConverter::class;
    }
}
