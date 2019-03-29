<?php 
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "blog";
    $con = mysqli_connect($servidor,$usuario,$senha,$database);

    if (mysqli_connect_errno())
        echo "Failed to connect to MySQL: " . mysqli_connect_error();

    