<?php

require __DIR__.'/../vendor/autoload.php';

$app = new Proton\Application();

$app->getContainer()->inflector(App\Controller\AppController::class)
                    ->invokeMethod('setApp', [$app]);

$app->register('\Proton\ServiceProvider\PlatesProvider');
$app->register('\Proton\ServiceProvider\AuraSessionProvider');

require 'routes.php';

$app->run();