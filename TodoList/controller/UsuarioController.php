<?php
require_once "./view/UsuarioView.php";
require_once "./model/UsuarioModel.php";

class UsuarioController{
    private $view;
    private $model;
    private $Titulo;
    
    function __construct() {
        $this->view = new UsuarioView();
        $this->model = new UsuarioModel();
        $this->Titulo = "Lista de Usuario";
    }

    function MostrarUsuario(){
        $Usuario = $this->model->GetUsuario();
        $this->view->Mostrar($this->Titulo, $Usuario);
    }
    function InsertarUsuario(){
        $nombre = $_POST["nombre"];
        $password = $_POST["password"];

        $this->model->InsertarUsuario($nombre,$password);

        header("Location: http://".$_SERVER["SERVER_NAME"] .dirname($_SERVER["PHP_SELF"]));
    }
}

?>