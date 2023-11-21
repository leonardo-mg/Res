<?php 
    #require_once 'Base.php';
    
    class Usuario{

        var $id; 
        var $correo;
        var $pass;
        var $rol;
        private $db;

        function __construct(){
            #$database = new Base();
            #$this->db = $database->connect();
        }
        
        function iniciarSesion() {
            $sql = "SELECT * FROM usuarios WHERE correo = '".$this->correo."' && pass = '".md5($this->pass)."';";
            if ($result = mysqli_query($this->db, $sql)) {
                if($row = mysqli_fetch_assoc($result)){
                    $this->id = $row['idUsuario'];
                    $this->rol = $row['idRol']; # Jalamos el tipo de usuario de la tabla de usuarios
                    return true;
                }
            }
            return false;
        }

        function obtenerDatosAlumno(){
            $sql = "SELECT * FROM alumnos WHERE idUsuario == '".$this->id."';";
            if($result = mysqli_query($this->db, $sql)){
                if($row = mysqli_fetch_assoc($result)){
                    return $row;
                }
            }
            return false;
        }
    }
?>