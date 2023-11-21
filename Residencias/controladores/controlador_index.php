<?php
# Variables
$ruta = 'vistas/';


# Validaciones


if ($siHayPaginador) {
    $numeroPagina = $_GET["p"];
    
    switch ($numeroPagina) {//cuerpo de la pagina
        case 1:
            require_once $ruta."login.php";
            break;
        default:
            require_once $ruta."login.php";
            break;
        break;
    }

}else{
    require_once $ruta."login.php";
}

?>

