<?php
    include 'check_login.php';
    if($_SESSION['nivel'] != "A"){
        session_destroy(); 
        header('location:login.php?erro_login=true');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel=stylesheet href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
<h1>Página de Administração</h1>
    <p>Usuário logado: <?php echo $usuario ; ?> </p>


    <a href="logout.php">Sair</a>

</body>
</html>