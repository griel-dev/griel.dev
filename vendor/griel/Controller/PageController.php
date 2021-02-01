<?php

namespace griel\Controller;

require_once($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php');

use Griel\Controller;//

class PageController extends Controller {

    public $args = [];

    public function __construct($args = []) {
        parent::__construct();
        $this->setArgs($args);
        echo $this->twig->render('header.html', $this->args);
    }

    public function render($page, $args = []) {
        echo $this->twig->render($page . '.html', $this->args);
    }

    private function setArgs($args) {
        foreach($args as $key => $value) {
            $this->args[$key] = $value;
        }
        return $this->args;
    }

    public function __destruct() {
        echo $this->twig->render('footer.html', $this->args);
    }
}