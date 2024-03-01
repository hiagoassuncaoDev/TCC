<?php 
session_start();
if(empty($_SESSION)){
    echo
    "<script>
        location.href='index.php'
    </script>";
}else{
    $cargo = $_SESSION["cargo"]; 
    if($cargo != "1"){
        echo
        "<script>
            alert('Você não tem permissão para acessar essa página.');
        </script>";
        echo
        "<script>
            location.href='paginainicial.php'
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso Restrito</title>
</head>
<body>
    <h1>Você é um administrador</h1>
    <a href="paginainicial.php">Página Inicial</a>
    <a href="logout.php">Sair</a>
</body>
</html>