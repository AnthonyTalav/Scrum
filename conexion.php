<?php

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'apushdb';

    $conection = @mysqli_connect($host,$user,$password,$db);

    if(!$conection){
        echo "Error conexión base de datos";
    }