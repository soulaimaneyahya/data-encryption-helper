<?php

namespace Soulaimaneyh\DataEncryptionHelper\Tests;

use Soulaimaneyh\DataEncryptionHelper\Facades\EncryptionFacade;
use Soulaimaneyh\DataEncryptionHelper\Providers\DataEncryptionHelperProvider;
use Orchestra\Testbench\TestCase;

class BaseTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            DataEncryptionHelperProvider::class
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            'Encryption' => EncryptionFacade::class
        ];
    }
}
