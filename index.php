<?php

include "clientes/data_operations/functions.php";

class menu {

    public $dados = NULL;

    function __construct($request){

        $this->dados = $request;

        $sc = $this->loadPage();
        if ($sc==FALSE) {exit("<script> alert('Houve um erro ao carregar a página.') </script>");}

    }

    public function loadPage(){
        
        $dados=$this->dados;

        include "index.html";
        
        return TRUE;
    
    }

};

$response = obterClientes();

// Definimos uma função de comparação que ordena os objetos pelo ID
function compareById($a, $b) {
  if ($a->id == $b->id) {
    return 0;
  }
  return ($a->id < $b->id) ? -1 : 1;
}

// Usamos a função usort() para ordenar o array de objetos
usort($response, 'compareById');


foreach ($response as $propriedade => $valor) {
       
    foreach ($valor as $propriedade2 => $valor2) {
       
        echo "$propriedade2 : $valor2 <br>";

    };
    echo "<br>";
};

?>