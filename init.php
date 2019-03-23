<?php 
    $con = mysqli_connect("localhost","root","usbw","blog");

    if (mysqli_connect_errno())
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
     else 
        echo "Conected Successful"."<br>";
    
?>