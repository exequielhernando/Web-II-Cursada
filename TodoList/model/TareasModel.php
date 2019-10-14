<?php

class TareasModel{
    private $db;

    function __construct() {
        $this->db = $this->Connect();
    }

    private function Connect(){
        return new PDO('mysql:host=localhost;'
         .'dbname=db_tareas;charset=utf8'
         , 'root', '');
     }

    function GetTareas(){

        $sentencia = $this->db->prepare( "select * from tarea");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }
    function InsertarTarea($titulo, $descripcion,$completada){
        
        $sentencia = $this->db->prepare("INSERT INTO tarea(titulo, descripcion, completada) VALUES(?,?,?)");
        $sentencia->execute(array( $titulo, $descripcion,$completada));
    }
    function BorrarTarea($id_tarea) {
        $sentencia = $this->db->prepare("delete from tarea where id=?");
        $sentencia->execute(array($id_tarea));
    }
    function CompletarTarea($id_tarea){
        $sentencia = $this->db->prepare("UPDATE tarea SET completada=1 where id=?");
        $sentencia->execute(array($id_tarea));
    }
}


?>