<?php

# Chama todas as informações de todos os clientes ordenados pelo ID

function obterClientes(){

    $curl = curl_init("https://rtumliswsljprclempsj.supabase.co/rest/v1/rpc/OrderbyID");
            
    curl_setopt(
            $curl,
            CURLOPT_HTTPHEADER,
            array(
                "apikey: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InJ0dW1saXN3c2xqcHJjbGVtcHNqIiwicm9sZSI6ImFub24iLCJpYXQiOjE2NzA1MjAzNzQsImV4cCI6MTk4NjA5NjM3NH0.oUeKoXYB0Av7B39RlqUSlxHyWFkabljfy0190PkA-eY",
           )
        );


    ob_start();
    curl_exec($curl);
    curl_close($curl);
    $file_contents = ob_get_contents();
    ob_end_clean();

    $apiData = json_decode($file_contents);

    return $apiData;

}

function adicionaCliente($id,$telefone,$email,$telefone){

    $url = "https://rtumliswsljprclempsj.supabase.co/rest/v1/rpc/AtualizaClientes";

    $data = ['nome' => $nome, 'id' => $id, 'email' => $email, 'telefone' => $telefone];

       $options = [
            CURLOPT_URL => $url
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => http_build_query($data),
            CURLOPT_RETURNTRANSFER => false
        ];

        $ch = curl_init();
        curl_setopt_array($ch, $options);
        curl_setopt(
            $url,
            CURLOPT_HTTPHEADER,
            array(
                "apikey: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InJ0dW1saXN3c2xqcHJjbGVtcHNqIiwicm9sZSI6ImFub24iLCJpYXQiOjE2NzA1MjAzNzQsImV4cCI6MTk4NjA5NjM3NH0.oUeKoXYB0Av7B39RlqUSlxHyWFkabljfy0190PkA-eY",
           )
        );
        curl_exec($ch);
        
}