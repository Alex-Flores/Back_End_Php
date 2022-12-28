<?php
    class Conectar{

        public static function conexion(){
            $conexion = new mysqli("localhost:3308", "root", "", "mvc");
            return $conexion;
        }
    }
?>