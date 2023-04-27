<?php

return [
    'encryption_key' => env('ENCRYPTION_KEY') ?? 'Pa$$w0rd!',
    'encryption_iv' => env('ENCRYPTION_IV') ?? '1706002229945240',
    // Encrypt the data using AES-256-CBC by default
    'encryption_algo' => 'aes-256-cbc'
];
