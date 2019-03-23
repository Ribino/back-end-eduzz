<?php include "template/header.php"; ?>
    <h2>Adiocinar uma postagem</h2>

    <form method="post">
    	<label for="title">Titulo</label>
    	<input type="text" name="title" id="title">
    	<label for="name">Autor</label>
    	<input type="text" name="name" id="name">
    	<label for="class">Caterogia</label>
    	<input type="text" name="class" id="class">
    	<label for="text">Texto</label>
        <textarea type = "text" name = "text" id = "text"></textarea>
        <input type="submit" name = "submit" value = "Enviar">
        <style>
            label,
            textarea{
                display: block;
                margin: 5px 0;
            }
        </style>
    </form>
    <?php 
        if(isset($_POST['submit'])){
            include "init.php";
            $novo_post = array(
                "TITULO" => $_POST['title'],
                "AUTOR"  => $_POST['name'],
                "CATEGORIA"     => $_POST['class'],
                "TEXTO"       => $_POST['text']
            );
         
            $sql = 'INSERT INTO post (TITULO, AUTOR, CATEGORIA, TEXTO)
               values ("'.$novo_post['TITULO'].'", "'.$novo_post['AUTOR'].'", "'.$novo_post['CATEGORIA'].'", "'.$novo_post['TEXTO'].'")';
               
            
         
            if ($con->query($sql) === TRUE)
                echo "Dado inserido";
            else  
                echo "Error: " . $sql . "<br>" . $con->error;
        }

                
    ?>
   
    <a href="index.php">Back to home</a> 
