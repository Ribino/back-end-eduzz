<?php include "template/header.php"; ?>


<h2>Listar postagens</h2>

<form method="post">
<label for="location">Procure</label>
<input type="text" id="location" name="location">
<input type="submit" name="submit" value="Filtrar">
</form>
<table>
    <tr id = "cabecalho-update">
        <th scope= "col" class = "text-center">Titulo</th>
        <th scope= "col" class = "text-center">Autor</th>
        <th scope= "col" class = "text-center">Categoria</th>
    </tr>


<?php 
include "init.php";
include "banco_blog.php";

   
if(isset($_POST['submit']))
    $pesquisa = $_POST['location'];
else
    $pesquisa = null;    
    
$lista = listar($con,$pesquisa,null);

foreach($lista as $listar){
    ?>
        <tbody>
            <th scope="row"><?php echo $listar['TITULO'] ?> </th>
            <th scope="row"><?php echo $listar['AUTOR'] ?> </th>
            <th scope="row"><?php echo $listar['CATEGORIA'] ?> </th>
            <th>
            <a href="update.php?id=<?=$listar['ID']?>" class="text-danger">Editar</a> 
        </tbody>
<?php
}

?>
</table>
<a href="index.php">Back to home</a>
<?php include "template/footer.php"; ?>