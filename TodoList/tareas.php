<?php
    function Connect(){
       return new PDO('mysql:host=localhost;'
        .'dbname=db_tareas;charset=utf8'
        , 'root', '');
    };
    function GetTareas(){
        $db = Connect();

        $sentencia = $db->prepare( "select * from tarea");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);

    };
    function InsertTarea(){
        $titulo = $_POST["tituloForm"];
        $descripcion = $_POST["descripcionForm"];
        if(isset($_POST["completadaForm"])) {
            $completada = 1;
        }else {
            $completada = 0;    
        };

        $db = Connect();
        
        $sentencia = $db->prepare("INSERT INTO tarea(titulo, descripcion, completada) VALUES(?,?,?)");
        $sentencia->execute(array( $titulo, $descripcion,$completada));
        header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
    };
    function BorrarTarea($id_tarea) {
        $db = Connect();
        $sentencia = $db->prepare("delete from tarea where id=?");
        $sentencia->execute(array($id_tarea));
        header("Location: http://".$_SERVER["SERVER_NAME"] .dirname($_SERVER["PHP_SELF"]));
    }
    function CompletarTarea($id_tarea){
        $db = Connect();
        $sentencia = $db->prepare("UPDATE tarea SET completada=1 where id=?");
        $sentencia->execute(array($id_tarea));
        header("Location: http://".$_SERVER["SERVER_NAME"] .dirname($_SERVER["PHP_SELF"]));
    }
?>