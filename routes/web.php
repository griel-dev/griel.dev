<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php');
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/griel/controller.php';

use Griel\Controller;
use Griel\Controller\PageController;



$router->get('/version', function () use ($router) {
    return $router->app->version();
});

$router->get('/', function() {
    $griel = new PageController([
        'title'=>'Griel Developer',
        'name'=>"Roberto",
        'site'=>"Griel"
    ]);
    $griel->render('index');
});

$router->post('/teste', function(Illuminate\Http\Request $request){
    return $request->input('aaa');
});