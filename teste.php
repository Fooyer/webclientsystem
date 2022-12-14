<?php

http_response_code(200);

header('Content-Type: application/json');

$headers = getallheaders();

$apikey = $headers['API-Key'];

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  if ($apikey=="123") {

    $data = [
      'id' => 2,
      'name' => 'John Doe',
      'email' => 'john.doe@example.com'
    ];

    echo json_encode($data);
  }
  http_response_code(401);
  echo json_encode(array("message" => "A chave API é inválida."));
  exit;
}
http_response_code(401);
echo json_encode(array("message" => "Request inválida: GET"));
exit;