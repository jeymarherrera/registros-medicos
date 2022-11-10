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

    public function Registrar(){
        require("view/signin.php");
    }
    
    public function Pacientes(){
        require("view/pacientes.php");
    }

    public function nuevoPacientes(){
        require("view/agregar-paciente.php");
    }

    public function nuevaCita(){
        require("view/agregar-cita.php");
    } 
    public function Expedientes(){
        require("view/expedientes.php");
    }

    public function Reportes(){
        require("view/reportes.php");
    }
}
