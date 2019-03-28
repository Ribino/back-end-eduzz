<?php include "template/header.php"; ?>
<link rel="stylesheet" href="css/style.css" />
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
             margin: 10px 0;
            }       
        </style>
    </form>
    <?php 
        if(isset($_POST['submit'])){
            include "init.php";
            include "banco_blog.php";


            $novo_post = array(
                "TITULO" => $_POST['title'],
                "AUTOR"  => $_POST['name'],
                "CATEGORIA"     => $_POST['class'],
                "TEXTO"       => $_POST['text']
            );
            
            $inserir = adicionar($con, $novo_post);    
         
            if ($inserir)
                echo "<script>alert(\"Cadastrado com sucesso!\")</script>";
            else  
                echo "Error: " . $sql . "<br>" . $con->error;
        }

                
    ?>
   
    <a href="index.php">Back to home</a>
    <?php include "template/footer.php"; ?> 
