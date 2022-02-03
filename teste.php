<?php
$host = "localhost";
$user = "postgres";
$pwd = "default";
$db = "postgres";

$dbConnection = pg_connect("host=$host dbname=$db user=$user password=$pwd");

if($dbConnection){
    echo "connected!";
}

?>