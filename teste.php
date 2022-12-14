<?php

// set the response code to 200 (OK)
http_response_code(200);

// set the response header to JSON
header('Content-Type: application/json');

//$headers = getallheaders();

// Obtenha a chave API enviada
$apikey = get_apikey();

// Verifique se a chave API é válida
if ($apikey!="123") {
  // A chave API não é válida
  // Envie uma resposta de erro com o código de status HTTP 401 (Não autorizado)
  http_response_code(401);
  echo json_encode(array("message" => "A chave API é inválida."));
  exit;
}

// A chave API é válida
// Obtenha os parâmetros de consulta
$data = [
  'id' => 2,
  'name' => 'John Doe',
  'email' => 'john.doe@example.com'
];

// encode the data as JSON and output it
echo json_encode($data);
// Verifique se houve resultados