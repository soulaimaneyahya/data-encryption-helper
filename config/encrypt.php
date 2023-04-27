<?php

return [
    'encryption_key' => env('ENCRYPTION_KEY'),
    'encryption_iv' => env('ENCRYPTION_IV'),
    // Encrypt the data using AES-256-CBC by default
    'encryption_algo' => 'aes-256-cbc'
];
