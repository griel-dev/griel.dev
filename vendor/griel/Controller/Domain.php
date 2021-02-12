<?php

namespace griel\Controller;

require_once($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php');

use Griel\Controller;

class Domain extends Controller {

    private $curl = 'https://www.hoteldaweb.com.br/ajax-isavail.php?d=';

    public function checkDotCom($domain) {

        $url = $this->curl . $domain . ".com";

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        $response = curl_exec($ch);

        curl_close($ch);

        $data = json_decode($response, true);

        return $data;
    }
    public function checkDotComBr($domain) {

        $url = $this->curl . $domain . ".com.br";

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        $response = curl_exec($ch);

        curl_close($ch);

        $data = json_decode($response, true);

        return $data;
    }


}
