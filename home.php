<?php
    include 'check_login.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <script src="js/menu.js" defer></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/home.css">    
    <link rel="icon" href="images/logo.png" type="image/png">

    <title>Área de membros - Vegan</title>
</head>
<body>
    
<main>
    <header>        
        <section>
            <div class="profile">
                <div class="interface">
                    <div class="logo">
                        <a href=""><img src="images/logo.png"></a>
                    </div>
                </div>
                <div class="profile-container">
                        <h2>Perfil do Usuário</h2>
                        <p class="descript"> Usuário logado como: </p> <p class="user"><?php echo $usuario; ?></p>
                        <a href="logout.php" class="btn-button"><button>Sair</button></a>
                </div>
            </div>
        </section>
    </header>
</main>
</body>
</html>