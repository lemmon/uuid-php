<?php

require 'uuid.php';
require 'json.php';

$data = [
  'uuid' => uuid(),
];

switch ($_SERVER['HTTP_ACCEPT'] ?? 'text/html') {
  case 'application/json':
    json($data);
    break;
  case 'text/plain':
    header('Content-Type: text/plain');
    echo $data['uuid'];
    break;
  case 'text/html':
  default:
    // default html response
    include 'view.php';
    break;
}
