
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
    elseif ($opcion=="permitido"){
        $controller->IngresarPanel();
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

