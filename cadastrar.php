<?php
include "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = mysqli_real_escape_string($conexao, $_POST["nome"]);
    $endereco = mysqli_real_escape_string($conexao, $_POST["endereco"]);
    $telefone = mysqli_real_escape_string($conexao, $_POST["telefone"]);

    $sql = "INSERT INTO clientes (nome, endereco, telefone) VALUES ('$nome', '$endereco', '$telefone')";
    if (mysqli_query($conexao, $sql)) {
        echo "<p style='color:green;'>Cliente cadastrado com sucesso! Código: " . mysqli_insert_id($conexao) . "</p>";
    } else {
        echo "<p style='color:red;'>Erro: " . $sql . "<br>" . mysqli_error($conexao) . "</p>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Cliente</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Cadastrar Novo Cliente</h2>
    <form method="post">
        <label>Nome:</label><input type="text" name="nome" required><br>
        <label>Endereço:</label><input type="text" name="endereco" required><br>
        <label>Telefone:</label><input type="text" name="telefone" required><br>
        <button type="submit">Cadastrar</button>
    </form>
    <p><a href="index.php">← Voltar ao menu</a></p>
</body>
</html>