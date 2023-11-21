<?php
if(empty($_SESSION['user'])){
    $siEsVacio = empty($_GET["p"]);
    $siExiste = isset($_GET["p"]);
    require_once "validaciones/v_index.php";
    if (!$siEsVacio && $siExiste) {
        echo'<link rel="stylesheet" href="css/index.css">?';
       require_once "vistas/login.php";
    }
    echo "tipo-> ".$alumno->tipo;
}else if($_SESSION['tipo'] == 1){
    echo "Admin";
    require_once "controladores/controlador_admin.php";
}else{
    //require_once "controladores/controlador_alumno.php";
    //acomodar el controlador de admin  
}
?>