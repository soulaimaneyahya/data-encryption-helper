<?php

namespace Soulaimaneyh\DataEncryptionHelper\Facades;

use Illuminate\Support\Facades\Facade;

class EncryptionFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'encryption';
    }
}
