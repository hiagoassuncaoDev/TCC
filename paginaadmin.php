<?php 
session_start();
if(empty($_SESSION)){
    echo
    "<script>
        location.href='index.php'
    </script>";
}else{
    $cargo = $_SESSION["cargo"]; 
    if(){
       
    }
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
<a href="paginainicial.php">Pagina Inicial</a>
    <a href="logout.php">Sair</a>
</body>
</html>