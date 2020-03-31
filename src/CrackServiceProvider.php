<?php

namespace AbCrack\Crack;

use Illuminate\Support\ServiceProvider;

class CrackServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->app['env'] = 'testing';
    }
}
