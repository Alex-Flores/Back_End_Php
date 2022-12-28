<?php
    class VehiculosController{
        // ESTO ES PRUEBA
        public function __construct(){
            require_once("models/VehiculosModel.php");
        }
        public function index(){
            // require_once "../models/VehiculosModel.php";
            // ESTE VA
            // require_once("models/VehiculosModel.php");
            // HACEMOS UN OBJETO DEL MODELO
            $vehiculos = new Vehiculos_model();
            // LLAMAMOS EL CATALOGO Y LO PASAMOS A LA VISTA
            $data["titulo"] = "Vehiculos";
            $data["vehiculos"] = $vehiculos->get_vehiculos();

            // require_once "views/vehiculos/vehiculos.php";
            require_once "views/session.php";
        }
        public function nuevo(){
            $data["titulo"] = "Vehiculos";
            require_once "views/vehiculos/vehiculos_nuevo.php";
        }
        public function ingresar(){
            $data["titulo"] = "Vehiculos";
            require_once "views/ingresar.php";
        }
        public function crear(){
            $data["titulo"] = "Vehiculos";
            require_once "views/crear.php";
        }
        public function portada($id){
            $vehiculos = new Vehiculos_model();
            $data["vehiculos"] = $vehiculos->get_portada($id);
            // $data["titulo"] = "Vehiculos";
            // require_once "views/portada.php";
        }
        public function producto(){
            $vehiculos = new Vehiculos_model();
            $data["vehiculos"] = $vehiculos->get_vehiculos();
            $data["titulo"] = "Vehiculos";
            require_once "views/producto2.php";
        }
        // public function producto2($id){
            // $vehiculos = new Vehiculos_model();
            // $data["vehiculos"] = $vehiculos->get_producto($id);
            // $data["titulo"] = "Vehiculos";
            // require_once "views/menu.php";
        // }

        public function perfil($id){
            // PARA TERMINAR AL FINAL
            // $vehiculos = new Vehiculos_model();
            // $data["vehiculos"] = $vehiculos->get_users();
            $vehiculos = new Vehiculos_model();
            $data["vehiculos"] = $vehiculos->get_users($id);
            $data["titulo"] = "Vehiculos";
            require_once "views/miperfil.php";
        }



        public function carro(){
            $data["titulo"] = "Vehiculos";
            require_once "views/carro.php";
        }
        public function soporte($id){
            $vehiculos = new Vehiculos_model();
            $data["vehiculos"] = $vehiculos->get_soporte($id);
            // $data["titulo"] = "Vehiculos";
            // require_once "views/soporte.php";
        }
        public function session(){
            $nombre = $_POST['nombre'];
            $password = $_POST['password'];
            
            $usuario = new Vehiculos_model();
            $usuario->logearse($nombre, $password);
            $data["titulo"] = "Vehiculos";
            // require_once "views/miperfil.php";
        }
        public function subir(){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $ciudad = $_POST['ciudad'];

            // INSTANCIAMOS AL MODELO VEHICULOS
            $vehiculos = new Vehiculos_model();
            // VALIDACIONES
            $vehiculos->insertar_user($email, $password, $nombre, $apellido, $ciudad);
            $data["titulo"] = "Vehiculos";
            $this->index();
        }


        public function guarda(){
            $placa = $_POST['placa'];
            $marca = $_POST['marca'];
            $modelo = $_POST['modelo'];
            $anio = $_POST['anio'];
            $color = $_POST['color'];

            // INSTANCIAMOS AL MODELO VEHICULOS
            $vehiculos = new Vehiculos_model();
            // VALIDACIONES
            $vehiculos->insertar($placa, $marca, $modelo, $anio, $color);
            $data["titulo"] = "Vehiculos";
            // require_once "views/vehiculos/vehiculos_nuevo.php";
            $this->index();
        }
        public function modificar($id){
            $vehiculos = new Vehiculos_model();
            

            $data["id"] = $id;
            $data["vehiculos"] = $vehiculos->get_vehiculos($id);
            $data["titulo"] = "Vehiculos";
            require_once "views/vehiculos/vehiculos_modifica.php";
        }
        public function actualizar(){
            $id = $_POST['id'];
            $placa = $_POST['placa'];
            $marca = $_POST['marca'];
            $modelo = $_POST['modelo'];
            $anio = $_POST['anio'];
            $color = $_POST['color'];

            // INSTANCIAMOS AL MODELO VEHICULOS
            $vehiculos = new Vehiculos_model();
            // VALIDACIONES DEL MODELO
            $vehiculos->modificar($id, $placa, $marca, $modelo, $anio, $color);
            $data["titulo"] = "Vehiculos";
            // require_once "views/vehiculos/vehiculos_nuevo.php";
            $this->index();
        }
        public function eliminar($id){

            // INSTANCIAMOS AL MODELO VEHICULOS
            $vehiculos = new Vehiculos_model();
            // VALIDACIONES
            $vehiculos->eliminar($id);
            $data["titulo"] = "Vehiculos";
            // require_once "views/vehiculos/vehiculos_nuevo.php";
            $this->index();
        }
    }
?>