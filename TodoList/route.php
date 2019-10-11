<?php
    require_once "index.php";
    require_once "tareas.php";
    
    $partesURL = explode('/', $_GET['action']);

    if ($partesURL[0] == ''){
        Home();
    }
    else{
        if ($partesURL[0] == 'agregar'){
            InsertTarea();
        }elseif ($partesURL[0] == 'borrar') {
            BorrarTarea($partesURL[1]);
        }elseif($partesURL[0] == 'completada'){
            CompletarTarea($partesURL[1]);
        }
    }

?>