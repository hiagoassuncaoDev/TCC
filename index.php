<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/login-style.css">
    <title>Staff Track - Login</title>
    <link rel="shortcut icon" href="./assets/favicon.png" />
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Bem vindo(a)<br>ao <span>StaffTrack</span>!</h1>
            <img src="./assets/logo.png" class="left-login-image" alt="logo-staff-track">
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>Acesso</h1>
                <form action="login.php" method="post" class="textfield">
                    
                        <label for="usuario">Usuário</label>
                        <input type="text" name="usuario" placeholder="Usuário"><br>
                    
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="Senha"><br>
                    
                        <div class="buttonfield">
                            <button class="btn-login">Login</button>
                        </div>
                </form>
                
            </div>
        </div>
    </div>
    
</body>
</html>