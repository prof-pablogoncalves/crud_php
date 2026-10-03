<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Clientes</title>
    <style>
        body { font-family: Arial; margin: 40px; }
        nav a { display: block; margin: 10px 0; padding: 10px; background: #007BFF; color: white; text-decoration: none; width: 200px; text-align: center; border-radius: 5px; }
        nav a:hover { background: #0056b3; }
    </style>
</head>
<body>
    <h1>Gerenciamento de Clientes</h1>
    <nav>
        <a href="cadastrar.php">1. Cadastrar Cliente</a>
        <a href="consultar.php">2. Consultar / Alterar Cliente</a>
        <a href="consultar.php">3. Excluir Cliente</a> <!-- reutiliza consultar.php para listar e excluir -->
    </nav>
    <p><em>Obs: para alterar ou excluir, acesse a consulta e use os links correspondentes.</em></p>
</body>
</html>
