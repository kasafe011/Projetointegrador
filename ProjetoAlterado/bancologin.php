<?php
session_start();

if(isset($_POST['entrar']) && !empty($_POST['email']) && !empty($_POST['senha'])){

    include_once('conexao.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //print_r('Email: '.$email);
    //print_r('senha: '.$senha);

    $sql = "SELECT * FROM cadastro WHERE email = '$email' and senha = '$senha'";

    $resultado = $conexao->query($sql);
    //print_r($resultado);

    if(mysqli_num_rows($resultado) < 1)
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }else{
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: ProdutoPrincipal.php');
    }

}else{
    header('Location:  login.php');
}

?>
