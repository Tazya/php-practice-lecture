<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Laravel\Lumen\Application;

$app = new Application(dirname(__DIR__));
$app->withFacades();

$app->router->group([
    'namespace' => 'App\Http\Controllers',
], function ($router) {
    $router->get('/', 'IndexController@index');
});

$app->run();
