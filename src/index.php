<?php

require 'uuid.php';
require 'json.php';

if (isset($_SERVER['HTTP_ACCEPT']) and 'application/json' === $_SERVER['HTTP_ACCEPT']) {
  // return
  json([
    'uuid' => uuid(),
  ]);
} else {
  // html
  include 'view.php';
}
