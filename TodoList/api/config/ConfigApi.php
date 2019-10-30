<?php
define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"]. ":". $_SERVER['SERVER_PORT'] . dirname($_SERVER["PHP_SELF"]));


class ConfigApi{
    public static $RESOURCE = 'resource';
    public static $PARAMS = 'params';
    public static $RESOURCES = [
        'tarea#GET' => 'TareasApiController#GetTareas',
        'tarea#POST' => 'TareasApiController#PostTareas',
        'tarea#PUT' => 'TareasApiController#PuTareas',
        'tarea#DELETE' => 'TareasApiController#DeleteTareas',
    ];
}



?>