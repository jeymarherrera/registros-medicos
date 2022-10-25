<?php
session_start();// Comienzo de la sesión
class Controller
{
    public function Index(){
        require("view/home.php");
    }

    public function Blog(){
        require("view/blog.php");
    }

    public function AgendarCita(){
        require("view/agendar.php");
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

    public function RegistrarPaciente(){
        require("view/signin.php");
    }

}
