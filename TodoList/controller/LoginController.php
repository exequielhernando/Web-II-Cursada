<?php

require_once "./view/LoginView.php";
require_once "./model/UsuarioModel.php";


class LoginController{
        private $view;
        private $model;
        private $Titulo;

        function __construct() {
            $this->view = new LoginView();
            $this->model = new UsuarioModel();
            $this->Titulo = "Login";
        }

        function login(){
            $this->view->mostrarLogin();
        }
        function logout(){
            session_start();
            session_destroy();
            header(LOGIN);
        }
        function verificarLogin(){
            $usuario = $_POST["usuarioId"];
            $password = $_POST["passwordId"];
            $dbUser = $this->model->GetUser($usuario);
            if(isset($dbUser)){
                if(password_verify($password, $dbUser[0]["password"])) {
                    //mostrar lista de tareas
                    session_start();
                    $_SESSION["User"] = $usuario;
                    header(HOME);
                }else{
                    echo isset($dbUser);
                    $this->view->mostrarLogin("Contraseña Incorrecta");
                }
            }else{
                $this->view->mostrarLogin("No existe el usuario");
            }      
        }
    }
    


?>