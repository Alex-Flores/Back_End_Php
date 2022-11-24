<?php
    include_once('../model/modelo.php');
    $user_service = new User();
    $datos = $user_service->getServicios();
    require_once("../view/vista.php");
?>