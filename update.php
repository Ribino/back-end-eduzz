<?php include "template/header.php"; ?>
<link rel="stylesheet" href="css/style.css" />

<h2>Editar postagem</h2>
<?php
    include "init.php";
    include "banco_blog.php";

    $id = $_GET['id'];
    $lista = listar($con, null, $id);

    $_POST['title'] =  $lista[0]['TITULO'];
    // print_r($lista);
?>
<form method="post">
    <label for="title">Titulo</label>
    <input type="text" name="title" id="title" value = "<?php echo $lista[0]['TITULO']?>">
    <label for="name">Autor</label>
    <input type="text" name="name" id="name" value = "<?php echo $lista[0]['AUTOR']?>">
    <label for="class">Caterogia</label>
    <input type="text" name="class" id="class" value = "<?php echo $lista[0]['CATEGORIA']?>">
    <label for="text">Texto</label>
    <textarea type = "text" name = "text" id = "text" ><?php echo $lista[0]['TEXTO']?></textarea>
    <input type="submit" name = "submit" value = "Editar">
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
        $up_post = array(
            "TITULO" => $_POST['title'],
            "AUTOR"  => $_POST['name'],
            "CATEGORIA"     => $_POST['class'],
            "TEXTO"       => $_POST['text']
        );
        
        $atualizar = editar($con, $up_post, $id);    
        
        if ($atualizar){
            echo "<script>alert(\"Editado com sucesso!\")</script>";
            header("location: pag_update.php");
        }
        else  
            echo "Error: " . $sql . "<br>" . $con->error;
    }
?>

<a href="index.php">Back to home</a>
<?php include "template/footer.php"; ?> 
