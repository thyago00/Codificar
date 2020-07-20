<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$nome_banco = "bd_oficina";
 
$conexao = mysqli_connect($servidor, $usuario, $senha, $nome_banco);

if (!$conexao) {
    die("Conexão falhou: " . mysqli_connect_error());
}
?>