<?php 
    class UsuarioModel{
        private $db;

        function __construct() {
            $this->db = $this->Connect();
        }

        private function Connect(){
            return new PDO('mysql:host=localhost;'
            . 'dbname=db_tareas; charset=utf8'
            ,'root', '');
        }
        function GetUsuario(){
           $sentencia = $this->db->prepare("SELECT * FROM usuario");
           $sentencia->execute();
           return $sentencia->fetchAll(PDO::FETCH_ASSOC);
        }
        function InsertarUsuario($nombre, $password){
            $sentencia = $this->db->prepare("INSERT INTO usuario(nombre, password) VALUES (?,?)");
            $sentencia->execute(array($nombre, $password));
        }
        function GetUser($user){
            $sentencia = $this->db->prepare("SELECT * FROM usuario WHERE nombre=? limit 1");
            $sentencia->execute(array($user));
            return $sentencia->fetchAll(PDO::FETCH_ASSOC);
        }
    
    }
?>