<?php

function conexion(){

$host = "host=dpg-cvmpjf6mcj7s73bqu9e0-a.oregon-postgres.render.com";
$port = "port=5432";
$dbname = "dbname=agomez";
$user = "user=agomez_user";
$password = "password=wz4NrUy8TjbtYvfHVFwCEhHl9hy1gJli";

$db = pg_connect("$host $port $dbname $user $password");

return $db;
}
?>