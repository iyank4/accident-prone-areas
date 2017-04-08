<?php

$DB_CONN = mysqli_connect('localhost', 'root', 'mysql', 'gen2017');


function open_sesame($query) {
  global $DB_CONN;

  return mysqli_query($DB_CONN, $query);
}


function dd($vars) {
  echo var_dump($vars);
  exit;
}
