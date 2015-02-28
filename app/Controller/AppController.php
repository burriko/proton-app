<?php

namespace App\Controller;

use League\Plates\Engine as Plates;

class AppController
{
    public function __construct(Plates $plates)
    {
      $this->plates = $plates;
    }
}
