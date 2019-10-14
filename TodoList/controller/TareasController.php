<?php
require_once "./View/TareasView.php";
require_once "./Model/TareasModel.php";

class TareasController{
    private $view;
    private $model;
    private $Titulo;

    function __construct() {
        $this->view = new TareasView();
        $this->model = new TareasModel();
        $this->Titulo = "Lista de tareas Controlador 1";
    }
    function Home(){
        $Tareas = $this->model->GetTareas();
        $this->view->Mostrar($this->Titulo, $Tareas);
    }
    function InsertTarea(){
        $titulo = $_POST["tituloForm"];
        $descripcion = $_POST["descripcionForm"];
        if(isset($_POST["completadaForm"])) {
            $completada = 1;
        }else {
            $completada = 0;    
        };
        $this->model->InsertarTarea($titulo,$descripcion,$completada);
    
        header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
    }
    function BorrarTarea($param) {
        $this->model->BorrarTarea($param[0]);
        header("Location: http://".$_SERVER["SERVER_NAME"] .dirname($_SERVER["PHP_SELF"]));
    }
    function CompletarTarea($param){
        $this->model->CompletarTarea($param[0]);
        header("Location: http://".$_SERVER["SERVER_NAME"] .dirname($_SERVER["PHP_SELF"]));
    }
    function EditarTarea($id_tarea){
        $tarea = $this->model->GetTarea($id_tarea);
        $this->view->MostrarTarea($tarea);
    }
}

?>