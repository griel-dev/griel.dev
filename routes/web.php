<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php');
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/griel/controller.php';

use Griel\Controller;
use Griel\Controller\PageController;
use Griel\Controller\Domain;



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

$router->get('/dominios', function(Illuminate\Http\Request $request){


    
    if ($request->input('domain')) {
        $domain = new Domain();
        $result = $domain->openCurl($request->input('domain'))['res'];
    } else {
        $result = '';
    }


    $griel = new PageController([
        'title'=>'Cheque seu domínio',
        'result'=>$result
    ]);
    $griel->render('domain');
});