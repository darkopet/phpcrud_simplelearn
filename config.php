<?php

    $servername = "127.0.0.1";
    $username = "phpmyadmin";
    $password = "phpmyadmindb00+--+";
    $dbname= "phpcrud_simplelearn";
    $connection = new mysqli($servername, $username, $password, $dbname);

    if ($connection->connect_error)
    {
        die("Connection to database filed! :". $connection->connect_error);
    }
