<?php
    session_start();
    require_once "modelos/Alumno.php";
    require_once "modelos/Admin.php";
    $alumno = new Alumno(); 
    $admin = new Admin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans&family=Montserrat&display=swap" rel="stylesheet">
    <title>Residencias</title>
</head>
<body>
    <?php
    require_once 'controladores/controlador_index.php';
    ?>
</body>

</html>