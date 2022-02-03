<?php
    $db = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=default");
        if($db){
            echo "Success!";
        }
?>