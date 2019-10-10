<?php
require_once "tareas.php";
function Home(){

    $Titulo = "Lista de tareas";
    
   
    
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
                    foreach (GetTareas() as $tarea) {
                        if ($tarea['completada'] == 1) {
                            echo '<li class="list-group-item"><s>'.$tarea['titulo']. ':'.$tarea['descripcion'].'</s></li>';
                        }else {
                            echo '<li class="list-group-item">'.$tarea['titulo']. ':'.$tarea['descripcion'].'</li>';  
                        }
                    }; 
                ?>
            </ul>
        </div>
        <div class="container">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Titulo</label>
                    <input type="text" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Descripcion</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" >
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Completada</label>
                </div>
                <button type="submit" class="btn btn-primary">Crear tarea</button>
            </form>
        </div>
        
        
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html> 
<?php
}

?>