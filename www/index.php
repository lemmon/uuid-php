<?php

require 'uuid.php';
require 'json.php';

define('CRLF', "\r\n");

$data = [
  'uuid' => uuid(),
];

switch ($_SERVER['HTTP_ACCEPT'] ?? 'text/html') {
  case 'application/json':
    echo json($data), CRLF;
    break;
  case 'text/plain':
    header('Content-Type: text/plain');
    echo $data['uuid'], CRLF;
    break;
  case 'text/html':
  default:
    // default html response
    include 'view.php';
    break;
}
