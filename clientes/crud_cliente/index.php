<?php

include_once "../cliente.php";

class crudCliente {
    


    function __construct(){

        $this->loadPage();

    }

    private function loadPage(){

        include "../../components/header/header.html";
        include "index.html";

    }
}

new crudCliente();


?>