<?php



namespace Alkhachatryan\Encryptable;

use Illuminate\Support\ServiceProvider;
use Alkhachatryan\Encryptable\Encryptable;

class EncryptableServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->alias(Encryptable::class, 'encryptable');
    }
}
