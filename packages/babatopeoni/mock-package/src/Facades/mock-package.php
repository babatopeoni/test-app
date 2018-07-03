<?php

namespace babatopeoni\mock-package\Facades;

use Illuminate\Support\Facades\Facade;

class mock-package extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'mock-package';
    }
}
