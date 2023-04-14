<?php

    class loginControlador{
        public function iniciarSesionControlador($username, $password){
            return "<span class='exito'>Bienvendio " . $username . " " . $password . "</span>";
        }
    }