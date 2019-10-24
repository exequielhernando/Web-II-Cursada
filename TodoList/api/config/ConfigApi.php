<?php
define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"]. ":". $_SERVER['SERVER_PORT'] . dirname($_SERVER["PHP_SELF"]));


class ConfigApi{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
        '' => 'TareasController#Home',
        'home' => 'TareasController#Home',
        'agregar' => 'TareasController#InsertTarea',
        'borrar' => 'TareasController#BorrarTarea',
        'completada' => 'TareasController#CompletarTarea',
        'login' => 'LoginController#login',
        'verificarLogin' => 'LoginController#verificarLogin',
        'mostrarUsuarios'=> 'UsuarioController#MostrarUsuario'
    ];
}



?>