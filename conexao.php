<?php
$servidor = "localhost";
$usuario = "root";          // altere se necessário
$senha = "root";                // senha do MySQL
$banco = "cadastro_clientes";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if (!$conexao) {
    die("Erro na conexão--: " . mysqli_connect_error());
}
?>