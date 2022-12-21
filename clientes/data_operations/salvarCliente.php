<?php

include_once './salvarCliente.php'

class salvarCliente{

    private $id = $_GET["ID"];
    public $nome = $_GET["Nome"];
    public $email = $_GET["Email"];
    public $telefone = $_GET["Telefone"];

    function __construct(){

        adicionaCliente($this->id,$this->telefone,$this->email,$this->telefone);

        header("Location: ./../crud_cliente/");

    }


}





















?>