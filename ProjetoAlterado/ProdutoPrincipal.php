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

$sql = "SELECT * FROM produtos ORDER BY id_produtos DESC";

$resultado = $conexao->query($sql);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Produtos</title>
</head>
<body>
    <a href="PagProdutos.php">Pagina de Edição de Produtos</a>
    <div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Produto</th>
      <th scope="col">quantidade</th>
      <th scope="col">valor do produto</th>
    </tr>
  </thead>
  <tbody>
        <?php
            while($user_data = mysqli_fetch_assoc($resultado))
            {
                echo"<tr>";
                echo"<td>".$user_data['nome_produto']."</td>";
                echo"<td>".$user_data['quantidade_produto']."</td>";
                echo"<td>".$user_data['valor_produto']."</td>";
                echo"<td>
                </td>";
            }
        ?>
  </tbody>
</table>
    </div>
</body>
</html>