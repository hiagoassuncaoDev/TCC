<?php
session_start();
if (empty($_SESSION)) {
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
    <title>Staff Track - Home</title>
    <link rel="shortcut icon" href="./assets/favicon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        :root {
            --background-main-color: #E4E9F2;
            --font-color: #070A40;
            --featured-color: #3321A6;
            --details-color: #04D9B2;
            --extra-color: #2D4BA6;
        }

        body {
            background: var(--background-main-color);
            background-attachment: fixed;
            font-family: "Poppins", sans-serif;
        }

        main {
            background-color: #070A40;
            height: 100%;
        }

        main h1 {
            color: #E4E9F2;
        }

        main label {
            color: #E4E9F2;
        }

        #carouselExampleAutoplaying {
            width: 100% !important;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background:#E4E9F2;">
        <div class="container-fluid mt-2 mb-2">
            <a class="navbar-brand" href="paginainicial.php"><img src="./assets/logo.png" alt="Logo" width="42" height="30" class="d-inline-block align-text-top">StaffTrack</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="paginainicial.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=cadastro">Cadastro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=verequipe">Equipe</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="logout.php">Sair</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <?php
        $paginaParaCarregar = $_GET["page"] ?? "boasvindas";
        include("config.php");
        switch ($paginaParaCarregar) {
            case "atuarNoBanco":
                include("atuarNoBanco.php");
                break;
            case "cadastro":
                include("cadastro.php");
                break;
            case "verequipe":
                include("verequipe.php");
                break;
            case "edicao":
                include("edicao.php");
                break;
            case "exclusao":
                include("exclusao.php");
                break;
            default:
                include("boasvindas.php");
        }
        ?>
    </main>
</body>

</html>