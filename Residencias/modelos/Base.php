<?php 
    class Base{

        var $host = "localhost";
        //var $port = "";
        var $user = "root";
        var $pass = "";
        var $database = "itver";
        
        function connect(){
            $connection = mysqli_connect($this->host, $this->user, $this->pass);
            if(!$connection){
                die("Conexion fallida".mysqli_connect_error());
            }
            if(!mysqli_select_db($connection, $this->database)){
                die("La base de datos no existe");
            }
            return $connection;
        }
    }
?>