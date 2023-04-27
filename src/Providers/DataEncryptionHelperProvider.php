<?php

namespace Soulaimaneyh\DataEncryptionHelper\Providers;

use Illuminate\Support\ServiceProvider;
use Soulaimaneyh\DataEncryptionHelper\EncryptionHelper;

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

        // register facades
        $this->app->bind('encryption', function(){
            return new EncryptionHelper();
        });
    }

    protected function basePath($path = "")
    {
        return __DIR__ . '/../../' . $path;
    }
}
