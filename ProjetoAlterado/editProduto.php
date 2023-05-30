<?php
 if (!empty($_GET['id_produtos'])) {
    
    include_once("conexao.php");

    $id = $_GET['id_produtos'];

    $sqlselect = "SELECT * FROM produtos WHERE id_produtos=$id";
 
    $result = $conexao ->query($sqlselect);

    if($result -> num_rows > 0 )
    {
        while($user_data = mysqli_fetch_assoc($result)){
        
            $nome = $user_data['nome_produto'];
            $quantidade = $user_data['quantidade_produto'];
            $valor_produto = $user_data['valor_produto'];
    }
    }else{
        header('Location: PagProduto.php');
    }
    
 }      


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar</title>
</head>
<body>
    <form action="ProdutoAtualizado.php" method="post">
        Digite seu nome: <input type="text" name="nome_produto" value="<?php echo $nome;?>">
        Digite a Quantidade atual do produto: <input type="number" name="quantidade_produto" value="<?php echo $quantidade;?>">
        Digite o novo valor: <input type="number" step="0.01" name="valor_produto" value="<?php echo $valor_produto;?>">
        <input type="submit" name="mudar" id="mudar"> 
        <input type="hidden" name="id" value="<?php echo $id;?>"> 
    </form>

    <a href="PagProdutos.php">voltar</a>
</body>
</html>
