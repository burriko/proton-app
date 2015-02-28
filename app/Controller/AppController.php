<?php

namespace App\Controller;

use League\Plates\Engine as Plates;

abstract class AppController implements ControllerInterface
{
    protected $app;

    public function __construct(Plates $plates)
    {
        $this->plates = $plates;
    }

    public function setApp(\Proton\Application $app)
    {
        $this->app = $app;
    }
}
