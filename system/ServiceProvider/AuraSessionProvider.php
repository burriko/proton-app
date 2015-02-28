<?php

namespace Proton\ServiceProvider;

use League\Container\ServiceProvider;

class AuraSessionProvider extends ServiceProvider
{
    protected $provides = [
        'session'
    ];

    public function register()
    {
        $this->getContainer()->singleton('session', function() {
            $session_factory = new \Aura\Session\SessionFactory;
            $session = $session_factory->newInstance($_COOKIE);
            return $session->getSegment('ProtonApp');
        });
    }
}