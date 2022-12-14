<?php

include_once "../cliente.php";

class crudCliente {
    


    function __construct(){

        $this->loadPage();

    }

    private function loadPage(){
        
        include "tela.html";

    }
}

new crudCliente();


?>