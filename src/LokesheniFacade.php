<?php

namespace Brunoalfred\Lokesheni;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Brunoalfred\Lokesheni\Skeleton\SkeletonClass
 */
class LokesheniFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'lokesheni';
    }
}
