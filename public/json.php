<?php

function json($data) {
  header('Content-Type: application/json');
  return json_encode($data);
}
