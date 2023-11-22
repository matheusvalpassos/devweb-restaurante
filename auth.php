<?php
    
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $nivel = "U";

    if($usuario == 'cliente' && $senha == '123'){
        session_start();

        $_SESSION['usuario'] = $usuario; /* usuario n tem haver com usuario do $POST */
        $_SESSION['nivel'] = $nivel;

        if($nivel =="U"){
            header('location:home.php');
        }
        elseif($nivel =="A"){
            header('location:admin.php');
        }
    }
    else{
        header('location:login.php?erro-pass=true'); 
        exit;
    }
?>