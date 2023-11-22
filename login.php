<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="css/login.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área de acesso</title>
    <link rel="icon" href="images/logo.png" type="image/png">
</head>
<body>
    <div class="container">
        <a href="index.php">
            <img src="images/logo.png" alt="Logo da Empresa" class="logo">
        </a>
        <div class="login-container">
            <form action="auth.php" method="post">
                <label for="usuario">Usuário:</label><br>
                <input type="text" name="usuario" placeholder="Digite o Usuário"><br>
                <label for="senha">Senha:</label><br>
                <input type="password" name="senha" placeholder="Digite a Senha"><br>

                <br><input type="submit" value="Acessar">
            </form>

            <div class="erro-box">
                <?php
                    if(isset($_GET['erro_pass'])){
                        echo '<p class="erro-item">Usuário ou Senha Inválida!</p>';
                    }
                    elseif(isset($_GET['erro_login'])){
                        echo '<p class="erro-item">É necessário estar logado para acessar à página!</p>';
                    }
                    else{
                        echo '';
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>