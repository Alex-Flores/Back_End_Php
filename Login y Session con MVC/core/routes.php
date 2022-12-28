<?php
    function cargarControlador($controlador){
        // ucwords - agrega la nomenclatura en minuscula
        $nombreControlador = ucwords($controlador)."Controller";
        $archivoControlador = "controllers/".ucwords($controlador).".php";

        // CON ESTO AVERIGUAMOS SI LA CLASE EXISTE CORRECTAMENTE
        if(!is_file($archivoControlador)){
            // ESTO FUNCIONA PORQUE SE HEREDA DESDE EL INDEX
            $archivoControlador = 'controllers/'.CONTROLADOR_PRINCIPAL.".php";
        }
        // echo $archivoControlador;
        // TENIENDO LA VALIDACION, HAY QUE INVOCARLO
        require_once $archivoControlador;
        $control = new $nombreControlador();
        // $control = $nombreControlador;
        return $control;
    }
    function cargarAccion($controller, $accion, $id = null){
        // if(isset($_GET['a']) && method_exists($controller, $_GET['a'])){
        if(isset($accion) && method_exists($controller, $accion)){
            if($id==null){
                $controller->$accion();
            }else{
                $controller->$accion($id);
            }
        }else{
            $controller->ACCION_PRINCIPAL();
        }
    }
?>