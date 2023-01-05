<?php

class crudCliente {

    function __construct(){

        $this->loadPage();

    }

    private function loadPage(){

        include "index.html";

    }
}

new crudCliente();

?>