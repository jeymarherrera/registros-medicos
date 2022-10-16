<?php
session_start();// Comienzo de la sesión
class Controller
{
    public function Index(){
        //Le paso los datos a la vista
        require("view/home.php");
    }

    public function CrearUsuario(){

        require("view/signin.php");

    }

    public function Ingresar(){

        require("view/signup.php");

    }

    public function IngresarPanel(){

        require("view/dashboard.php");

    }

    public function RecuperarContrasena(){

        require("view/forgot.php");

    }

}
