<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['senha']);
header("Location: login.php");
?>



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


