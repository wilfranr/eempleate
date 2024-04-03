<?php

namespace Altwaireb\CountriesStatesCities\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Altwaireb\CountriesStatesCities\CountriesStatesCities
 */
class CountriesStatesCities extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Altwaireb\CountriesStatesCities\CountriesStatesCities::class;
    }
}
