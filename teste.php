<?php

// set the response code to 200 (OK)
http_response_code(200);

// set the response header to JSON
header('Content-Type: application/json');

$headers = getallheaders();

// Check if the "API-Key" header is present in the request
if (isset($headers['API-Key'])) {
  // Get the value of the "API-Key" header
  $apiKey = $headers['API-Key'];

  // Validate the value of the "API-Key" header
  if (validateApiKey($apiKey)) {
    // The "API-Key" header is valid, so continue processing the request

    $curl = curl_init("https://rtumliswsljprclempsj.supabase.co/rest/v1/usuarios?select=*");
            
    curl_setopt(
            $curl,
            CURLOPT_HTTPHEADER,
            array(
                "apikey: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InJ0dW1saXN3c2xqcHJjbGVtcHNqIiwicm9sZSI6ImFub24iLCJpYXQiOjE2NzA1MjAzNzQsImV4cCI6MTk4NjA5NjM3NH0.oUeKoXYB0Av7B39RlqUSlxHyWFkabljfy0190PkA-eY",
            )
        );

    $array = curl_exec($curl);

    // encode the data as JSON and output it
    echo json_encode($array);

  } else {
    // The "API-Key" header is not valid, so return an error

  }
} else {
  // The "API-Key" header is not present, so return an error

}