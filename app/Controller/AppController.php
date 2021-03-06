<?php

namespace ProtonApp\Controller;

abstract class AppController implements ControllerInterface
{
    protected $app;

    public function setApp(\Proton\Application $app)
    {
        $this->app = $app;
    }
}
