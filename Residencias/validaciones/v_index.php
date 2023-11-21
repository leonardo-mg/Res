<?php
$botonLogin = isset($_POST["login"]);
$botonLogout = isset($_POST['logout']);
    if ($botonLogin) {
        $usuario = $_POST["user"]; //usuario
        $pass = $_POST["pass"]; //contraseña
        if (empty($usuario) || empty($pass)) {
            echo '<script>alert("Por favor, complete todos los campos.");</script>';
            echo '<script>window.location.href = "index.php";</script>';
            exit();
        //}else if(!$alumno->iniciarSesion()){
        //    echo '<script>alert("Las credenciales son incorrectas. Verificalas por favor");</script>';
        //    echo '<script>window.location.href = "index.php";</script>';
        //    exit();
        }else{
            //datos para el usuario
            $_SESSION['user'] = $usuario;
            $_SESSION['tipo'] = 1;
           //$alumno->usuario = $usuario;
           //$alumno->tipo =  1;
        //echo "<label>".$_SESSION['tipo']."</label>";
            echo '<script>alert("Bienvenido");</script>';
            echo '<script>window.location.href = "?p=1";</script>';
        }
    }
    if($botonLogout){
        session_destroy();
        echo '<script>alert("Vuelve pronto :).");</script>';
        echo '<script>window.location.href = "./?p=2";</script>';
        exit();
    }
?>