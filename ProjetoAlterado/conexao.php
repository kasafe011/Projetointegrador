<?php

$server = "localhost";
$username = "root";
$password = "";
$db_name = "cadastro_login";

$conexao = mysqli_connect($server, $username, $password, $db_name);
if(!$conexao) {
    die ("Erro na conexao".mysqli_connect_errno());
}


?>