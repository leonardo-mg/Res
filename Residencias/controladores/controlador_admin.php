<?php
$siEsVacio = empty($_GET["p"]);
$siExiste = isset($_GET["p"]);
$ruta = "vistas/admin/";
//require_once "validaciones/v_index.php";
//require_once "validaciones/index.php";
//$tablaEjercicios = array();

if (!$siEsVacio && $siExiste) {
    $numeroPagina = $_GET["p"];
    switch ($numeroPagina) {//cuerpo de la pagina
        case 1:
            require_once "vistas/vista_header.php";
            require_once $ruta."home.php";//home
            break;
        case 2:
            require_once $ruta."navegacion.php";
            require_once $ruta."alumnos.php";//alumnos
            break;        
        case 3:
            require_once $ruta."navegacion.php";
            require_once $ruta."listas.php";//lista
            break;
        case 4:
            require_once $ruta."navegacion.php";
            require_once $ruta."registro.php";//registro
            break;
        case 5:
            require_once $ruta."navegacion.php";
            require_once "vistas/cuenta.php";//registro
            break;
        default:
        require_once "vistas/vista_header.php";
        require_once $ruta."home.php";//home
        break;
    }
}else{
    require_once $ruta."home.php";//header    
}