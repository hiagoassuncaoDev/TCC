<?php 
    session_start();
    if(empty($_SESSION)){
        echo
        "<script>
            location.href='index.php'
        </script>";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
</head>
<body>
    <h1>Você está logado</h1>
    <a href="paginaadmin.php">Acesso Restrito</a>
    <a href="logout.php">Sair</a>
</body>
</html>