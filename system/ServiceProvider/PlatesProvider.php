<?php

namespace Proton\ServiceProvider;

use League\Container\ServiceProvider;

class PlatesProvider extends ServiceProvider
{
    protected $provides = [
        'plates'
    ];

    public function register()
    {
        $this->getContainer()->singleton('plates', \League\Plates\Engine::class)
                             ->withArgument(__DIR__.'/../../resources/templates/');
    }
}