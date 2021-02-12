<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php');
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/griel/Controller.php';

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
    $griel->render('soon');
});

$router->post('/teste', function(Illuminate\Http\Request $request){
    return $request->input('aaa');
});

$router->get('/dominios', function(Illuminate\Http\Request $request){


    
    if ($request->input('domain')) {
        $domain = new Domain();
        $dotCom = $domain->checkDotCom($request->input('domain'))['res'];
        $dotComBr = $domain->checkDotComBr($request->input('domain'))['res'];
        if ($dotComBr == 'ok') {
            $dotComBr = true;
        } else {
            $dotComBr = false;
        }
        if ($dotCom == 'ok') {
            $dotCom = true;
        } else {
            $dotCom = false;
        }
    } else {
        $dotCom = null;
        $dotComBr = null;
    }


    $griel = new PageController([
        'title'=>'Cheque seu domínio',
        'dotcom'=>$dotCom,
        'dotcombr'=>$dotComBr,
        'domainInput'=>$request->input('domain')
    ]);
    $griel->render('domain');
});