<?php

include_once('./salvarCliente.php');

class salvarCliente{

    function __construct($id,$nome,$email,$telefone){

        if ($id==""){

            $this->adicionaCliente($nome,$email,$telefone);

        }

        header("Location: ./../crud_cliente/");

    }

    private function adicionaCliente($nome,$email,$telefone){

        $url = "https://rtumliswsljprclempsj.supabase.co/rest/v1/rpc/AtualizaCliente";
    
        $data = array("nome" => $nome, "email" => $email, "telefone" => $telefone);

        $json_data = json_encode($data);

        print_r($json_data);

        $ch = curl_init($url);
    
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json","apikey: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InJ0dW1saXN3c2xqcHJjbGVtcHNqIiwicm9sZSI6ImFub24iLCJpYXQiOjE2NzA1MjAzNzQsImV4cCI6MTk4NjA5NjM3NH0.oUeKoXYB0Av7B39RlqUSlxHyWFkabljfy0190PkA-eY",));
        
        curl_exec($ch);
        curl_close($ch);

    }


}

new salvarCliente($_GET["ID"], $_GET["Nome"], $_GET["Email"], $_GET["Telefone"]);

?>