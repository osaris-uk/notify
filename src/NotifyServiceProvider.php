<?php

namespace OsarisUk\Notify;

use Illuminate\Support\ServiceProvider;

class NotifyServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('notify', function ($app) {
            return $this->app->make('OsarisUk\Notify\Notifier');
        });
    }
}
