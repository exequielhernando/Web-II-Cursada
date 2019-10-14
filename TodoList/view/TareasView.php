<?php

class TareasView{
        
    function Mostrar($Titulo, $Tareas){
    ?>
    
    <!doctype html>
    <html lang="en">
      <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
        <title><?php echo $Titulo ?></title>
      </head>
      <body>
        <div class="container">  
            <h1><?php echo $Titulo ?></h1>
            <div class="container">
                <ul class="list-group">
                    <?php
                        foreach ($Tareas as $tarea) {
                            if ($tarea['completada'] == 1) {
                                echo '<li class="list-group-item"><s>'.$tarea['titulo']. ':'.$tarea['descripcion'].'</s><a href="borrar/'.$tarea['id'].'">BORRAR</a></li>';
                            }else {
                                echo '<li class="list-group-item">'.$tarea['titulo']. ':'.$tarea['descripcion'].'<a href="borrar/'.$tarea['id'].'">BORRAR</a> | <a href="completada/'.$tarea['id'].'">COMPLETADA</a></li>';  
                            }
                        }; 
                    ?>
                </ul>
            </div>
            <div class="container">
                <form method="post" action="agregar">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Titulo</label>
                        <input type="text" class="form-control" id="tituloForm" name="tituloForm"/>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Descripcion</label>
                        <input type="text" class="form-control" id="descripcionForm" name="descripcionForm"/>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="completadaForm" name="completadaForm"/>
                        <label class="form-check-label" for="exampleCheck1">Completada</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Crear tarea</button>
                </form>
            </div>
            
            
        </div>
    <?php
    }
}

?>