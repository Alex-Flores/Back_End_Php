<?php
    class Vehiculos_model{
        private $db;
        private $vehiculos;

        public function __construct(){
            $this->db = Conectar::conexion();
            $this->vehiculos = array();
        }
        // CARGA EL CATALOGO DE LA TABLA VEHICULOS
        public function get_vehiculos(){
            $sql = "SELECT * FROM vehiculos";
            $resultado = $this->db->query($sql);
            // RECORREMOS EL SQL Y LO GUARDAMOS EN UN ARRAY
            while($row = $resultado->fetch_assoc()){
                // PASAMOS TODOS LOS RESULTADOS
                $this->vehiculos[] = $row;
            }
            // RETORNAMOS EL VALOR
            return $this->vehiculos;
        }
        public function insertar($placa, $marca, $modelo, $anio, $color){
            $resultado = $this->db->query("INSERT INTO vehiculos (placa, marca, modelo, anio, color) VALUES ('$placa', '$marca', '$modelo', '$anio', '$color')");
        }
        public function modificar($id, $placa, $marca, $modelo, $anio, $color){
            $resultado = $this->db->query("UPDATE vehiculos SET placa ='$placa', marca = '$marca', modelo = '$modelo', anio = '$anio', color = '$color' WHERE id = '$id'");
        }
        public function eliminar($id){
            $resultado = $this->db->query("DELETE FROM vehiculos WHERE id = '$id'");
        }

        public function get_vehiculo($id){
            $sql = "SELECT * FROM vehiculos WHERE id = '$id' LIMIT 1";
            $resultado = $this->db->query($sql);
            
            // RECORREMOS EL SQL Y LO GUARDAMOS EN UN ARRAY
            // while($row = $resultado->fetch_assoc()){
            // while($row = $resultado->fetch_array()){
                // PASAMOS TODOS LOS RESULTADOS
                // $this->vehiculos[] = $row;
            // }
            // RETORNAMOS EL VALOR
            // return $this->vehiculos;

            $row = $resultado->fetch_assoc();
            return $row;
        }
        public function logearse($usuario, $password){
            $conexion = mysqli_connect("localhost:3308","root","","mvc");

            $consulta = "SELECT * FROM users where nombre = '$usuario' and password = '$password' LIMIT 1";
            $resultado = mysqli_query($conexion, $consulta);

            // ALMACENAMOS FILAS
            $filas = mysqli_num_rows($resultado);

            if($filas){
                // header("location: views/miperfil.php");
                require_once "views/miperfil.php";
            }else{
                // include('../index.php');
                require_once "views/ingresar.php";
                ?>
                <h1>ERROR DE AUTENTIFICACION</h1>
                <?php
            }
            mysqli_free_result($resultado);
            mysqli_close($conexion);
        }
        // PARA TERMINAR AL FINAL
        // public function get_users(){
        //     $sql = "SELECT * FROM vehiculos WHERE id = '$id' LIMIT 1";
        //     $resultado = $this->db->query($sql);

        //     $row = $resultado->fetch_assoc();
        //     return $row;
        // }
        public function insertar_user($email, $password, $nombre, $apellido, $ciudad){
            $resultado = $this->db->query("INSERT INTO users (email, password, nombre, apellido, ciudad) VALUES ('$email', '$password', '$nombre', '$apellido', '$ciudad')");
        }
        public function get_users($id){
            $sql = "SELECT * FROM users WHERE id = '$id' LIMIT 1";
            $resultado = $this->db->query($sql);
            require_once "views/miperfil.php";
            // $row = $resultado->fetch_assoc();
            // return $row;
            // $resultado->fetch_assoc();
            // return $resultado;
        }
        public function get_portada($id){
            $sql = "SELECT * FROM users WHERE id = '$id' LIMIT 1";
            $resultado = $this->db->query($sql);
            require_once "views/portada.php";
        }
        public function get_producto($id){
            $sql = "SELECT * FROM users WHERE id = '$id' LIMIT 1";
            $resultado = $this->db->query($sql);
            // return $dts;
            // require_once "views/producto2.php";
        }
        public function get_soporte($id){
            $sql = "SELECT * FROM users WHERE id = '$id' LIMIT 1";
            $resultado = $this->db->query($sql);
            require_once "views/soporte.php";
        }
        public function get_traer(){

            $sql = "SELECT * FROM users WHERE id = '$id' LIMIT 1";
            $resultado = $this->db->query($sql);
            return $resultado;
        }
        public function metrica($ig){
            $variable = $ig;
        }
    }
?>