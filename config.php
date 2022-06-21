<?php

    $servername = "127.0.0.1";
    $username = "phpmyadmin";
    $password = "phpmyadmindb00+--+";
    $dbname= "phpcrud_simplelearn";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error)
    {
        die("Connection to database filed! :". $conn->connect_error);
    }