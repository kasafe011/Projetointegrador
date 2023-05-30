<?php

    if(!empty($_GET['id_produtos']))
    {
        include_once('conexao.php');

        $id = $_GET['id_produtos'];

        $sqlSelect = "SELECT *  FROM produtos WHERE id_produtos=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM produtos WHERE id_produtos=$id";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: PagProdutos.php');
   
?>