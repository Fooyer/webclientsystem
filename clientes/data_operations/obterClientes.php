<?php

header("HTTP/1.1 200 OK");
header("Content-Type: application/json");

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

if (empty($file_contents)) {

    header("HTTP/1.1 404 Not Found");
    echo json_encode(array("message" => "Nenhum usuário encontrado."));

} else {

    echo $file_contents;

}

?>