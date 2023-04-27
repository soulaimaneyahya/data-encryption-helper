# data-encryption-helper

<p align="center">
<a href=""><img src="./assets/tests.svg" alt="Tests"></a>
<a href=""><img src="./assets/license.svg" alt="License"></a>
</p>

A package that provides easy-to-use encryption and decryption functions for sensitive data in your PHP application.
This package include features like symmetric and asymmetric encryption, key management, and support for popular encryption algorithms.

## Installation
Require this package with composer. It is recommended to only require the package for development.

```shell
composer require soulaimaneyh/data-encryption-helper --dev
```

# ServiceProvider:
Add the ServiceProvider to the providers array in config/app.php

DataEncryptionHelperProvider::class,
If you want to use the facade, add this alias to your facades in app.php:

'Encryption' => EncryptionFacade::class,

Copy the package config to your local config with the publish command:
```shell
php artisan vendor:publish --tag=encrypt-config
```

.env file example:
```shell
ENCRYPTION_KEY='Pa$$w0rd!'
ENCRYPTION_IV='1706002229945240'
```

## Facade Usage

encrypt:
```php
$user = User::create([
    'phone' => EncryptionFacade::encrypt(request('phone')),
    'email' => EncryptionFacade::encrypt(request('email'))
]);
```

decrypt:
```php
return view('user', [
    'phone' => EncryptionFacade::decrypt($user->phone),
    'email' => EncryptionFacade::decrypt($user->email)
]);
```

### Run Tests

```shell
composer test
```
---

Need helps? Reach me out

> Email: soulaimaneyahya1@gmail.com

> Linkedin: soulaimane-yahya

All the best :beer:
