<?php

require __DIR__.'/../vendor/autoload.php';

$app = new Proton\Application();

$app->getContainer()->inflector(ProtonApp\Controller\AppController::class)
                    ->invokeMethod('setApp', [$app]);

$app->register('\ProtonApp\ServiceProvider\PlatesProvider');
$app->register('\ProtonApp\ServiceProvider\AuraSessionProvider');

require 'routes.php';

$app->run();