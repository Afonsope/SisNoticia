<?php
session_start();
// Verifica se o usuário está logado
if(!isset($_SESSION["usuario_id"])){
    // Se Sessão com Login não existir
    header("Location: ../index.php");// Redireciona para index
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Construir local para trazer os dados do banco -->
    <div>
        <h2>Painel do Usuário</h2>
        <p>
            Bem Vindo,<?php echo $_SESSION["usuario_nome"];?>
        </p>
        <p>
            <a href="../config/logout.php">Sair</a>
            <a href="cadastrar_noticia.php">Cad Noticia</a>
        </p>
    </div>
</body>
</html>