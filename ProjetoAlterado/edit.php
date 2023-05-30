 <?php
 if (!empty($_GET['id'])) {
    
    include_once("conexao.php");

    $id = $_GET['id'];

    $sqlselect = "SELECT * FROM cadastro WHERE id=$id";
 
    $result = $conexao ->query($sqlselect);

    if($result -> num_rows > 0 )
    {
        while($user_data = mysqli_fetch_assoc($result)){
        
            $nome = $user_data['nome'];
            $email = $user_data['email'];
            $senha = $user_data['senha'];
    }
    }else{
        header('Location: sistema.php');
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
    <form action="cadastroAtualizado.php" method="post">
        Digite seu nome: <input type="text" name="nome" >
        Digite seu email: <input type="email" aname="email" >
        Digite seu senha: <input type="password" name="senha" >
        <input type="submit" name="atualizar" id="atualizar"> 
        <input type="hidden" name="id" value=<?php echo $id;?>> 
    </form>

    <a href="sistema.php">voltar</a>
</body>
</html>
