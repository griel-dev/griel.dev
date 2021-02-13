<?php

namespace griel\Controller;

require_once($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php');

use Griel\Controller;

class Counter extends Controller {

    public static function updateNumber()
    {
        $file = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'counter.txt';
        $n = file_get_contents($file);
        $update = $n + 1;
        $file = fopen($file, "w") or die("Unable to open file!");
        fwrite($file, $update);
        fclose($file);
    }

}