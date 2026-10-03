<?php
include "conexao.php";

if (isset($_GET["codigo"])) {
    $codigo = intval($_GET["codigo"]);
    $sql = "DELETE FROM clientes WHERE codigo = $codigo";
    if (mysqli_query($conexao, $sql)) {
        echo "<p style='color:green;'>Cliente excluído com sucesso.</p>";
    } else {
        echo "<p style='color:red;'>Erro ao excluir: " . mysqli_error($conexao) . "</p>";
    }
} else {
    echo "<p>Nenhum código informado.....</p>";
}
?>
<p><a href="consultar.php">← Voltar para consulta</a></p>