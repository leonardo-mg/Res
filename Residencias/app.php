<?php
# Establecer la sesion
session_start();

# Paginador
$siNoEstaVacio = !empty($_GET["p"]);
$siExiste = isset($_GET["p"]);
$siHayPaginador = $siNoEstaVacio && $siExiste;

# Roles
$ALUMNO = 0;
$ADMINISTRADOR = 1;

# Validaciones
require_once 'validaciones/v_index.php';

if( empty($_SESSION) || !isset($_SESSION) ){
    require_once "modelos/Usuario.php";
    $usuario = new Usuario(); 

    require_once 'controladores/controlador_index.php';


}else if ($_SESSION["rol"] == $ALUMNO){
    require_once 'modelos/Alumno.php';
    $alumno = new Alumno();

    echo "Alumno";


}else if($_SESSION["rol"] == $ADMINISTRADOR){
    require_once 'modelos/Admin.php';
    $administrador = new Admin();

    echo "Administrador";
    require_once 'controladores/controlador_index.php';
}

?>