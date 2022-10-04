<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Illuminate\Http\Request;
use Laravel\Lumen\Application;

$app = new Application(dirname(__DIR__));

$app->router->get('/', function () {
    return 'Hello Kolesa Backend Upgrade!';
});

$app->router->get('/hello', function (Request $request) {
    $name = $request->input('name', 'guest');

    return 'Hello ' . $name;
});

$app->router->get('/server', function () {
    // Пример протечки абстракции - прямое обращение к глобальной переменной
    return response()->json($_SERVER);
});

$app->run();
