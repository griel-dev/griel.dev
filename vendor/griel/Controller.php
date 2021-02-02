<?php

namespace Griel;

require_once($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php');

//


class Controller {

    public $loader;
    public $twig;
    public $templateDir = '../public/html';
    public $cacheDir = '../public/cache';

    public function __construct() {
        $this->loader = new \Twig\Loader\FilesystemLoader($this->templateDir);
        $this->twig = new \Twig\Environment($this->loader, [
            //'cache' => $this->cacheDir,
            'cache' => false,
            'auto_reload' => true
        ]);
        /*$this->loader();
        $this->getCache();*/
    }

    
}