
<?php

//Incluyo los archivos necesarios
require("./controller/controller.php");

//Instancio el controlador
$controller = new Controller;

//Decido la ruta en función de los elementos del array
if (isset($_GET['op']))
{
    $opcion=$_GET['op'];
    if ($opcion=="blog"){
        $controller->Blog();
    }
    elseif ($opcion=="agendar"){
        $controller->AgendarCita();
    }
    elseif ($opcion=="ingresar"){
        $controller->Ingresar();
     }
    elseif ($opcion=="panel"){
        $controller->IngresarPanel();
    }
    elseif ($opcion=="expedientes"){
        $controller->Expedientes();
    }
    elseif ($opcion=="pacientes"){
        $controller->Pacientes();
    }
    elseif ($opcion=="nuevoPaciente"){
        $controller->nuevoPacientes();
    }
    elseif ($opcion=="nuevaCita"){
        $controller->nuevaCita();
    }
    elseif ($opcion=="reportes"){
        $controller->Reportes();
    }
    elseif ($opcion=="recuperar"){
        $controller->RecuperarContrasena();
    }
    else{
        $controller->Index();
    }
}
else{
    $controller->Index();
    }

