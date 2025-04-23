<?php

function conexion(){

$host = "host=dpg-d024s4juibrs73ahhl3g-a.oregon-postgres.render.com";
$port = "port=5432";
$dbname = "dbname=examen_7i9i";
$user = "user=examen_7i9i_user";
$password = "password=IXGMJs51LNTLw0YXBmFBD537YCM1J7JU";

$db = pg_connect("$host $port $dbname $user $password");

return $db;
}
?>