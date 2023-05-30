<?php
    // isset -> serve para saber se uma variável está definida
    include_once('conexao.php');
    if(isset($_POST['mudar']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome_produto'];
        $quantidade = $_POST['quantidade_produto'];
        $valor_produto = $_POST['valor_produto'];
       
        $sqlInsert = "UPDATE produtos SET nome_produto='$nome',quantidade_produto='$quantidade', valor_produto='$valor_produto' WHERE id_produtos=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: PagProdutos.php');

?>