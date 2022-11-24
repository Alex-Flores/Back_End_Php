<?php
    class User
    {
        private $dbh;
        private $servicio;
        public function __construct()
        {
            $this->servicio = array();
            $this->dbh = new PDO('mysql:host=localhost:3308;dbname=validar', "root", "");
        }

        private function set_names()
        {
            return $this->dbh->query("SET NAMES 'utf8'");
        }

        // MOSTRAR ALGO POR VIEW
        public function getServicios() {

            self::set_names();
            $sql = "SELECT id, usuario, pass FROM personal";
            foreach ($this->dbh->query($sql) as $res) {
                $this->servicio[] = $res;
            }
            return $this->servicio;
        }
    

        // INGRESAR DATOS POR MODELO
        public function setServicio($usuario, $password) {
    
            self::set_names();
            $sql = "INSERT INTO personal(usuario, pass) VALUES ('" . $usuario . "', '" . $password . "')";
            $result = $this->dbh->query($sql);
    
            if ($result) {
                return true;
            } else {
                return false;
            }
        }

        // PARA LOGIN
        public function logearse($usuario, $password){
            $conexion = mysqli_connect("localhost:3308","root","","validar");
    

            $consulta = "SELECT * FROM Personal where usuario = '$usuario' and pass = '$password' ";
            $resultado = mysqli_query($conexion, $consulta);

            // ALMACENAMOS FILAS
            $filas = mysqli_num_rows($resultado);

            if($filas){
                header("location:../view/home.php");
            }else{
                include('../index.php');
                ?>
                <h1>ERROR DE AUTENTIFICACION</h1>
                <?php
            }
            mysqli_free_result($resultado);
            mysqli_close($conexion);
        }
    }
?>