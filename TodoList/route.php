<?php
    require_once "controller/TareasController.php";


    $controller = new TareasController();

    $partesURL = explode('/', $_GET['action']);

    if ($partesURL[0] == ''){
        $controller->Home();
    }
    else{
        if ($partesURL[0] == 'agregar'){
            $controller->InsertTarea();
        }elseif ($partesURL[0] == 'borrar') {
            $controller->BorrarTarea($partesURL[1]);
        }elseif($partesURL[0] == 'completada'){
            $controller->CompletarTarea($partesURL[1]);
        }
    }

?>