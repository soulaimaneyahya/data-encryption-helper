<?php

namespace Soulaimaneyh\DataEncryptionHelper\Tests\Feature;

use Soulaimaneyh\DataEncryptionHelper\EncryptionHelper;
use Soulaimaneyh\DataEncryptionHelper\Facades\EncryptionFacade;
use Soulaimaneyh\DataEncryptionHelper\Tests\BaseTest;

class EncryptionTest extends BaseTest
{
    public function testEncryptionDataFacade()
    {
        $encrypted = EncryptionFacade::encrypt('encryption');
        $decrypted = EncryptionFacade::decrypt($encrypted);

        $this->assertEquals('encryption', $decrypted);
    }

    public function testEncryptionDataHelper()
    {
        $encryptionHelper = new EncryptionHelper();

        $encrypted = $encryptionHelper->encrypt('encryption');
        $decrypted = $encryptionHelper->decrypt($encrypted);

        $this->assertEquals('encryption', $decrypted);
    }
}
