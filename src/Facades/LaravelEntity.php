<?php

namespace yevhenii\LaravelEntity\Facades;

use Illuminate\Support\Facades\Facade;

class laravelEntity extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravelentitynew';
    }
}
