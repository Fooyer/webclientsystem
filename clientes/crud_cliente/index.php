<?php

class crudCliente {

    function __construct(){

        header('Access-Control-Allow-Origin: *');
        $this->loadPage();

    }

    private function loadPage(){

        include "index.html";

    }
}

new crudCliente();

?>