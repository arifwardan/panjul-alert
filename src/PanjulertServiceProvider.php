<?php

namespace Arifwardan\Panjulert;

use Illuminate\Support\ServiceProvider;

class PanjulertServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'panjulert');
    }


    public function register()
    {

    }

}
