<?php

namespace Africode\Coa;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Africode\Coa\Coa
 */
class CoaFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'coa';
    }
}
