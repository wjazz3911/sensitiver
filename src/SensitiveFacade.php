<?php

namespace Wjazz\Sensitiver;

use Illuminate\Support\Facades\Facade;

/**
 * Class SensitiveFacade
 * @package Wjazz\Sensitiver
 */
class SensitiveFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Sensitive';
    }
}
