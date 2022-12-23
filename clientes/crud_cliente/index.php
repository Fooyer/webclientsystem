<?php

include_once("../data_operations/functions.php");
#include "../cliente.php";

class crudCliente {

    private $response = null;

    function __construct($response){

        $this->response = $response;
        $this->loadPage();

    }

    private function loadPage(){

        $dados = $this->response;

        include "index.html";

    }
}

$response = obterClientes();

new crudCliente($response);
;

?>