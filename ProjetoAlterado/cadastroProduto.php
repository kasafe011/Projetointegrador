<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <form action="cadastroProduto.php" method="post">
        Digite o nome do produto: <input type="text" name="nome_produto">
        Digite seu quantidade: <input type="number" name="quantidade_produto">
        Digite o valor do produto: <input type="number" step="0.01" name="valor_produto">
        <input type="submit" name="enviar">     
    </form>
    
    <a href="PagProdutos.php">Pagina de Produtos</a>
</body>
</html>

 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_produto = isset($_POST['nome_produto']) ? $_POST['nome_produto'] : '';
    $quantidade = isset($_POST['quantidade_produto']) ? $_POST['quantidade_produto'] : '';
    $valor_produto = isset($_POST['valor_produto']) ? $_POST['valor_produto'] : '';
    


if (isset($_POST['nome_produto'])) { 
    $nome_produto = $_POST['nome_produto'];
} else {
    $nome_produto = '';
}

if (isset($_POST['quantidade_produto'])) {
    $quantidade_produto = $_POST['quantidade_produto'];
} else {
    $quantidade_produto = '';
}

if (isset($_POST['valor_produto'])) {
    $valor_produto = $_POST['valor_produto'];
} else {
    $valor_produto = '';
}

include("conexao.php");


$sql = "INSERT INTO produtos (nome_produto, quantidade_produto, valor_produto) VALUE ('$nome_produto', '$quantidade_produto', '$valor_produto')";

if(mysqli_query($conexao, $sql)) {
    echo "Cadastro de produto realizado com sucesso";
}else {
    echo "Erro de conexao" .mysqli_connect_error($conexao);
}
mysqli_close($conexao);

}

?>