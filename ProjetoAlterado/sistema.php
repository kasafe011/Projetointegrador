<?php
    session_start();
    include_once("conexao.php");
    //print_r($_SESSION);

    if((!isset($_SESSION['email'])== true) and (!isset($_SESSION['senha'])== true))
{
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}
$logado = $_SESSION['email'];

$sql = "SELECT * FROM cadastro ORDER BY id DESC";

$resultado = $conexao->query($sql);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="home.php">Home</a>
    <a href="PagProdutos.php">Retornar a Pagina de Produtos</a>
    <div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nome</th>
      <th scope="col">email</th>
      <th scope="col">senha</th>
      <th scope="col">...</th>
    </tr>
  </thead>
  <tbody>
        <?php
            while($user_data = mysqli_fetch_assoc($resultado))
            {
                echo"<tr>";
                echo"<td>".$user_data['id']."</td>"; 
                echo"<td>".$user_data['nome']."</td>";
                echo"<td>".$user_data['email']."</td>";
                echo"<td>".$user_data['senha']."</td>";
                echo"<td>
                <a class='btn btn-sm btn-primary' href='edit.php?id=$user_data[id]'>Editar</a>
                <a class='btn btn-sm btn-primary' href='delete.php?id=$user_data[id]'>Deletar</a>
                </td>";
            }
        ?>
  </tbody>
</table>
    </div>
</body>
</html>