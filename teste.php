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
  if ($apiKey=="123") {
    // The "API-Key" header is valid, so continue processing the request

    // create the data for the response
    $data = [
      'id' => 2,
      'name' => 'John Doe',
      'email' => 'john.doe@example.com'
    ];

    // encode the data as JSON and output it
    echo json_encode($data);

  } else {
    // The "API-Key" header is not valid, so return an error

    http_response_code(400);

    echo "Error"

  }
} else {
  // The "API-Key" header is not present, so return an error

  http_response_code(400);

  echo "Api-Key is necessary"

}