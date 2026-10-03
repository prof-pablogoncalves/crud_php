<?php
include "conexao.php";

// Se recebeu código, busca os dados
if (isset($_GET["codigo"])) {
    $codigo = intval($_GET["codigo"]);
    $sql = "SELECT * FROM clientes WHERE codigo = $codigo";
    $resultado = mysqli_query($conexao, $sql);
    $cliente = mysqli_fetch_assoc($resultado);
    if (!$cliente) {
        die("Cliente não encontrado.");
    }
} else {
    die("Código não informado.");
}

// Se houve envio do formulário de alteração
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo = intval($_POST["codigo"]);
    $nome = mysqli_real_escape_string($conexao, $_POST["nome"]);
    $endereco = mysqli_real_escape_string($conexao, $_POST["endereco"]);
    $telefone = mysqli_real_escape_string($conexao, $_POST["telefone"]);

    $sql = "UPDATE clientes SET nome='$nome', endereco='$endereco', telefone='$telefone' WHERE codigo=$codigo";
    if (mysqli_query($conexao, $sql)) {
        echo "<p style='color:green;'>Cliente atualizado com sucesso.</p>";
        // Atualiza a variável para mostrar os novos dados
        $cliente = array("codigo" => $codigo, "nome" => $nome, "endereco" => $endereco, "telefone" => $telefone);
    } else {
        echo "<p style='color:red;'>Erro ao atualizar: " . mysqli_error($conexao) . "</p>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Alterar Cliente</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Alterar Dados do Cliente</h2>
    <form method="post">
        <input type="hidden" name="codigo" value="<?= $cliente["codigo"] ?>">
        <label>Código:</label> <?= $cliente["codigo"] ?><br>
        <label>Nome:</label><input type="text" name="nome" value="<?= $cliente["nome"] ?>" required><br>
        <label>Endereço:</label><input type="text" name="endereco" value="<?= $cliente["endereco"] ?>" required><br>
        <label>Telefone:</label><input type="text" name="telefone" value="<?= $cliente["telefone"] ?>" required><br>
        <button type="submit">Salvar Alterações</button>
    </form>
    <p><a href="consultar.php">← Voltar para consulta</a></p>
</body>
</html>