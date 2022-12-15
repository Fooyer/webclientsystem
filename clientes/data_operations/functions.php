<?php

# Chama todas as informações de todos os clientes

function obterClientes(){

    $curl = curl_init("https://www.gov.br/receitafederal/pt-br/acesso-a-informacao/legislacao/documentos-e-arquivos/tipi-em-excel.xlsx");
            
#    curl_setopt(
#            $curl,
#            CURLOPT_HTTPHEADER,
#            array(
#                "apikey: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InJ0dW1saXN3c2xqcHJjbGVtcHNqIiwicm9sZSI6ImFub24iLCJpYXQiOjE2NzA1MjAzNzQsImV4cCI6MTk4NjA5NjM3NH0.oUeKoXYB0Av7B39RlqUSlxHyWFkabljfy0190PkA-eY",
#           )
#        );

    $array = file_get_contents($curl);
    $apiData = json_decode($apiResponse);

    var_dump($apiData);

    //return $array;

}

?>