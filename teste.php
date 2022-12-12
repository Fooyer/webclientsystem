<?php

// set the response code to 200 (OK)
http_response_code(200);

// set the response header to JSON
header('Content-Type: application/json');



// create the data for the response
$data = [
  'id' => 2,
  'name' => 'John Doe',
  'email' => 'john.doe@example.com'
];

// encode the data as JSON and output it
echo json_encode($data);