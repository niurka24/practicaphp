<?php
class Sesion {
    public function __construct() {
        session_start();
    }
    public function setSesion($nombre, $valor) {
        $_SESSION[$nombre] = $valor;
    }
    public function getSesion($nombre) {
        if (isset($_SESSION[$nombre]) {
            return $_SESSION[$Nombre];
        }
    }
}

