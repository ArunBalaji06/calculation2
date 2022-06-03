<?php

namespace Devpac\Calculation2;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Devpac\Calculation2\Skeleton\SkeletonClass
 */
class Calculation2Facade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'calculation2';
    }
}
