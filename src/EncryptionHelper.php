<?php

namespace Soulaimaneyh\DataEncryptionHelper;

class EncryptionHelper
{
    public function encrypt(string $data): string
    {
        return openssl_encrypt(
            $data,
            config('encrypt.encryption_algo'),
            config('encrypt.encryption_key'),
            0,
            config('encrypt.encryption_iv')
        );
    }

    public function decrypt(string $encrypted): string
    {
        return openssl_decrypt(
            $encrypted,
            config('encrypt.encryption_algo'),
            config('encrypt.encryption_key'),
            0,
            config('encrypt.encryption_iv')
        );
    }
}
