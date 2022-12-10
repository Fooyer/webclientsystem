<?php

# Chama todas as informações de todos os clientes

public function obterClientes(){

    $curl = curl_init("https://rtumliswsljprclempsj.supabase.co/rest/v1/usuarios?select=*");
            
    curl_setopt(
            $curl,
            CURLOPT_HTTPHEADER,
            array(
                "apikey: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InJ0dW1saXN3c2xqcHJjbGVtcHNqIiwicm9sZSI6ImFub24iLCJpYXQiOjE2NzA1MjAzNzQsImV4cCI6MTk4NjA5NjM3NH0.oUeKoXYB0Av7B39RlqUSlxHyWFkabljfy0190PkA-eY",
            )
        );

    $array = curl_exec($curl);

    return $array

}





?>