<?php

namespace Soulaimaneyh\DataEncryptionHelper\Providers;

use Illuminate\Support\ServiceProvider;

class DataEncryptionHelperProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            $this->basePath('config/encrypt.php') => base_path('/config/encrypt.php')
        ], 'encrypt-config');
    }

    public function register()
    {
        $this->mergeConfigFrom($this->basePath('config/encrypt.php'), 'encrypt');
    }

    protected function basePath($path = "")
    {
        return __DIR__ . '/../../' . $path;
    }
}
