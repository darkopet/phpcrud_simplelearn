<?php

    $servername = "127.0.0.1";
    $username = "phpmyadmin";
    $password = "phpmyadmindb00+--+";
    $dbname= "phpcrud_simplelearn";

    // $conn = new PDO('mysql:host=localhost;port=3306;dbname=phpcrud_simplelearn', 'phpmyadmin', 'phpmyadmindb00+--+');
    # If the connection to the database is not succesfull:
    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $conn = new mysqli($servername,$username,$password,$dbname);

    echo "<pre>";
    var_dump($conn);
    echo "</pre>";

    if ($conn->connect_error)
    {
        die("Connection to database filed! :" . $conn->connect_error);
    }