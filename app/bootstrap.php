<?php

require __DIR__.'/../vendor/autoload.php';

$app = new Proton\Application();

$app->register('\Proton\ServiceProvider\PlatesProvider');

require 'routes.php';

$app->run();