<?php

namespace Proton\ServiceProvider;

use League\Container\ServiceProvider;

class PlatesProvider extends ServiceProvider
{
    protected $provides = [\League\Plates\Engine::class];

    public function register()
    {
        $this->getContainer()->singleton(\League\Plates\Engine::class)
                             ->withArgument(__DIR__.'/../../resources/templates/');
    }
}