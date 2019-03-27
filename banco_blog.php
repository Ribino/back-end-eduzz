<?php 
    include "init.php";

function adicionar($con, $novo_post){
    $sql = "INSERT INTO post (TITULO, AUTOR, CATEGORIA, TEXTO)
               values ('{$novo_post['TITULO']}', '{$novo_post['AUTOR']}', '{$novo_post['CATEGORIA']}', '{$novo_post['TEXTO']}')";
   return mysqli_query($con, $sql);
}


function listar($con, $pesquisa){
    $consulta = array();
    if($pesquisa == null){
        echo "pintoooooo";
        $sql = "SELECT * FROM post";
    }
    else
        $sql = "SELECT * FROM post 
                WHERE TITULO LIKE '%{$pesquisa}%'
                OR AUTOR LIKE '%{$pesquisa}%'
                OR CATEGORIA LIKE '%{$pesquisa}%'";
    
    $pesquisa_banco =  mysqli_query($con, $sql);
    
    while($resultados = mysqli_fetch_array($pesquisa_banco))
        array_push($consulta,$resultados);
    return $consulta;
}

/*
function editar($con, )

function deletar($con, )
*/