<?php
class Auth extends ControladorIndex
{
    public  static function estaLogueado()
    {
    	Session::init();
    	if (isset($_SESSION['usuario_ci'])) {
            return $_SESSION['usuario_ci'];
        } else {
            return null;
        }
    }
}?>