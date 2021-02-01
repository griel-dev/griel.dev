<?php

namespace Griel;

require_once($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php');

//


class Controller {

    public $loader;
    public $twig;

    public function __construct() {
        $this->loader = new \Twig\Loader\FilesystemLoader('../public/html');
        $this->twig = new \Twig\Environment($this->loader, [
            'cache' => '../public/cache',
        ]);
        /*$this->loader();
        $this->getCache();*/
    }

    
}