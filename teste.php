<?php

$usuario = trim($_POST['usuario']);
$senha = trim($_POST['senha']);

if(empty($usuario) && empty($senha))
{

    $sql = "SELECT * FROM usuarios WHERE usuario = :usuario";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":usuario", $usuario);
    $stmt->execute();
    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

    if($resultado && password_verify($senha, $resultado['senha']))
        {
            $_SESSION['usuario'] = $resultado['usuario'];
            $_SESSION['email'] = $resultado['email'];
            $_SESSION['nome_usuario'] = $resultado['nome_usuario'];
            $_SESSION['email'] = $resultado['email'];

            header("Location: inicio.php");
            die();

        } else {
            header("Refresh: 2 login.php");
            echo "Credenciais inválidas!";
            die();
        }
    } else {
        header("Refresh: 2 login.php");
        echo "Credenciais inválidas!";
        die();
    }
