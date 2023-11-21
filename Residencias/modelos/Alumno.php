<?php 
    require_once "Base.php";
    class Alumno{
        var $id; 
        var $nombre;
        var $usuario;
        var $pass;
        var $tipo;
        private $db;

        function __construct(){
            //$database = new Base();
            //$this->db = $database->connect();

        }
        
        function iniciarSesion() {
            $sql = "SELECT usuario, password, tipo, nombre FROM Usuarios WHERE usuario = '".$this->usuario."' && password = '".$this->pass."';";
            if ($result = mysqli_query($this->db, $sql)) {
                $row = mysqli_fetch_assoc($result);
                if(isset($row['usuario']) && isset($row['password'])){
                    if($this->usuario == $row['usuario'] && $this->pass == $row['password']){   
                        $this->tipo = $row['tipo'];
                        $this->nombre = $row['nombre'];
                        return true;
                    }
                    return false;
                }
            }
        }
    }


?>