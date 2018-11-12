<?php
  $host = "";
  $port = "";
  $dbname = "";
  $user = "";
  $password = "";
  $pg_options = "--client_encoding=UTF8";

  function getConnection() {
    $connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} options='{$pg_options}'";
    $dbconn = pg_connect($connection_string);
  }
