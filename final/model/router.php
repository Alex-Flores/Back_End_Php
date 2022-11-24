<?php
    class Router{
        public function __construct($login, $reg){
            $this->login = $login;
            $this->reg = $reg;
        }
        public function mostrar(){
            echo $this->login;
            echo $this->$reg;
        }
    }
?>