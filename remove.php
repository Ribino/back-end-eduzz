<?php 
    include "init.php";
    include "banco_blog.php";

    $id = $_GET['id'];
    deletar($con, $id);
    
    header("location: pag_delete.php");
?>