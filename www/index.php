<?php

require 'uuid.php';
require 'json.php';

switch ($_SERVER['HTTP_ACCEPT'] ?? 'text/html') {
  case 'application/json':
    json([
      'uuid' => uuid(),
    ]);
    break;
  case 'text/plain':
    header('Content-Type: text/plain');
    echo uuid();
    break;
  case 'text/html':
  default:
    // default html response
    include 'view.php';
    break;
}
