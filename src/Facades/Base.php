<?php

namespace NextIn\Base\Facades;

use Illuminate\Support\Facades\Facade;

class Base extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'base';
    }
}
