<?php 
    include "init.php";

function adicionar($con, $novo_post){
    $sql = "INSERT INTO post (TITULO, AUTOR, CATEGORIA, TEXTO)
               values ('{$novo_post['TITULO']}', '{$novo_post['AUTOR']}', '{$novo_post['CATEGORIA']}', '{$novo_post['TEXTO']}')";
   return mysqli_query($con, $sql);
}


function listar($con, $pesquisa, $id){
    $lista = array();

    if($id != null)
        $sql = "SELECT * FROM post 
            WHERE ID like {$id}";
    else{
        if($pesquisa == null)
            $sql = "SELECT * FROM post";
        else
            $sql = "SELECT * FROM post 
                    WHERE TITULO LIKE '%{$pesquisa}%'
                    OR AUTOR LIKE '%{$pesquisa}%'
                    OR CATEGORIA LIKE '%{$pesquisa}%'";
    }
    $pesquisa_banco =  mysqli_query($con, $sql);
    
    while($resultados = mysqli_fetch_array($pesquisa_banco))
        array_push($lista,$resultados);
    return $lista;
}


function editar($con, $up_post, $id){
    $sql = "UPDATE post SET TITULO = '{$up_post['TITULO']}',
            AUTOR = '{$up_post['AUTOR']}',
            CATEGORIA = '{$up_post['CATEGORIA']}',
            TEXTO = '{$up_post['TEXTO']}'
            WHERE ID = {$id}";

    return mysqli_query($con, $sql);

}

function deletar($con, $id){
$sql = "DELETE FROM post WHERE id = {$id}";

return mysqli_query($con, $sql);

}
