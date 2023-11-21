<?php
$botonLogin = isset($_POST["login"]);
$botonLogout = isset($_POST['logout']);

if ($botonLogin) {
    $correo = $_POST["correo"]; // correo
    $pass = $_POST["pass"]; // contraseña

    if (empty($usuario) || empty($pass)) {
        echo '<script>alert("Por favor, complete todos los campos.");</script>';
        echo '<script>window.location.href = "index.php";</script>';
        exit();
    }

    $usuario->correo = $correo;
    $usuario->pass = $pass;

    if(!$usuario->iniciarSesion()){
        echo '<script>alert("Las credenciales son incorrectas. Verificalas por favor");</script>';
        echo '<script>window.location.href = "index.php";</script>';
        exit();
    }
    
    $_SESSION['id'] = $usuario->id;
    $_SESSION['rol'] = $usuario->rol;

    echo '<script>alert("Bienvenido");</script>';
    echo '<script>window.location.href = "index.php";</script>';
}


if($botonLogout){
    session_destroy();
    echo '<script>alert("Vuelve pronto :).");</script>';
    echo '<script>window.location.href = "./?p=2";</script>';
    exit();
}
?>