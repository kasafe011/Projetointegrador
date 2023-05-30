<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <form action="cadastro.php" method="post">
        Digite seu nome: <input type="text" name="nome">
        Digite seu email: <input type="email" name="email">
        Digite seu senha: <input type="password" name="senha">
        <input type="submit" name="enviar">     
    </form>
    
    <a href="home.php">home</a>
</body>
</html>

 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $senha = isset($_POST['senha']) ? $_POST['senha'] : '';


if (isset($_POST['nome'])) { 
    $nome = $_POST['nome'];
} else {
    $nome = '';
}

if (isset($_POST['email'])) {
    $email = $_POST['email'];
} else {
    $email = '';
}

if (isset($_POST['senha'])) {
    $senha = $_POST['senha'];
} else {
    $senha = '';
}

include("conexao.php");


$sql = "INSERT INTO cadastro (nome, email, senha) VALUE ('$nome', '$email', '$senha')";

if(mysqli_query($conexao, $sql)) {
    echo "Cadastro realizado";
}else {
    echo "Erro de conexao" .mysqli_connect_error($conexao);
}
mysqli_close($conexao);

}

?>